<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DetalleTarifa
 * @package App\Models
 * @version April 16, 2019, 3:24 pm -05
 *
 * @property char descripcion
 * @property integer minutosinicio
 * @property integer minutosfinal
 * @property float valor
 * @property float valorrecargo
 * @property integer tarifas_id
 */
class DetalleTarifa extends Model
{
    use SoftDeletes;

    public $table = 'detalle_tarifas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'descripcion',
        'minutosinicio',
        'minutosfinal',
        'valor',
        'valorrecargo',
        'tarifas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string',
        'minutosinicio' => 'integer',
        'minutosfinal' => 'integer',
        'valor' => 'float',
        'valorrecargo' => 'float',
        'tarifas_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'minutosinicio' => 'required',
        'minutosfinal' => 'required',
        'valor' => 'required',
        'valorrecargo' => 'required',
        'tarifas_id' => 'required'
    ];

    
}
