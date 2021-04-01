<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies')->with('movies', $movies);
    }



    public function store()
    {
        $this->validate(request(),[

            'name' => 'required',
            'genre' => 'required',
            'language' => 'required | ',
            'release' => 'required|date_format:d.m.Y',
            'rating' => 'required',
            'description' => 'required',
            'url' => 'required|url'
        ]);

        Movie::create(request(['name','genre','language','release', 'rating', 'description', 'url']));

        return redirect()->route('movies');
    }

    public function show($id)
    {
        return view('movie', [
            'movie' => Movie::findOrFail($id)
        ]);

    }

    public function edit($id)
    {
        return view('edit', [
            'movie' => Movie::findOrFail($id)
        ]);
    }


    public function update(Movie $id)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'genre' => 'required',
            'language' => 'required | ',
            'release' => 'required|date_format:d.m.Y',
            'rating' => 'required',
            'description' => 'required',
            'url' => 'required|url'

        ]);

        $id->update($attributes);

        return redirect()->route('movies');
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return redirect()->route('home');
    }





}
