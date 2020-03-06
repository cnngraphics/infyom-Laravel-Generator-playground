<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class users
 * @package App\Models
 * @version January 31, 2020, 10:52 pm UTC
 *
 * @property varchar(50) ['name'
 * @property varchar(50) [email
 * @property varchar(150) [email
 */
class users extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        '['name'',
        '[email',
        '[email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        '['name'' => 'required',
        '[email' => 'required',
        '[email' => 'required'
    ];

    
}
