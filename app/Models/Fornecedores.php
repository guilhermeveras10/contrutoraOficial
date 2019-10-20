<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fornecedores
 * @package App\Models
 * @version October 17, 2019, 2:32 pm UTC
 *
 * @property string fornecedor
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
 * @property string site
 * @property string acoes_tipo_de_fornecedor
 */
class Fornecedores extends Model
{
    use SoftDeletes;

    public $table = 'fornecedores';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fornecedor' => 'string',
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
        'site' => 'string',
        'acoes_tipo_de_fornecedor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fornecedor' => 'required',
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
        'site' => 'required',
        'acoes_tipo_de_fornecedor' => 'required'
    ];

    
}
