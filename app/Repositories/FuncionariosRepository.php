<?php

namespace App\Repositories;

use App\Models\Funcionarios;
use App\Repositories\BaseRepository;

/**
 * Class FuncionariosRepository
 * @package App\Repositories
 * @version October 11, 2019, 9:10 pm UTC
*/

class FuncionariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
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
        'celular',
        'custo',
        'email',
        'cargo',
        'salario',
        'status',
        'rg',
        'cpf',
        'ctps',
        'registro',
        'empresa',
        'data_aso',
        'data_venc_aso',
        'exames'
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
        return Funcionarios::class;
    }
}
