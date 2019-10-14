<?php

namespace App\Repositories;

use App\Models\Bancos;
use App\Repositories\BaseRepository;

/**
 * Class BancosRepository
 * @package App\Repositories
 * @version October 12, 2019, 11:29 am UTC
*/

class BancosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_do_banco',
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
        return Bancos::class;
    }
}
