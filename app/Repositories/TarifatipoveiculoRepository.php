<?php

namespace App\Repositories;

use App\Models\Tarifatipoveiculo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TarifatipoveiculoRepository
 * @package App\Repositories
 * @version December 16, 2018, 8:52 pm UTC
 *
 * @method Tarifatipoveiculo findWithoutFail($id, $columns = ['*'])
 * @method Tarifatipoveiculo find($id, $columns = ['*'])
 * @method Tarifatipoveiculo first($columns = ['*'])
*/
class TarifatipoveiculoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripciontarifa',
        'numminutosinicio',
        'valorinicio',
        'numminutosfraccion',
        'valorfraccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tarifatipoveiculo::class;
    }
}
