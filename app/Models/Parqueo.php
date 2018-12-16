<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Puesto
 * @package App\Models
 * @version December 16, 2018, 9:26 pm UTC
 *
 * @property integer idestado
 * @property integer idtipovehiculo
 * @property integer numero
 */
class Parqueo extends Model
{

    public $table = 'parqueos';

    public $fillable = [
        'placavehiculo',
        'idpuesto',
        'entrada'
    ];

    
}
