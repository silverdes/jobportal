<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Organisation
 * @package App\Models
 * @version June 20, 2020, 11:06 pm UTC
 *
 * @property integer $user_id
 * @property string $name
 * @property string $description
 * @property string $contact_details
 * @property string $city
 * @property string $state
 * @property string $country_id
 */
class Organisation extends Model
{
    use SoftDeletes;

    public $table = 'organisations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'name',
        'description',
        'contact_details',
        'city',
        'state',
        'country_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'contact_details' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'name' => 'required',
        'description' => 'required'
    ];

    
}
