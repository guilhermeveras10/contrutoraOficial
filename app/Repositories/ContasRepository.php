<?php

namespace App\Repositories;

use App\Models\Contas;
use App\Repositories\BaseRepository;

/**
 * Class ContasRepository
 * @package App\Repositories
 * @version October 12, 2019, 11:38 am UTC
*/

class ContasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'banco',
        'agencia',
        'conta_corrente',
        'empresa'
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
        return Contas::class;
    }
}
