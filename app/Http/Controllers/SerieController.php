<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Serie;
use App\Providers\PortfolioClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SerieController extends Controller
{
    public function index($artist = null)
    {

        $artists = Artist::all()->where('slug', $artist);
        if ($artist) {
            if (!auth()->check()) {
                foreach ($artists as $artist) {
                    $series = Serie::all()->where('artist_id', $artist->id);
                }
                $categories = Category::all();
            }else{
                $series = Serie::all()->where('artist_id', $artist)->where('status', 1);
                $categories = Category::all()->where('status',1);
            }
            foreach ($series as $serie) {
                $serie->folder = PortfolioClass::ARTISTS_FOLDER . $serie->artist->folder . '/'. PortfolioClass::stringCleanReplaceSpace($serie->name,'_');
            }
            
        }else{
            return redirect()->route('artists.index');
        }   
       
        
        return view('available.series.index', compact('series','artists','categories'));
    }

    public function store(Request $request)
    {
        $serie = new Serie();

        $serie->name = $request->name;
        $serie->slug = PortfolioClass::stringCleanReplaceSpace($request->name,'-');
        $serie->status = $request->status;
        $serie->artist_id = $request->artist_id;
        $serie->category_id = $request->category_id;

        $serie->save();

        //return redirect()->route('series.index');
        return back();
    }
    public function update(Request $request, Serie $serie)
    {
        $serie->name = $request->name;
        $serie->slug = PortfolioClass::stringCleanReplaceSpace($request->name,'-');
        $serie->status = $request->status;
        $serie->artist_id = $request->artist_id;
        $serie->category_id = $request->category_id;

        $serie->save();

        //return redirect()->route('series.index');
        return back();
    }

    public function softDelete(Serie $serie)
    {
        $serie->delete();

        //return Redirect::back()->with('message','Operation Successful !'); Testar depois
        //return redirect()->previous();
        return back();
    }
}
