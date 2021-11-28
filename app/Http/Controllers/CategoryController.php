<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id){
        $categories = Category::all();
        $category = Category::findOrFail($id);
        $books = Book::where('category_id',$id)->simplePaginate(5);
       

        $title = $category->category;
        return view('pages.category', ['categories' => $categories, 'books' => $books, 'title' => $title]);
    }
}
