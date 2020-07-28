<?php

namespace App\Repositories;

use App\Models\Kolegij;
use App\Repositories\BaseRepository;

/**
 * Class KolegijRepository
 * @package App\Repositories
 * @version July 28, 2020, 9:53 am UTC
*/

class KolegijRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'naziv',
        'opis'
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
        return Kolegij::class;
    }
}
