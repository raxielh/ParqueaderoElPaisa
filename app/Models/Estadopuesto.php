<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estadopuesto
 * @package App\Models
 * @version December 16, 2018, 9:21 pm UTC
 *
 * @property char descestadopuesto
 */
class Estadopuesto extends Model
{
    use SoftDeletes;

    public $table = 'estadopuestos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'descestadopuesto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descestadopuesto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descestadopuesto' => 'required'
    ];

    
}
