<?php

namespace App\Repositories;

use App\Models\Tipos;
use App\Repositories\BaseRepository;

/**
 * Class TiposRepository
 * @package App\Repositories
 * @version October 12, 2019, 6:42 pm UTC
*/

class TiposRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_de_fornecedor'
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
        return Tipos::class;
    }
}
