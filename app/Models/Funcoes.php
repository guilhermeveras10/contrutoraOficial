<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Funcoes
 * @package App\Models
 * @version October 20, 2019, 7:45 pm UTC
 *
 * @property string funcao
 */
class Funcoes extends Model
{
    use SoftDeletes;

    public $table = 'funcoes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'funcao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'funcao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'funcao' => 'required'
    ];

    
}
