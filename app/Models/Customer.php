<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
    	'name', 'email', 'phone', 'address', 'date', 'appointment_schedule', 'message', 'status',
    ];

    public function feedback(){
    	return $this->hasMany('App\Models\Feedback','idCustomer','id');
    }
}
