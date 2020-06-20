<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Invitation
 * @package App\Models
 * @version June 20, 2020, 11:05 pm UTC
 *
 * @property integer $user_id
 * @property string $sender_contact
 * @property integer $receiver_user_id
 * @property integer $organisation_id
 * @property integer $job_id
 * @property string $interview_status
 * @property string|\Carbon\Carbon $date_of_interview
 * @property string $sender_interview_note
 * @property string $employer_interview_note
 * @property string $jobseeker_interview_review
 */
class Invitation extends Model
{
    use SoftDeletes;

    public $table = 'invitations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'sender_contact' => 'string',
        'receiver_user_id' => 'integer',
        'organisation_id' => 'integer',
        'job_id' => 'integer',
        'interview_status' => 'string',
        'date_of_interview' => 'datetime',
        'sender_interview_note' => 'string',
        'employer_interview_note' => 'string',
        'jobseeker_interview_review' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required'
    ];

    
}
