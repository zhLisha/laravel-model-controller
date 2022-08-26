<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index() {
        $movies = Movie::all();

        $data = [
            'movies' => $movies
        ];

        return view('home_movie', $data);
    }

    public function details($id) {
        $movieDetails = Movie::find($id);

        $data = [
            'details' => $movieDetails
        ];

        return view('movie_details', $data);
    }
}
