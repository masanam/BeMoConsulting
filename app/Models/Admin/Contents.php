<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contents
 * @package App\Models\Admin
 * @version November 13, 2020, 10:58 am UTC
 *
 * @property integer $category_id
 * @property string $title
 * @property string $seotitle
 * @property string $summary
 * @property string $content
 * @property string $picture
 * @property string $picture_description
 * @property string $tag
 * @property string $active
 * @property string|\Carbon\Carbon $published_at
 * @property integer $headline
 * @property integer $hits
 * @property integer $status
 * @property integer $created_by
 * @property integer $updated_by
 */
class Contents extends Model
{
    use SoftDeletes;

    public $table = 'contents';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'seotitle' => 'string',
        'summary' => 'string',
        'content' => 'string',
        'picture' => 'string',
        'picture_description' => 'string',
        'tag' => 'string',
        'active' => 'string',
        'published_at' => 'datetime',
        'headline' => 'integer',
        'hits' => 'integer',
        'status' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'nullable|integer',
        'title' => 'required|string|max:191',
        'seotitle' => 'nullable|string|max:191',
        'summary' => 'nullable|string',
        'content' => 'nullable|string',
        'picture' => 'nullable|string|max:191',
        'picture_description' => 'nullable|string|max:191',
        'tag' => 'nullable|string|max:191',
        'active' => 'nullable|string|max:191',
        'published_at' => 'nullable',
        'headline' => 'nullable|integer',
        'hits' => 'nullable|integer',
        'status' => 'nullable|integer',
        'created_by' => 'nullable|integer',
        'updated_by' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
