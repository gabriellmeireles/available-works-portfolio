<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index($serie = null)
    {
        if (!auth()->check()) {
            $works = Work::all();
        } else {
            $works = Work::all()->where('status', 1);
        }

        return view('available.works.index', compact('works'));
        
    }
}
