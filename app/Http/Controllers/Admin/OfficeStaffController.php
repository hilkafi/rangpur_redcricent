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
        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move('images', $imageName);
        }


        $data = new OfficeStaff();
        $data->name = $request->name;
        $data->img = $imageName;
        $data->role = $request->role;
        $data->phone = $request->contact;
        $data->blood_group = $request->blood_group;
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
            'role' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move('images', $imageName);
        }
        


        $staff = OfficeStaff::find($id);
        $staff->name = $request->name;
        $staff->role = $request->role;
        $staff->phone = $request->contact;
        $data->blood_group = $request->blood_group;
        $staff->address = $request->address;
        if(!empty($request->img)) {
            if(!empty($staff->img)){
                $path = "images/".$staff->img;
                unlink($path);
            }
            $staff->img = $imageName;
        }
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
        $staff = OfficeStaff::find($request->id);

        if(!empty($staff->img)){
            $path = "images/".$staff->img;
            unlink($path);
        }

        if($staff->delete()) {
            return response()->json(['success' => 'Staff Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Staff While Deleting Category.']);
        }       
    }
}
