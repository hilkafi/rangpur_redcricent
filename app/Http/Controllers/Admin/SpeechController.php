<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speech;

use Illuminate\Support\Facades\Validator;

class SpeechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataset = Speech::all();
        
        return view('admin.speech.index',compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.speech.create');
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
            'speaker_name' => 'required',
            'speech' => 'required',
            'speaker_role' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move('images', $imageName);
        }


        $data = new Speech();
        $data->speaker_name = $request->speaker_name;
        $data->speaker_role = $request->speaker_role;
        $data->speech = $request->speech;
        $data->img = $imageName;
        $data->video = $request->video;
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/speech')->with('success', 'Speech Created Successfully.');
        }else {
            return redirect('/controll_panel/speech')->with('error', 'Error Creating Speech.');
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
        $data = Speech::find($id);
 
        return view('admin.speech.edit', compact('data'));
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
            'speaker_name' => 'required',
            'speech' => 'required',
            'speaker_role' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move('images', $imageName);
        }



        $data = Speech::find($id);
        $data->speaker_name = $request->speaker_name;
        $data->speaker_role = $request->speaker_role;
        $data->speech = $request->speech;
        $data->video = $request->video;
        if(!empty($request->img)) {
            if(!empty($data->img)){
                $path = "images/".$data->img;
                unlink($path);
            }
            $data->img = $imageName;
        }
        $data->updated_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/speech')->with('success', 'Speech Updated Successfully.');
        }else {
            return redirect('/controll_panel/speech')->with('error', 'Error Creating Speech.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request) {
        $query =Speech::query();
        if(!empty($request->name)){
            $query->where('speaker_name', 'like', '%' . $request->name . '%');
        }

        $dataset = $query->orderBy('id', 'DESC')->get();
        return view('admin.speech._list', compact('dataset'));
    }


    public function delete(Request $request)
    {
        $data = Speech::find($request->id);
        if(!empty($data->img)){
            $path = "images/".$data->img;
            unlink($path);
        }
        if($data->delete()) {
            return response()->json(['success' => 'Speech Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Error While Deleting Speech.']);
        }     
    }
}
