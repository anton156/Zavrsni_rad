<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class student
 * @package App\Models
 * @version July 30, 2020, 1:14 pm UTC
 *
 * @property string $Ime
 * @property string $Prezime
 * @property string $Email
 * @property string $Index
 */
class student extends Model
{

    public $table = 'student';
    



    public $fillable = [
        'Ime',
        'Prezime',
        'Email',
        'Index'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Ime' => 'string',
        'Prezime' => 'string',
        'Email' => 'string',
        'Index' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Ime' => 'required',
        'Prezime' => 'required',
        'Index' => 'required'
    ];

    
}
