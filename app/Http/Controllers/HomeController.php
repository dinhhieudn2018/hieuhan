<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Feedback;
use App\Models\Service;
class HomeController extends Controller
{
	public function index(){
		$images    = Image::where('status',1)->get();
		$feedbacks = Feedback::where('status',1)->get();
		$prices    = Service::where('status',1)->get();
		return view('layout.client.master',compact('images','feedbacks','prices'));
	}
	
}
