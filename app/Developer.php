<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = [
        'name',
        'dob',
        'email',
        'bio',
        'profile_pic',
        'category_id'
      ];
      public function category() {
        return $this->belongsTo('App\Category');
      }
}
