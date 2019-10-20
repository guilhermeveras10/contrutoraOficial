<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Niveis
 * @package App\Models
 * @version October 20, 2019, 7:41 pm UTC
 *
 * @property string nivel
 */
class Niveis extends Model
{
    use SoftDeletes;

    public $table = 'niveis';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nivel'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nivel' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nivel' => 'required'
    ];

    
}
