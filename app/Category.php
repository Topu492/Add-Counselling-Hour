<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    public function doctors()
    {
        return $this->hasMany('App\Teacher');
    }
    public function Nurse()
    {
        return $this->hasMany('App\Nurse');
    }
}
