<?php

namespace App\Repositories;

use App\Models\Servicos;
use App\Repositories\BaseRepository;

/**
 * Class ServicosRepository
 * @package App\Repositories
 * @version October 10, 2019, 9:02 pm UTC
*/

class ServicosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'servico',
        'unidade',
        'proposta',
        'status',
        'medicao'
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
        return Servicos::class;
    }
}
