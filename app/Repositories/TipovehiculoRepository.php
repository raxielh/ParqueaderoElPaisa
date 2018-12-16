<?php

namespace App\Repositories;

use App\Models\Tipovehiculo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipovehiculoRepository
 * @package App\Repositories
 * @version December 16, 2018, 8:58 pm UTC
 *
 * @method Tipovehiculo findWithoutFail($id, $columns = ['*'])
 * @method Tipovehiculo find($id, $columns = ['*'])
 * @method Tipovehiculo first($columns = ['*'])
*/
class TipovehiculoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'desctipovehiculo',
        'idtarifatipoveiculo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tipovehiculo::class;
    }
}
