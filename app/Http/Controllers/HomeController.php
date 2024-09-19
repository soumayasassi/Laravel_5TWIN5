<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return "5TWIN" ;
    }
    public function show($nom)
    {
        return view("Home.show" , ["name"=>$nom]) ;
    }
    public function showForm()
    {
        return view("Home.contact")  ;
    }
    public function submitForm(\Symfony\Component\HttpFoundation\Request $request )
    {
        $name = $request->input('name') ;
        return "Submitted name "  .  $name ;
    }
}
