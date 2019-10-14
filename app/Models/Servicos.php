<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Servicos
 * @package App\Models
 * @version October 10, 2019, 9:02 pm UTC
 *
 * @property string servico
 * @property string unidade
 * @property string proposta
 * @property integer status
 * @property integer medicao
 */
class Servicos extends Model
{
    use SoftDeletes;

    public $table = 'servicos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'servico',
        'unidade',
        'proposta',
        'status',
        'medicao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'servico' => 'string',
        'unidade' => 'string',
        'proposta' => 'string',
        'status' => 'integer',
        'medicao' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'servico' => 'required',
        'unidade' => 'required',
        'proposta' => 'required',
        'status' => 'required',
        'medicao' => 'required'
    ];

    
}
