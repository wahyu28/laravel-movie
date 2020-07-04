<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        $popularMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMWYwOTFmZTI4YTM4NWM0OTMxNjNmYjQ0MDg0OWE2ZSIsInN1YiI6IjVmMDAyMDZhZjAzMTc0MDAzODUxOTI4YSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.7Qhgb_qDLIAQEOGjbVn04Ei0unSSC0KNFoUNH4AQBFs')->get('https://api.themoviedb.org/3//movie/popular')->json()['results'][0];

        dd($popularMovies);
    }
}
