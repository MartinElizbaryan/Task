<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class IndexController extends Controller
{
    public function view(){

    	return view("index");
    }

    public function page_adding(Request $request){
    	// dd($request);

    	$rules = [
            'url'=>'required|unique:pages',
            'title'=>'required',
            'desc'=>'required',
            'content'=>'required'
        ];

        $this->validate($request,$rules);
    	
    	$page = new Page();
    	$page->url = $request->url;
    	$page->title = $request->title;
    	$page->desc = $request->desc;
    	$page->content = $request->content;

    	$page->save();

    	return redirect("/".$request->url);
    }
}
