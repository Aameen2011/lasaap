<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function index(){
        $pageTitle="Welcome to laravel";
        //return view('pages.index',compact('pageTitle'));
        return view('pages.index')->with('pageTitle',$pageTitle);
    }
    public function about(){
        //$pageTitle="Welcome to About us";

        $data=array(
            'pageTitle'=>'Welcome to about page',
            'skills'=>['html','css']
        );
        return view('pages.about')->with($data);
    }
 
}
