<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Providers\PortfolioClass;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $artists_folder = PortfolioClass::ARTISTS_FOLDER;

        if (auth()->check()) {
            $artists = Artist::all();
        } else {
            $artists = Artist::all()->where('status', 1);
        }

        return view('available.artists.index', compact('artists', 'artists_folder'));
        
    }

}
