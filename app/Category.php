<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['parent_id', 'name'];

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
    public function developers()
    {
        return $this->hasMany('App\Developer');
    }
    }
