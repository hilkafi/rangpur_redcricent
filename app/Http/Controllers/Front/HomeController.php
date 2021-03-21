<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Speech;

class HomeController extends Controller
{
    public function index()
    {
        $news_stories = Blog::whereIn('category_id', [5, 6])->get();
        $reports = Blog::where('category_id', 4)->get();
        $focuses = Blog::where('category_id', 7)->get();
        $images = Blog::where('img', '!=', NULL)->take(4)->get();
        $speech = Speech::all();
        return view('front.home', compact('news_stories', 'reports', 'focuses', 'images', 'speech'));
    }

    public function single_blog($id) {
        $data = Blog::find($id);
        return view('front.single_blog', compact('data'));
    }
}