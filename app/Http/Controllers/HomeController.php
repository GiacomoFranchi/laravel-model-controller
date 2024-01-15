<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $movies = Movie::all();
        $linksh = config('db.links');
        $linksf = config('db-bottom.bottom');
        return view('movies', compact('movies'), compact('linksf', 'linksh'));
    }
}
