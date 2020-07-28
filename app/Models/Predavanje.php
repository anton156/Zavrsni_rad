<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Predavanje
 * @package App\Models
 * @version July 28, 2020, 10:57 am UTC
 *
 * @property string $naziv
 * @property string $opis
 * @property integer $kolegij_id
 */
class Predavanje extends Model
{
    use SoftDeletes;

    public $table = 'predavanjes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'naziv',
        'opis',
        'kolegij_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'naziv' => 'string',
        'opis' => 'string',
        'kolegij_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'naziv' => 'required'
    ];

    public function kolegij(){
        return $this->belongsTo(Kolegij::Class);
    }
}
