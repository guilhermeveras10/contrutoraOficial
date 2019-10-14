<?php

namespace App\Repositories;

use App\Models\Carteiras;
use App\Repositories\BaseRepository;

/**
 * Class CarteirasRepository
 * @package App\Repositories
 * @version October 12, 2019, 12:48 pm UTC
*/

class CarteirasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'banco',
        'codigo_carteira',
        'descricao'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Carteiras::class;
    }
}
