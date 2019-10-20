<?php

namespace App\Repositories;

use App\Models\Niveis;
use App\Repositories\BaseRepository;

/**
 * Class NiveisRepository
 * @package App\Repositories
 * @version October 20, 2019, 7:41 pm UTC
*/

class NiveisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nivel'
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
        return Niveis::class;
    }
}
