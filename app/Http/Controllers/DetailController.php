<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id){
        $detail = Detail::where('book_id',$id)->first();
        $categories = Category::all();
        return view('pages.detail', ['detail' => $detail , 'categories' => $categories]);

    }
}
