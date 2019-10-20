<?php

namespace App\Repositories;

use App\Models\Funcoes;
use App\Repositories\BaseRepository;

/**
 * Class FuncoesRepository
 * @package App\Repositories
 * @version October 20, 2019, 7:45 pm UTC
*/

class FuncoesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'funcao'
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
        return Funcoes::class;
    }
}
