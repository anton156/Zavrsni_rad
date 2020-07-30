<?php

namespace App\Repositories;

use App\Models\student;
use App\Repositories\BaseRepository;

/**
 * Class studentRepository
 * @package App\Repositories
 * @version July 30, 2020, 1:14 pm UTC
*/

class studentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Ime',
        'Prezime',
        'Email',
        'Index'
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
        return student::class;
    }
}
