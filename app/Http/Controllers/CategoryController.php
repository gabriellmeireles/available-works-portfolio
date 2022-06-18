<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Providers\PortfolioClass;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $categories = Category::all();
        } else {
            $categories = Category::all();
            //$categories = Category::has('series')->where('status', '1')->get(); // Quando estiver implementado autenticação por usuario;
        }

        return view('available.categories.index', compact('categories'));
        
    }

    public function store(Request $request)
    {
        $category = new Category();
        
        $category->name = $request->name;
        $category->slug = PortfolioClass::stringCleanReplaceSpace($request->name,'-');
        $category->folder = PortfolioClass::stringCleanReplaceSpace($request->name,'_');
        $category->status = $request->status;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function update(Category $category, Request $request)
    {
        $category->name = $request->name;
        $category->slug = PortfolioClass::stringCleanReplaceSpace($request->name,'-');
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
