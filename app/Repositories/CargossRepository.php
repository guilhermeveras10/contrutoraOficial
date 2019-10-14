<?php

namespace App\Repositories;

use App\Models\Cargoss;
use App\Repositories\BaseRepository;

/**
 * Class CargossRepository
 * @package App\Repositories
 * @version October 11, 2019, 11:11 pm UTC
*/

class CargossRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cargo'
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
        return Cargoss::class;
    }
}
