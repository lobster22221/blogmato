<?php

/**
*Routes small pages
**/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
    }


    public function music()
    {
        return view('pages.static.music');
    }



    
}
