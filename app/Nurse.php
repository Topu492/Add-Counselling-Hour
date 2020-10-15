<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{

    protected $guarded = [' '];

    //  Relation With Area , Category , User
    public function Area()
    {
        return $this->belongsTo('App\Area', 'area_name_id','id');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Category()
    {
        return $this->belongsTo('App\Category' ,'category_name_id' ,'id');
    }
}
