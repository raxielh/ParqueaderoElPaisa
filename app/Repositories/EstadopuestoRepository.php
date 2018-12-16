<?php

namespace App\Repositories;

use App\Models\Estadopuesto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstadopuestoRepository
 * @package App\Repositories
 * @version December 16, 2018, 9:21 pm UTC
 *
 * @method Estadopuesto findWithoutFail($id, $columns = ['*'])
 * @method Estadopuesto find($id, $columns = ['*'])
 * @method Estadopuesto first($columns = ['*'])
*/
class EstadopuestoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descestadopuesto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estadopuesto::class;
    }
}
