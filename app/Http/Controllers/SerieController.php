<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $series = Serie::all();
        } else {
            $series = Serie::all()->where('status', 1);
        }
        
        return view('available.series.index', compact('series'));
    }
}
