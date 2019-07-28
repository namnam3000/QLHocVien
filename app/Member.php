<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = [
        'id_Category', 'id_Course', 'name',
    ];
    public function category(){
    return $this->belongsTo('App\Category','id_Category','id');
    }
    public function course(){
        return $this->belongsTo('App\Course','id_Course','id');
    }
}
