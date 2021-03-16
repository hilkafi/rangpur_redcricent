<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\OfficeStaff;

use Illuminate\Support\Facades\Validator;

class OfficeStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataset = OfficeStaff::all();
        
        return view('admin.office_staff.index',compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.office_staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'role' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('images'), $imageName);


        $data = new OfficeStaff();
        $data->name = $request->name;
        $data->img = $imageName;
        $data->role = $request->role;
        $data->phone = $request->contact;
        $data->address = $request->address;
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/office-staff')->with('success', 'Post Created Successfully.');
        }else {
            return redirect('/controll_panel/office-staff')->with('error', 'Error Creating Post.');
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
    public function edit($id)
    {
        $dataset = OfficeStaff::find($id);
 
        return view('admin.office_staff.edit', compact('dataset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

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
            'img' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'role' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('images'), $imageName);
        


        $staff = OfficeStaff::find($id);
        $staff->name = $request->name;
        $staff->img = $imageName;
        $staff->role = $request->role;
        $staff->phone = $request->contact;
        $staff->address = $request->address;
        
        $staff->updated_at = time();
        
        if($staff->save()){
            
            return redirect('/controll_panel/office-staff')->with('success', 'Post Edited Successfully.');
        }else {
            return redirect('/controll_panel/office-staff')->with('error', 'Error Editing Post.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 
    public function search_staff(Request $request) {
        $query = OfficeStaff::query();
        if(!empty($request->name)){
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $dataset = $query->orderBy('id', 'DESC')->get();
        return view('admin.office_staff._list', compact('dataset'));
    }

    public function delete_staff(Request $request)
    {
        $post = OfficeStaff::find($request->id);
        if($post->delete()) {
            return response()->json(['success' => 'Post Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Post While Deleting Category.']);
        }       
    }
}
