<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
    	'idCustomer', 'description', 'type', 'status',
    ];

    public function customer(){
    	return $this->belongsTo('App\Models\Customer','idCustomer','id');
    }
}
