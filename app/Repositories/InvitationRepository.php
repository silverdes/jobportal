<?php

namespace App\Repositories;

use App\Models\Invitation;
use App\Repositories\BaseRepository;

/**
 * Class InvitationRepository
 * @package App\Repositories
 * @version June 20, 2020, 11:05 pm UTC
*/

class InvitationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'sender_contact',
        'receiver_user_id',
        'organisation_id',
        'job_id',
        'interview_status',
        'date_of_interview',
        'sender_interview_note',
        'employer_interview_note',
        'jobseeker_interview_review'
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
        return Invitation::class;
    }
}
