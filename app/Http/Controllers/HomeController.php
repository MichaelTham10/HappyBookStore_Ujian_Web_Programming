<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $categories = Category::all();
        $books = Book::simplePaginate(5);
        return view('pages.home', ['categories' => $categories , 'books' => $books]);

    }
}
