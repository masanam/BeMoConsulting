<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Settings
 * @package App\Models\Admin
 * @version November 14, 2020, 12:44 am UTC
 *
 * @property integer $id
 * @property string $google
 * @property string $facebook
 * @property string $disclaimer
 */
class Settings extends Model
{
    use SoftDeletes;

    public $table = 'settings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'google',
        'facebook',
        'disclaimer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'google' => 'string',
        'facebook' => 'string',
        'disclaimer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'google' => 'nullable|string',
        'facebook' => 'nullable|string',
        'disclaimer' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
