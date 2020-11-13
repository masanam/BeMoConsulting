@servers(['web' => 'devops@dev.infyom.co.id'])

@setup
    # User
    $mysql_user_name = 'infyom';
    $mysql_user_pass = 'blokA17#31';
    $repository_ip = 'dev.infyom.co.id';
    # System
    $gitlab_username = $dockeruser;
    $gitlab_project_name = $project;
    $gitlab_project__branch_name = $branch;
    $mysql_user_db = $gitlab_project_name;
    $app_dir = '~/';
    $releases_dir = $app_dir . $gitlab_project_name;
    $release = date('YmdHis');
    $new_release_dir = $releases_dir .'/www';
    $storage_dir = $releases_dir .'/storage';
    $mysql_dir = $releases_dir .'/mysql';
    $repository = 'git@'. $repository_ip .':'. $gitlab_username .'/'. $gitlab_project_name .'.git';
    $dockerhub_url = $dockerhub;
    $image_tag = $gitlab_username .'/'. $gitlab_project_name .':'. $gitlab_project__branch_name;
@endsetup

@story('deploy')
    start_deployment
    run_docker
    migrate_database
    import_database
    docker_system_prune
@endstory

@task('start_deployment')
    echo "Starting deployment ({{ $release }})"
    [ -d {{ $releases_dir }} ] || mkdir {{ $releases_dir }}
    [ -d {{ $mysql_dir }} ] || mkdir -p {{ $mysql_dir }}
    [ -d {{ $storage_dir }} ] || mkdir -p {{ $storage_dir }}/{app/public,framework/{cache/data,sessions,testing,views},logs}
@endtask

@task('run_docker')
    echo "Running docker ({{ $image_tag }})"
    docker login -u {{ $dockeruser }} -p {{ $dockerpwd }} {{ $dockerhub_url }}
    docker pull {{ $dockerhub_url }}{{ $image_tag }}
    docker rm -f {{ $gitlab_project_name }} || true
    docker run -p {{ $port }}:80 -e "MYSQL_ADMIN_PASS={{ $dockerpwd }}" -e "MYSQL_USER_DB={{ $mysql_user_db }}" -e "MYSQL_USER_NAME={{ $mysql_user_name }}" -e "MYSQL_USER_PASS={{ $mysql_user_pass }}" -v {{ $storage_dir }}:/app/storage -v {{ $mysql_dir }}:/var/lib/mysql --name {{ $gitlab_project_name }} -d {{ $dockerhub_url }}{{ $image_tag }}
    sleep 30
@endtask

@task('migrate_database')
    echo 'Preparing project'
    docker exec -w /app {{ $gitlab_project_name }} php artisan key:generate
    docker exec -w /app {{ $gitlab_project_name }} php artisan optimize:clear
    docker exec -w /app {{ $gitlab_project_name }} php artisan storage:link
    echo 'Migrating database'
    docker exec -w /app {{ $gitlab_project_name }} php artisan migrate
@endtask

@task('import_database')
    echo "importing database"
    docker exec {{ $gitlab_project_name }} bash -c "mysql -uroot -e \"SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'NO_ZERO_DATE',''))\""
    docker exec {{ $gitlab_project_name }} bash -c "mysql -uroot -e \"SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'NO_ZERO_IN_DATE',''))\""
    docker exec -w /app {{ $gitlab_project_name }} bash -c "[ -f {{ $mysql_user_db }}.sql ] && mysql -uroot {{ $mysql_user_db }} < {{ $mysql_user_db }}.sql" || true
@endtask

@task('docker_system_prune')
    echo "Pruning docker system"
    docker system prune -f -a --volumes
@endtask