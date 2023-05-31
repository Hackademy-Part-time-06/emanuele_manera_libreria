<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryIndex () {
        $categories = Category::all(); // metodo per importare le categorie dalla tabella 
        return view('category.index', ['categories'=>$categories]);
    }

    public function categoryCreate () {
        return view('category.create');
    }

    public function categoryStore (CategoryRequest $request) {
        
        Category::create([
            'name' => $request->name
        ]); 

        return redirect()->route('category.index')->with(['success' => 'Categoria: Testo del messaggio']);
    }

    public function categoryShow (Category $category) {

        /* $searchCategory = Category::find($category); 

        if (is_null($searchCategory)) {
            abort(404);
        } */

        // $searchCategory = Category::findOrFail($category); 

        return view('category.show', compact('category'));
    }
}
