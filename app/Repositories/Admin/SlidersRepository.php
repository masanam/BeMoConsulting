<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Sliders;
use App\Repositories\BaseRepository;

/**
 * Class SlidersRepository
 * @package App\Repositories\Admin
 * @version November 13, 2020, 10:56 am UTC
*/

class SlidersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'picture',
        'orderid',
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
        return Sliders::class;
    }
}
