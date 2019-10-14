<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Unidades
 * @package App\Models
 * @version October 12, 2019, 11:23 am UTC
 *
 * @property string unidade
 * @property string descricao_unidade
 */
class Unidades extends Model
{
    use SoftDeletes;

    public $table = 'unidades';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'unidade',
        'descricao_unidade'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'unidade' => 'string',
        'descricao_unidade' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'unidade' => 'required',
        'descricao_unidade' => 'required'
    ];

    
}
