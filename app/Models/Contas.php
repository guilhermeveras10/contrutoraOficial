<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contas
 * @package App\Models
 * @version October 12, 2019, 11:38 am UTC
 *
 * @property string banco
 * @property integer agencia
 * @property integer conta_corrente
 * @property string empresa
 */
class Contas extends Model
{
    use SoftDeletes;

    public $table = 'contas_correntes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'banco',
        'agencia',
        'conta_corrente',
        'empresa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'banco' => 'string',
        'agencia' => 'integer',
        'conta_corrente' => 'integer',
        'empresa' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'banco' => 'required',
        'agencia' => 'required',
        'conta_corrente' => 'required',
        'empresa' => 'required'
    ];

    
}
