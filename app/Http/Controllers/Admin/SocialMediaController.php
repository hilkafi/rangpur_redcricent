<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataset = SocialMedia::all();
        return view('admin.social_media.index', compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social_media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $data = new SocialMedia();
        $data->name = $request->name;
        $data->link = $request->link;
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/social_media')->with('success', 'Social Media Info Created Successfully.');
        }else {
            return redirect('/controll_panel/social_media')->with('error', 'Error Creating Social Media Info.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SocialMedia::find($id);
        return view('admin.social_media.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $data = SocialMedia::find($id);
        $data->name = $request->name;
        $data->link = $request->link;
        $data->updated_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/social_media')->with('success', 'Social Media Info Updated Successfully.');
        }else {
            return redirect('/controll_panel/social_media')->with('error', 'Error Updating Social Media Info.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $data = SocialMedia::find($request->id);
        if($data->delete()) {
            return response()->json(['success' => 'Social Media Info Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Error While Deleting Social Media Info.']);
        }     
    }
}
