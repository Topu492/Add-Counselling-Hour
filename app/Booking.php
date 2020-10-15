<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];

    public function get_doctor_info ()
    {
        return $this->belongsTo('App\User', 'teacher_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function status()
    {
        return $this->belongsTo('App\Status');
    }


    public function teacher()
    {
        return $this->belongsTo('App\User', 'teacher_id', 'id');
    }




    public function get_doctor_details ()
    {
        return $this->belongsTo('App\Teacher', 'teacher_id', 'user_id');
    }
    // array [] foreach student->id-->student table -> name


}

