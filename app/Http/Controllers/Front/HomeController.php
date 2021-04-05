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
use App\Models\Category;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Volunteer;
use App\Models\LifeMember;
use App\Models\YouthExecutive;
use App\Models\ExecutiveCommittee;
use App\Models\OfficeStaff;

class HomeController extends Controller
{
    public function index()
    {
        $news_stories = Blog::whereIn('category_id', [CAT_NEWS, CAT_STORIES])->get();
        $reports = Blog::where('category_id', CAT_REPORT)->get();
        $focuses = Blog::where('category_id', CAT_FOCUS)->get();
        $sliders = Slider::where('is_active', true)->take(5)->get();
        $speech = Speech::all();
        $upcoming_events = Blog::where('category_id', CAT_UPCOMING)->get();
        return view('front.home', compact('news_stories', 'reports', 'focuses', 'sliders', 'speech', 'upcoming_events'));
    }

    public function single_blog($id) {
        $data = Blog::find($id);
        return view('front.single_blog', compact('data'));
    }

    public function single_project($id) {
        $data = Project::find($id);
        return view('front.single_project', compact('data'));
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
            'mobile' => 'required',
            'message' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $data = new ContactUs();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
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

    public function show_category($id) {
        $dataset = Blog::where('category_id', $id)->get();
        $category = Category::find($id)->name;
        return view('front.single_category', compact('dataset', 'category'));
    }

    public function show_project_category($id) {
        $dataset = Project::where('category_id', $id)->get();
        $category = Category::find($id)->name;
        return view('front.project_single_category', compact('dataset', 'category'));
    }

    public function career() {
        return view('front.career');
    }

    public function page($id) {
        $data = Page::find($id);
        return view('front.pages.page', compact('data'));
    }

    public function organizational_structure() {
        return view('front.pages.organizational_structure');
    }

    public function partners() {
        return view('front.pages.partners');
    }

    public function upazila_volunteer($upazila) {
        $dataset = Volunteer::where([['unit_type', UPAZILA], ['upazila_name', $upazila]])->get();
        $upazilas = upazilas();
        $upazila_name = $upazilas[$upazila];
        return view('front.pages.upazila_volunteer', compact('dataset', 'upazila_name'));
    }

    public function managing_board() {
        return view('front.pages.managing_board');
    }

    public function senior_management() {
        return view('front.pages.senior_management');
    }

    public function buy_souvenir_product() {
        return view('front.pages.buy_souvenir_product');
    }

    public function executive_committee() {
        $dataset = ExecutiveCommittee::all();
        return view('front.members.executive_committee', compact('dataset'));
    }

    public function life_member() {
        $dataset = LifeMember::all();
        return view('front.members.life_member', compact('dataset'));
    }

    public function youth_executive() {
        $dataset = YouthExecutive::all();
        return view('front.members.youth_executive', compact('dataset'));
    }

    public function rcy_volunteer() {
        $dataset = Volunteer::where('unit_type', RCY)->get();
        return view('front.members.rcy_volunteer', compact('dataset'));
    }

    public function office_staff() {
        $dataset = OfficeStaff::all();
        return view('front.members.office_staff', compact('dataset'));
    }


}
