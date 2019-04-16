<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tipovehiculo
 * @package App\Models
 * @version December 16, 2018, 8:58 pm UTC
 *
 * @property char desctipovehiculo
 * @property integer idtarifatipoveiculo
 */
class Tipovehiculo extends Model
{
    use SoftDeletes;

    public $table = 'tipovehiculos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'desctipovehiculo',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'desctipovehiculo' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'desctipovehiculo' => 'required',
    ];

    
}
