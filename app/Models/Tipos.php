<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tipos
 * @package App\Models
 * @version October 12, 2019, 6:42 pm UTC
 *
 * @property string tipo_de_fornecedor
 */
class Tipos extends Model
{
    use SoftDeletes;

    public $table = 'tipo_fornecedor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipo_de_fornecedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo_de_fornecedor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo_de_fornecedor' => 'required'
    ];

    
}
