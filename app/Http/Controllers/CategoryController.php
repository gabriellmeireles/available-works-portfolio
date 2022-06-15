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
            $categories = Category::all();
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

    public function update(Category $category, Request $request)
    {
        $destination = PortfolioClass::CATEGORIES_FOLDER;

        $category->name = $request->name;
        if ($request->hasFile('image') && $request->image->isValid()) {
            if(file_exists(public_path($destination),$category->image)){
                unlink(public_path($destination),$category->image);
            }
            $fileExtension = $request->image->getClientOriginalExtension();
            $fileName = md5($request->image->getClientOrigialName().date('d/m/Y h:i:s')).'.'.$fileExtension;
            $request->image->move(public_path($destination),$fileName);
        }
        $category->status = $request->status;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function softDelete(Category $category)
    {
        $category->delete();
        
        return redirect()->route('categories.index');
    }

}
