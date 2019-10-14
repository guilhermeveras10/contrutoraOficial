<?php

namespace App\Repositories;

use App\Models\Unidades;
use App\Repositories\BaseRepository;

/**
 * Class UnidadesRepository
 * @package App\Repositories
 * @version October 12, 2019, 11:23 am UTC
*/

class UnidadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'unidade',
        'descricao_unidade'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Unidades::class;
    }
}
