<?php

namespace App\Http\Controllers;

use App\Models\Technique;
use Illuminate\Http\Request;

class TechniqueController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $techniques = Technique::all();
        } else {
            $techniques = Technique::all()->where('status',1);
        }
        
        return view('available.techniques.index', compact('techniques'));

    }
}
