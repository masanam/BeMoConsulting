<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Contents;
use App\Repositories\BaseRepository;

/**
 * Class ContentsRepository
 * @package App\Repositories\Admin
 * @version November 13, 2020, 10:58 am UTC
*/

class ContentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
        'title',
        'seotitle',
        'summary',
        'content',
        'picture',
        'picture_description',
        'tag',
        'active',
        'published_at',
        'headline',
        'hits',
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
        return Contents::class;
    }
}
