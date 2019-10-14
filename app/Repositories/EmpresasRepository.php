<?php

namespace App\Repositories;

use App\Models\Empresas;
use App\Repositories\BaseRepository;

/**
 * Class EmpresasRepository
 * @package App\Repositories
 * @version October 11, 2019, 8:59 pm UTC
*/

class EmpresasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'empresa',
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
        'contato',
        'email',
        'nome_da_conta',
        'home_page',
        'inscricao_estadual',
        'cnpj',
        'inscricao_municipal'
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
        return Empresas::class;
    }
}
