<?php

namespace App\Repositories;

use App\Models\Predavanje;
use App\Repositories\BaseRepository;

/**
 * Class PredavanjeRepository
 * @package App\Repositories
 * @version July 28, 2020, 10:57 am UTC
*/

class PredavanjeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'naziv',
        'opis',
        'kolegij_id'
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
        return Predavanje::class;
    }
}
