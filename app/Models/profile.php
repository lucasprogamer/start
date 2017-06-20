<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class profile
 * @package App\Models
 * @version June 5, 2017, 3:12 am UTC
 */
class profile extends Model
{
    use SoftDeletes;

    public $table = 'profiles';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'last_name',
        'thumbnail_id',
        'phone',
        'gender',
        'education',
        'company',
        'designation',
        'about',
        'facebook',
        'twitter',
        'github',
        'user_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'last_name' => 'string',
        'thumbnail_id' => 'string',
        'phone' => 'string',
        'gender' => 'string',
        'education' => 'string',
        'company' => 'string',
        'designation' => 'string',
        'about' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'github' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getThumbnail()
    {
      $thumbnail = $this->thumbnail;
      if ($thumbnail == NULL) {
        $thumbnail = asset('/admin/images/user-flat.png');
      }
      return $thumbnail;
    }

}
