<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrganisationUser
 * @package App\Models
 * @version June 20, 2020, 11:11 pm UTC
 *
 * @property integer $user_id
 * @property integer $organisation_id
 * @property string $role
 * @property string $start_date
 * @property string $end_date
 */
class OrganisationUser extends Model
{
    use SoftDeletes;

    public $table = 'organisation_user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'organisation_id',
        'role',
        'start_date',
        'end_date'
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
        'role' => 'string',
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'organisation_id' => 'required'
    ];

    
}
