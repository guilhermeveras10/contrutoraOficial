<?php

namespace App\Repositories;

use App\Models\Clientes;
use App\Repositories\BaseRepository;

/**
 * Class ClientesRepository
 * @package App\Repositories
 * @version October 10, 2019, 5:12 pm UTC
*/

class ClientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome_cliente',
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
        'endereco_cobranca',
        'bairro_cobranca',
        'cidade_cobranca',
        'estado_cobranca',
        'cep_cobranca'
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
        return Clientes::class;
    }
}
