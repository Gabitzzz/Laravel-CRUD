<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $movies = Movie::all();

        return view('index')->with('movies', $movies);
    }



}
