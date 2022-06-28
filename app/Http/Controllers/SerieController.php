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
        $destination = "storage/";
        if (auth()->check()) {
            $series = Serie::all()->where('artist_id', $artist);
            $categories = Category::all();
        } else {
            $series = Serie::all()->where('artist_id', $artist)->where('status',1);
            $categories = Category::all()->where('status',1);

        }

        return view('available.series.index', compact('series', 'categories','destination','artist'));
    }

    public function store(Request $request)
    {
        $serie = new Serie();

        $serie->name = $request->name;
        $serie->folder = PortfolioClass::stringCleanReplaceSpace($request->name,'_');
        $serie->slug = PortfolioClass::stringCleanReplaceSpace($request->name,'-');
        $serie->status = $request->status;
        $serie->artist_id = $request->artist_id;
        $serie->category_id = $request->category_id;

        $serie->save();

        return back()/* ->with('message','Operation Successful !') */;
    }

    public function update(Request $request, Serie $serie)
    {
        $serie->name = $request->name;
        $serie->slug = PortfolioClass::stringCleanReplaceSpace($request->name,'-');
        $serie->status = $request->status;
        //$serie->artist_id = $request->artist_id; // A serie não pode mudar de artista!
        $serie->category_id = $request->category_id;

        $serie->save();

        return Redirect::back()/* ->with('message','Operation Successful !') */;
    }

    public function softDelete(Serie $serie)
    {
        $serie->delete();

        return back()/* ->with('message','Operation Successful !') */;
    }
}
