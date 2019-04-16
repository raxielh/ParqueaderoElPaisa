<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tarifas
 * @package App\Models
 * @version April 16, 2019, 3:14 pm -05
 *
 * @property char descripcion
 */
class Tarifas extends Model
{
    use SoftDeletes;

    public $table = 'tarifas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required'
    ];

    
}
