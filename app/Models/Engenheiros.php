<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Engenheiros
 * @package App\Models
 * @version October 12, 2019, 11:13 am UTC
 *
 * @property string engenheiro
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
 * @property string email
 */
class Engenheiros extends Model
{
    use SoftDeletes;

    public $table = 'engenheiros';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'engenheiro' => 'string',
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
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'engenheiro' => 'required',
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
        'email' => 'required'
    ];

    
}
