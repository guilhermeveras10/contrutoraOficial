<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Clientes
 * @package App\Models
 * @version October 10, 2019, 5:12 pm UTC
 *
 * @property string nome_cliente
 * @property string endereco
 * @property string bairro
 * @property string cidade
 * @property string estado
 * @property string cep
 * @property string ddd1
 * @property string telefone1
 * @property string ddd2
 * @property string telefone2
 * @property string ddd3
 * @property string fax
 * @property string ddd4
 * @property string celular
 * @property string contato
 * @property string cnpj_cpf
 * @property string inscricao_rg
 * @property string email
 * @property string endereco_cobranca
 * @property string bairro_cobranca
 * @property string cidade_cobranca
 * @property string estado_cobranca
 * @property string cep_cobranca
 */
class Clientes extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome_cliente' => 'string',
        'endereco' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'estado' => 'string',
        'cep' => 'string',
        'ddd1' => 'string',
        'telefone1' => 'string',
        'ddd2' => 'string',
        'telefone2' => 'string',
        'ddd3' => 'string',
        'fax' => 'string',
        'ddd4' => 'string',
        'celular' => 'string',
        'contato' => 'string',
        'cnpj_cpf' => 'string',
        'inscricao_rg' => 'string',
        'email' => 'string',
        'endereco_cobranca' => 'string',
        'bairro_cobranca' => 'string',
        'cidade_cobranca' => 'string',
        'estado_cobranca' => 'string',
        'cep_cobranca' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome_cliente' => 'required',
        'endereco' => 'required',
        'bairro' => 'required',
        'cidade' => 'required',
        'estado' => 'required',
        'cep' => 'required',
        'ddd1' => 'required',
        'telefone1' => 'required',
        'ddd2' => 'required',
        'telefone2' => 'required',
        'ddd3' => 'required',
        'fax' => 'required',
        'ddd4' => 'required',
        'celular' => 'required',
        'contato' => 'required',
        'cnpj_cpf' => 'required',
        'inscricao_rg' => 'required',
        'email' => 'required',
        'endereco_cobranca' => 'required',
        'bairro_cobranca' => 'required',
        'cidade_cobranca' => 'required',
        'estado_cobranca' => 'required',
        'cep_cobranca' => 'required'
    ];

    
}
