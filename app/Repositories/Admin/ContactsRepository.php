<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Contacts;
use App\Repositories\BaseRepository;

/**
 * Class ContactsRepository
 * @package App\Repositories\Admin
 * @version November 13, 2020, 11:00 am UTC
*/

class ContactsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'country',
        'title',
        'content',
        'status',
        'created_by',
        'updated_by'
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
        return Contacts::class;
    }
}
