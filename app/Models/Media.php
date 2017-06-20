<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Media
 * @package App\Models
 * @version June 20, 2017, 5:39 pm UTC
 */
class Media extends Model
{
    use SoftDeletes;

    public $table = 'media';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'url',
        'thumbnail',
        'public_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'url' => 'string',
        'thumbnail' => 'string',
        'public_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
