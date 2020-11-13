<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contacts
 * @package App\Models\Admin
 * @version November 13, 2020, 11:00 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $title
 * @property string $content
 * @property integer $status
 * @property integer $created_by
 * @property integer $updated_by
 */
class Contacts extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'country' => 'string',
        'title' => 'string',
        'content' => 'string',
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
        'name' => 'nullable|string|max:191',
        'email' => 'nullable|string|max:191',
        'phone' => 'nullable|string|max:191',
        'country' => 'nullable|string|max:191',
        'title' => 'nullable|string|max:191',
        'content' => 'nullable|string',
        'status' => 'nullable|integer',
        'created_by' => 'nullable|integer',
        'updated_by' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
