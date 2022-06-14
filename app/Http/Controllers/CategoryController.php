<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Providers\PortfolioClass;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $destination = PortfolioClass::CATEGORIES_FOLDER;
        if (auth()->check()) {
            $categories = Category::all();
        } else {
            $categories = Category::all()->where('status', 1);
            //$categories = Category::has('series')->where('status', '1')->get(); // Quando estiver implementado autenticação por usuario;
        }

        return view('available.categories.index', compact('categories','destination'));
        
    }

    public function store(Request $request)
    {
        $category = new Category();
        $destination = PortfolioClass::CATEGORIES_FOLDER;

        $category->name = $request->name;
        if ($request->hasFile('image') && $request->image->isValid()) {
            $fileExtension = $request->image->getClientOriginalExtension();
            $fileName = md5($request->image->getClientOriginalName().date('d/m/Y h:m:s')).'.'.$fileExtension;
            $request->image->move(public_path($destination),$fileName);
            $category->image = $fileName;
        }
        $category->status = $request->status;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit()
    {
        //
    }

}
