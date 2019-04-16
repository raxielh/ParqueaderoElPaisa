<?php

namespace App\Repositories;

use App\Models\Tarifas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TarifasRepository
 * @package App\Repositories
 * @version April 16, 2019, 3:14 pm -05
 *
 * @method Tarifas findWithoutFail($id, $columns = ['*'])
 * @method Tarifas find($id, $columns = ['*'])
 * @method Tarifas first($columns = ['*'])
*/
class TarifasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tarifas::class;
    }
}
