<?php

namespace App\Repositories;

use App\Models\Engenheiros;
use App\Repositories\BaseRepository;

/**
 * Class EngenheirosRepository
 * @package App\Repositories
 * @version October 12, 2019, 11:13 am UTC
*/

class EngenheirosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'engenheiro',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'ddd1',
        'telefone1',
        'ddd2',
        'telefone2',
        'ddd3',
        'fax',
        'ddd4',
        'celular',
        'contato',
        'cnpj_cpf',
        'email'
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
        return Engenheiros::class;
    }
}
