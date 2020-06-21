<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job
 * @package App\Models
 * @version June 20, 2020, 11:06 pm UTC
 *
 * @property integer $user_id
 * @property integer $organisation_id
 * @property integer $country_id
 * @property string $title
 * @property string $skills_required
 * @property string $description
 * @property string $work_type
 * @property string $job_type
 * @property string $status
 */
class Job extends Model
{
    use SoftDeletes;

    public $table = 'jobs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'organisation_id',
        'country_id',
        'title',
        'skills_required',
        'description',
        'work_type',
        'job_type',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'organisation_id' => 'integer',
        'country_id' => 'integer',
        'title' => 'string',
        'skills_required' => 'string',
        'description' => 'string',
        'work_type' => 'string',
        'job_type' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'skills_required' => 'required',
        'description' => 'required',
        'work_type' => 'required',
        'job_type' => 'required'
    ];

    
}
