<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/css/coreui.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/coreui-icons-free@1.0.1-alpha.1/coreui-icons-free.css">

     <!-- PRO version // if you have PRO version licence than remove comment and use it. -->
    {{--<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/brand.min.css">--}}
    {{--<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/flag.min.css">--}}
     <!-- PRO version -->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="http://infyom.com/images/logo/blue_logo_150x150.jpg" width="30" height="30"
             alt="InfyOm Logo">
        <img class="navbar-brand-minimized" src="http://infyom.com/images/logo/blue_logo_150x150.jpg" width="30"
             height="30" alt="InfyOm Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#">
                <i class="icon-bell"></i>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" style="margin-right: 10px" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-envelope-o"></i> Messages
                    <span class="badge badge-success">42</span>
                </a>
                <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-wrench"></i> Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-shield"></i> Lock Account</a>
                <a href="{{ url('/logout') }}" class="dropdown-item btn btn-default btn-flat"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i>Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</header>

<div class="app-body">
    @include('layouts.sidebar')
    <main class="main">
        @yield('content')
    </main>
</div>
<footer class="app-footer">
    <div>
        <a href="https://infyom.com">InfyOm </a>
        <span>&copy; 2019 InfyOmLabs.</span>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script>
   var route_prefix = "/filemanager";
  </script>

<script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
  </script>
  
  <script>
    // $('#lfm').filemanager('image', {prefix: route_prefix});
    $('#lfm').filemanager('file', {prefix: route_prefix});

  </script>

  <script>
    var lfm = function(id, type, options) {
      let button = document.getElementById(id);

      button.addEventListener('click', function () {
        var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
        var target_input = document.getElementById(button.getAttribute('data-input'));
        var target_preview = document.getElementById(button.getAttribute('data-preview'));

        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = function (items) {
          var file_path = items.map(function (item) {
            return item.url;
          }).join(',');

          // set the value of the desired input to image url
          target_input.value = file_path;
          target_input.dispatchEvent(new Event('change'));

          // clear previous preview
          target_preview.innerHtml = '';

          // set or change the preview image src
          items.forEach(function (item) {
            let img = document.createElement('img')
            img.setAttribute('style', 'height: 5rem')
            img.setAttribute('src', item.thumb_url)
            target_preview.appendChild(img);
          });

          // trigger change event
          target_preview.dispatchEvent(new Event('change'));
        };
      });
    };

    lfm('lfm2', 'file', {prefix: route_prefix});
  </script>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
  var editor_config = {
    height: 300,
		min_height: 300,
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
</body>
<!-- jQuery 3.1.1 -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
@stack('scripts')

</html>
