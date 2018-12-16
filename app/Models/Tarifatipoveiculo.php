<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tarifatipoveiculo
 * @package App\Models
 * @version December 16, 2018, 8:52 pm UTC
 *
 * @property char descripciontarifa
 * @property integer numminutosinicio
 * @property float valorinicio
 * @property integer numminutosfraccion
 * @property float valorfraccion
 */
class Tarifatipoveiculo extends Model
{
    use SoftDeletes;

    public $table = 'tarifatipoveiculos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'descripciontarifa',
        'numminutosinicio',
        'valorinicio',
        'numminutosfraccion',
        'valorfraccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripciontarifa' => 'string',
        'numminutosinicio' => 'integer',
        'valorinicio' => 'float',
        'numminutosfraccion' => 'integer',
        'valorfraccion' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripciontarifa' => 'required',
        'numminutosinicio' => 'required',
        'valorinicio' => 'required',
        'numminutosfraccion' => 'required',
        'valorfraccion' => 'required'
    ];

    
}
