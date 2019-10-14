<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empresas
 * @package App\Models
 * @version October 11, 2019, 8:59 pm UTC
 *
 * @property string empresa
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
 * @property string contato
 * @property string email
 * @property string nome_da_conta
 * @property string home_page
 * @property string inscricao_estadual
 * @property string cnpj
 * @property string inscricao_municipal
 */
class Empresas extends Model
{
    use SoftDeletes;

    public $table = 'empresas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'empresa' => 'string',
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
        'contato' => 'string',
        'email' => 'string',
        'nome_da_conta' => 'string',
        'home_page' => 'string',
        'inscricao_estadual' => 'string',
        'cnpj' => 'string',
        'inscricao_municipal' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'empresa' => 'required',
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
        'contato' => 'required',
        'email' => 'required',
        'nome_da_conta' => 'required',
        'home_page' => 'required',
        'inscricao_estadual' => 'required',
        'cnpj' => 'required',
        'inscricao_municipal' => 'required'
    ];

    
}
