<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Puesto
 * @package App\Models
 * @version December 16, 2018, 9:26 pm UTC
 *
 * @property integer idestado
 * @property integer idtipovehiculo
 * @property integer numero
 */
class Puesto extends Model
{
    use SoftDeletes;

    public $table = 'puestos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idestado',
        'idtipovehiculo',
        'numero',
        'tarifas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idestado' => 'integer',
        'idtipovehiculo' => 'integer',
        'numero' => 'integer',
        'tarifas_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idestado' => 'required',
        'idtipovehiculo' => 'required',
        'numero' => 'required',
        'tarifas_id' => 'required'
    ];

    
}
