<?php

namespace App\Repositories;

use App\Models\OrganisationUser;
use App\Repositories\BaseRepository;

/**
 * Class OrganisationUserRepository
 * @package App\Repositories
 * @version June 20, 2020, 11:11 pm UTC
*/

class OrganisationUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'organisation_id',
        'role',
        'start_date',
        'end_date'
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
        return OrganisationUser::class;
    }
}
