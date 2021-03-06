<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        $title = "Index Page";
        return view("pages.index")->with('title',$title);    
    }
    public function menu(){
        $title = "Menu page";
        return view("pages.menu")->with('title', $title);
    }
    public function booking(){
        $title = "Book a table";
        return view("pages.order")->with('title',$title);
    }
    public function contact(){
        $title = "Contact";
        return view("pages.contact")->with('title',$title);
    }

    
}
