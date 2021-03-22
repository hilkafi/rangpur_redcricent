<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
use App\Models\Speech;
use App\Models\DonateUs;
use App\Models\DonateGetBlood;
use App\Models\ContactUs;

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

    public function contact_us_save(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $data = new ContactUs();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        if($data->save()){
            return redirect('/contact-us')->with('success', 'Message Sent Successfully.');
        }else {
            return redirect('/contact-us')->with('error', 'Error Sending Message.');
        }
    }

    public function not_found() {
        return view('front.not_found');
    } 

    public function photo_gallery() {
        $photos = Blog::where('img', '!=', NULL)->get();
        return view('front.photo_gallery', compact('photos'));
    }

    public function video_gallery() {
        $videos = Blog::where('video_link', '!=', NULL)->get();
        $message_videos = Speech::all();
        return view('front.video_gallery', compact('videos', 'message_videos'));
    }

    public function publication() {
        $publications = Blog::where('category_id', 8)->get();
        return view('front.publication', compact('publications'));
    }

}
