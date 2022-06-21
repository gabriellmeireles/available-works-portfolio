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
        $destination = PortfolioClass::ARTISTS_FOLDER;

        if (auth()->check()) {
            $artists = Artist::all();
        } else {
            $artists = Artist::all()/* ->where('status', 1)*/; 
        }

        return view('available.artists.index', compact('artists', 'destination'));   
    }

    public function store(Request $request)
    {
        $artist = new Artist();
        $destination = PortfolioClass::ARTISTS_FOLDER;

        $artist->full_name = $request->full_name;
        $artist->artistic_name = $request->artistic_name;
        $artist->email = $request->email;
        $artist->about = $request->about;
        $artist->status = $request->status;
        if ($request->hasFile('photo') && $request->photo->isValid()) {
            $fileExtension = $request->photo->getClientOriginalExtension();
            $fileName = md5($request->photo->getClientOriginalName().date('d/m/Y h:i:s')).'.'.$fileExtension;
            $artist->folder = PortfolioClass::stringCleanReplaceSpace($request->artistic_name, '_');
            $destination .= $artist->folder; 
            $request->photo->move(public_path($destination), $fileName);
            $artist->photo = $fileName;
        }   
        $artist->save();
        return redirect()->route('artists.index');
    }

    public function update(Request $request, Artist $artist)
    {
        $destination = PortfolioClass::ARTISTS_FOLDER;
        $destination .= $artist->folder;

        $artist->full_name = $request->full_name;
        $artist->artistic_name = $request->artistic_name;
        $artist->email = $request->email;
        $artist->about = $request->about;
        if ($request->hasFile('photo') && $request->photo->isValid()) {
            if(file_exists(public_path($destination).'/'.$artist->photo)){
                unlink(public_path($destination).'/'.$artist->photo);
            }
            $fileExtension = $request->photo->getClientOriginalExtension();
            $fileName = md5($request->photo->getClientOriginalName().date('d/m/Y h:i:s')).'.'.$fileExtension;
            $request->photo->move(public_path($destination),$fileName);
            $artist->photo = $fileName; 
        }
        $artist->status = $request->status;
        $artist->save();

        return redirect()->route('artists.index');
    }

    public function softDelete(Artist $artist)
    {
        $artist->delete();
        
        return redirect()->route('artists.index');
    }

}
