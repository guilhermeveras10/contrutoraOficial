<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Carteiras
 * @package App\Models
 * @version October 12, 2019, 12:48 pm UTC
 *
 * @property string banco
 * @property integer codigo_carteira
 * @property string descricao
 */
class Carteiras extends Model
{
    use SoftDeletes;

    public $table = 'carteiras';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'banco',
        'codigo_carteira',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'banco' => 'string',
        'codigo_carteira' => 'integer',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'banco' => 'required',
        'codigo_carteira' => 'required',
        'descricao' => 'required'
    ];

    
}
