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
        'last_name',
        'thumbnail',
        'thumbnail_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'last_name' => 'string',
        'thumbnail' => 'string',
        'thumbnail_id' => 'string',
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
        $thumbnail = 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image';
      }
      return $thumbnail;
    }

}
