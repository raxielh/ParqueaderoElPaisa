<?php

namespace App\Repositories;

use App\Models\Puesto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PuestoRepository
 * @package App\Repositories
 * @version December 16, 2018, 9:26 pm UTC
 *
 * @method Puesto findWithoutFail($id, $columns = ['*'])
 * @method Puesto find($id, $columns = ['*'])
 * @method Puesto first($columns = ['*'])
*/
class PuestoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idestado',
        'idtipovehiculo',
        'numero'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Puesto::class;
    }
}
