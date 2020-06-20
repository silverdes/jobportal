<?php

namespace App\Repositories;

use App\Models\Organisation;
use App\Repositories\BaseRepository;

/**
 * Class OrganisationRepository
 * @package App\Repositories
 * @version June 20, 2020, 11:06 pm UTC
*/

class OrganisationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'name',
        'description',
        'contact_details',
        'city',
        'state',
        'country_id'
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
        return Organisation::class;
    }
}
