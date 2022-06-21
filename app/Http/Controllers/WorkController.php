<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Technique;
use App\Models\Work;
use App\Providers\PortfolioClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function index($serie = null)
    {
        //DB::enableQueryLog(); // Comando para gera a query sql

        $works = Work::all()->where('serie_id', '=', $serie);
        $serie = Serie::find($serie);
        $techniques = Technique::all();
        $destination = PortfolioClass::ARTISTS_FOLDER.$serie->artist->folder.'/'.$serie->category->folder.'/'.$serie->folder;
        
        //dd(DB::getQueryLog()); //Imprime a query sql
                       
        return view('available.works.index', compact('works','serie','techniques','destination'));
        
    }

    public function store(Request $request, Serie $serie)
    {
        $serie = Serie::find($request->serie_id);
        $work = new Work();

        $work->title = $request->title;
        $work->slug = PortfolioClass::stringCleanReplaceSpace($request->title,'-');
        $work->width = $request->width;
        $work->height = $request->height;
        $work->year = $request->year;
        $work->produced = $request->produced;
        $work->edition = $request->edition;
        $work->price = $request->price;
        $work->status = $request->status;
        $work->serie_id = $request->serie_id;
        $work->technique_id = $request->technique_id;

        if ($request->hasFile('image') && $request->image->isValid()) {
            $fileExtension = $request->image->getClientOriginalExtension();
            $fileName = md5($request->image->getClientOriginalName().date('d/m/Y h:i:s')).'.'.$fileExtension;
            $destination = PortfolioClass::ARTISTS_FOLDER.$serie->artist->folder.'/'.$serie->category->folder.'/'.$serie->folder;
            $request->image->move(public_path($destination),$fileName);
            
            $work->image = $fileName;
            
            if ($request->cover_image) {
                $serie->cover_image = $fileName;
            }
        }
        
        $work->save();
        $serie->save();

        return back();

    }

    public function update(Request $request, Work $work)
    {
        $serie = Serie::find($request->serie_id);
        
        $work->title = $request->title;
        $work->slug = PortfolioClass::stringCleanReplaceSpace($request->title,'-');
        $work->width = $request->width;
        $work->height = $request->height;
        $work->year = $request->year;
        $work->produced = $request->produced;
        $work->edition = $request->edition;
        $work->price = $request->price;
        $work->status = $request->status;
        $work->serie_id = $request->serie_id;
        $work->technique_id = $request->technique_id;

        if ($request->hasFile('image') && $request->image->isValid()) {
            $fileExtension = $request->image->getClientOriginalExtension();
            $fileName = md5($request->image->getClientOriginalName().date('d/m/Y h:i:s')).'.'.$fileExtension;
            $destination = PortfolioClass::ARTISTS_FOLDER.$serie->artist->folder.'/'.$serie->category->folder.'/'.$serie->folder;
            $request->image->move(public_path($destination),$fileName);
            
            $work->image = $fileName;
            
            if ($request->cover_image) {
                $serie->cover_image = $fileName;
            }
        }
        
        $work->save();
        $serie->save();

        return back();
        
    }
}
