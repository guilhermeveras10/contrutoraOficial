<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Funcionarios
 * @package App\Models
 * @version October 11, 2019, 9:10 pm UTC
 *
 * @property string nome
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
 * @property string celular
 * @property string custo
 * @property string email
 * @property string cargo
 * @property string salario
 * @property integer status
 * @property string rg
 * @property string cpf
 * @property string ctps
 * @property string registro
 * @property string empresa
 * @property string data_aso
 * @property string data_venc_aso
 * @property string exames
 */
class Funcionarios extends Model
{
    use SoftDeletes;

    public $table = 'funcionarios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
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
        'celular' => 'string',
        'custo' => 'string',
        'email' => 'string',
        'cargo' => 'string',
        'salario' => 'string',
        'status' => 'integer',
        'rg' => 'string',
        'cpf' => 'string',
        'ctps' => 'string',
        'registro' => 'string',
        'empresa' => 'string',
        'data_aso' => 'string',
        'data_venc_aso' => 'string',
        'exames' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
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
        'celular' => 'required',
        'custo' => 'required',
        'email' => 'required',
        'cargo' => 'required',
        'salario' => 'required',
        'status' => 'required',
        'rg' => 'required',
        'cpf' => 'required',
        'ctps' => 'required',
        'registro' => 'required',
        'empresa' => 'required',
        'data_aso' => 'required',
        'data_venc_aso' => 'required',
        'exames' => 'required'
    ];

    
}
