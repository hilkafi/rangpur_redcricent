<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataset = Project::all();
        
        return view('admin.project.index',compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.project.create', compact('categories'));
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
            'description' => 'required',
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('images'), $imageName);
        }


        $data = new Project();
        $data->category_id = $request->category_id;
        $data->sub_category_id = $request->sub_category_id;
        $data->name = $request->name;
        $data->start_date = date('Y-m-d',strtotime($request->start_date));
        $data->end_date = date('Y-m-d',strtotime($request->end_date));
        $data->duration = $request->duration;
        $data->description = $request->description;
        $data->img = $imageName;
        $data->status = $request->status;
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/project')->with('success', 'Project Created Successfully.');
        }else {
            return redirect('/controll_panel/project')->with('error', 'Error Creating Project.');
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
        $categories = Category::all();
        $data = Project::find($id);
        
        return view('admin.project.edit', compact('data', 'categories'));
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
            'description' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('images'), $imageName);
        }



        $data = Project::find($id);
        $data->category_id = $request->category_id;
        $data->sub_category_id = $request->sub_category_id;
        $data->name = $request->name;
        $data->start_date = date('Y-m-d',strtotime($request->start_date));
        $data->end_date = date('Y-m-d',strtotime($request->end_date));
        $data->duration = $request->duration;
        $data->description = $request->description;
        $data->status = $request->status;
        if(!empty($request->img)) {
            if(!empty($data->img)){
                $path = public_path()."/images/".$data->img;
                unlink($path);
            }
            $data->img = $imageName;
        }
        $data->updated_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/project')->with('success', 'Project Updated Successfully.');
        }else {
            return redirect('/controll_panel/project')->with('error', 'Error Updating Project.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $query =Project::query();
        if(!empty($request->name)){
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $dataset = $query->orderBy('id', 'DESC')->get();
        return view('admin.project._list', compact('dataset'));
    }

    public function delete(Request $request)
    {
        $data = Project::find($request->id);
        if(!empty($data->img)){
            $path = public_path()."/images/".$data->img;
            unlink($path);
        }
        if($data->delete()) {
            return response()->json(['success' => 'Speech Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Error While Deleting Speech.']);
        }     
    }
}
