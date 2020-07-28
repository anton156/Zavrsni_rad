<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Kolegij
 * @package App\Models
 * @version July 28, 2020, 9:53 am UTC
 *
 * @property string $naziv
 * @property string $opis
 */
class Kolegij extends Model
{

    public $table = 'Kolegij';
    



    public $fillable = [
        'naziv',
        'opis'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'naziv' => 'string',
        'opis' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'naziv' => 'required'
    ];

    public function predavanja(){
        return $this->hasMany(Predavanje::Class);
    }

}
