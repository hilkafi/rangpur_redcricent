<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Speech;
use App\Models\DonateUs;
use App\Models\DonateGetBlood;

class HomeController extends Controller
{
    public function index()
    {
        $news_stories = Blog::whereIn('category_id', [5, 6])->get();
        $reports = Blog::where('category_id', 4)->get();
        $focuses = Blog::where('category_id', 7)->get();
        $images = Blog::where('img', '!=', NULL)->take(4)->get();
        $speech = Speech::all();
        //return $news_stories;
        return view('front.home', compact('news_stories', 'reports', 'focuses', 'images', 'speech'));
    }

    public function single_blog($id) {
        $data = Blog::find($id);
        return view('front.single_blog', compact('data'));
    }

    public function donate_us() {
        $data = DonateUs::find(1);
        return view('front.donate_us', compact('data'));
    }

    public function donate_blood() {
        $dataset = DonateGetBlood::all();
        return view('front.donate_blood', compact('dataset'));
    }

    public function become_member() {
        return view('front.become_member');
    }

    public function become_voluteer() {
        return view('front.become_volunteer');
    }

    public function contact_us() {
        return view('front.contact_us');
    }
}
