<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Technique;
use App\Models\Work;
use App\Providers\PortfolioClass;
use Illuminate\Http\Request;


class WorkController extends Controller
{
    public function index($serie = null)
    {
        //DB::enableQueryLog(); // Comando para gera a query sql

        $works = Work::all()->where('serie_id', '=', $serie);
        $serie = Serie::find($serie);
        $techniques = Technique::all();
        //$destination = storage_path('app\\public\\'.$serie->artist->folder.'\\'.$serie->category->folder.'\\'.$serie->folder);
        $destination = 'storage'.'/'.$serie->artist->folder.'/'.$serie->category->folder.'/'.$serie->folder;
        
        //dd($destination);   
        //dd(DB::getQueryLog()); //Imprime a query sql
                       
        return view('available.works.index', compact('works','serie','techniques','destination'));
        
    }

    public function store(Request $request, Serie $serie)
    {
        //Methods we can use on $request
        //guessExtension()
        //getMimeType()
        //store()
        //asStore()
        //storePublicly
        //move()
        //getClientOrinalName
        //getClientMineType
        //guesClientExtension()
        //getsize()
        //getError()
        //isValid
        
        
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $serie = Serie::find($request->serie_id);
        $work = new Work();
        $destination = $serie->artist->folder.'/'.$serie->category->folder.'/'.$serie->folder;

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
            $request->file('image')->storeAs($destination, $fileName );
            $work->image = $fileName;
            
            if ($request->cover_image) {
                $serie->cover_image = $fileName;
                $serie->save();
            }
        }
       
        $work->save(); 
             
        return back();

    }

    public function update(Request $request, Work $work)
    {
        $serie = Serie::find($request->serie_id);
        $destination = $serie->artist->folder.'/'.$serie->category->folder.'/'.$serie->folder;
        
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
            $request->file('image')->storeAs($destination, $fileName );
            
            $work->image = $fileName;
            
            if ($request->cover_image) {
                $serie->cover_image = $fileName;
                $serie->save();
            }
        }
       
        $work->save();

        return back();
        
    }

    public function softDelete(Work $work)
    {
        $work->delete();
        
        return back();
    }
}
