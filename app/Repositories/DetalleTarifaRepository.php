<?php

namespace App\Repositories;

use App\Models\DetalleTarifa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DetalleTarifaRepository
 * @package App\Repositories
 * @version April 16, 2019, 3:24 pm -05
 *
 * @method DetalleTarifa findWithoutFail($id, $columns = ['*'])
 * @method DetalleTarifa find($id, $columns = ['*'])
 * @method DetalleTarifa first($columns = ['*'])
*/
class DetalleTarifaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'minutosinicio',
        'minutosfinal',
        'valor',
        'valorrecargo',
        'tarifas_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DetalleTarifa::class;
    }
}
