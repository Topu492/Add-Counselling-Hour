<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBooking extends Model
{
    // Code Start Here
    protected $guarded = [ ];

    public function User ()
    {
        return $this->belongsTo('App\User');
    }
    public function Status ()
    {
        return $this->belongsTo('App\Status', 'status_name_id', 'id');
    }
    public function get_product_details ()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

}
