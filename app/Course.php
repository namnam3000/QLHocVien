<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'id_Category', 'name',
    ];
    public function category(){
        return $this->belongsTo('App\Category','id_Category','id');
    }
    public function member(){
        return$this->hasMany('App\Member','id_Course','id');
    }
}
