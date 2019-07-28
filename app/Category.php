<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];

    public function course()
    {
        return $this->hasMany('App\Course', 'id_Category', 'id');
    }

    public function member()
    {
        return $this->hasMany('App\Member', 'id_Category', 'id');
    }
}
