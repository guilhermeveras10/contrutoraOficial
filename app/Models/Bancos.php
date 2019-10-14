<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bancos
 * @package App\Models
 * @version October 12, 2019, 11:29 am UTC
 *
 * @property string codigo_do_banco
 * @property string descricao
 */
class Bancos extends Model
{
    use SoftDeletes;

    public $table = 'bancos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo_do_banco',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo_do_banco' => 'string',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo_do_banco' => 'required',
        'descricao' => 'required'
    ];

    
}
