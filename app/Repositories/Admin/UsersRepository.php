<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Users;
use App\Repositories\BaseRepository;

/**
 * Class UsersRepository
 * @package App\Repositories\Admin
 * @version November 13, 2020, 10:43 am UTC
*/

class UsersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Users::class;
    }
}
