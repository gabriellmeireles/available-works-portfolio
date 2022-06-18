<?php

namespace App\Http\Controllers;

use App\Models\Technique;
use App\Providers\PortfolioClass;
use Illuminate\Http\Request;

class TechniqueController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $techniques = Technique::all();
        } else {
            $techniques = Technique::all(); //->where('status',1);
        }
        
        return view('available.techniques.index', compact('techniques'));

    }

    public function store(Request $request)
    {
        $technique = new Technique();
        $technique->name = $request->name;
        $technique->acronym = $request->acronym;
        $technique->slug = PortfolioClass::stringCleanReplaceSpace($request->name,'-');
        $technique->status = $request->status;

        $technique->save();

        return redirect()->route('techniques.index');
    }

    public function update(Request $request, Technique $technique)
    {
        $technique->name =  $request->name;
        $technique->acronym = $request->acronym;
        $technique->slug = PortfolioClass::stringCleanReplaceSpace($request->name,'-');
        $technique->status = $request->status;

        $technique->update();

        return redirect()->route('techniques.index');
    }

    public function softDelete(Technique $technique){
        $technique->delete();

        return redirect()->route('techniques.index');
    }
}
