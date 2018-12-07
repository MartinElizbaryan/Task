<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class CreateController extends Controller
{
    public function view($url){
    	
    	$page = Page::where("url","=",$url)->first();

    	// dd($page);

    	return view("page",compact(['page']));

    }
}
