<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontControlle extends Controller
{
    public function index()
    {

        $nom = "iheb";
        $prenom = "heni";
        $age = 1;

        $skills = ['html', 'css', 'js', 'php', 'laravel'];
        return view('index' , compact('nom' , 'prenom' , 'age' , 'skills'));
    }













    public function about()
    {
        return view('about');
    }
}
