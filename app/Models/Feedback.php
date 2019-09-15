<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
    	'idCustomer', 'name_customer', 'description', 'image', 'type', 'status',
    ];

    public function customer(){
    	return $this->belongsTo('App\Models\Customer','idCustomer','id');
    }
}
