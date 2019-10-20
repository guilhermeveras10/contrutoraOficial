<?php

namespace App\Repositories;

use App\Models\Fornecedores;
use App\Repositories\BaseRepository;

/**
 * Class FornecedoresRepository
 * @package App\Repositories
 * @version October 17, 2019, 2:32 pm UTC
*/

class FornecedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fornecedor',
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
        'inscricao_rg',
        'email',
        'site',
        'acoes_tipo_de_fornecedor'
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
        return Fornecedores::class;
    }
}
