<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\OfficeStaff;
use App\Models\Volunteer;

use Illuminate\Support\Facades\Validator;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataset = Volunteer::where('is_approved','1')->orderBy('id','DESC')->get();
        
        return view('admin.volunteer.index',compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.volunteer.create');
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
            'role' => 'required',
            'unit' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }
        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('images'), $imageName);
        }


        $data = new Volunteer();
        $data->name = $request->name;
        $data->img = $imageName;
        $data->unit_type = $request->unit;
        $data->role = $request->role;
        $data->occupation = $request->occupation;
        $data->phone = $request->contact;
        $data->address = $request->address;
        $data->is_approved = '1';
        $data->institute = $request->institution;
        $data->blood_group = $request->blood_group;
        $data->blood_donation = $request->blood_date;
        $data->unit_name = $request->unit_name;
        $data->is_executive = $request->is_executive;
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/volunteer')->with('success', 'Post Created Successfully.');
        }else {
            return redirect('/controll_panel/volunteer')->with('error', 'Error Creating Post.');
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
        $data = Volunteer::find($id);
 
        return view('admin.volunteer.edit', compact('data'));
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
            'role' => 'required',
            'unit' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('images'), $imageName);
        }



        $data = Volunteer::find($id);
        $data->name = $request->name;
        $data->unit_type = $request->unit;
        $data->role = $request->role;
        $data->occupation = $request->occupation;
        $data->phone = $request->contact;
        $data->address = $request->address;
        $data->is_approved = '1';
        $data->institute = $request->institution;
        $data->blood_group = $request->blood_group;
        $data->blood_donation = $request->blood_date;
        $data->unit_name = $request->unit_name;
        $data->is_executive = $request->is_executive;
        if(!empty($request->img)) {
            if(!empty($data->img)){
                $path = public_path()."/images/".$data->img;
                unlink($path);
            }
            $data->img = $imageName;
        }
        $data->updated_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/volunteer')->with('success', 'Post Created Successfully.');
        }else {
            return redirect('/controll_panel/volunteer')->with('error', 'Error Creating Post.');
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
 
    public function search_volunteer(Request $request) {
        $query =Volunteer::query();
        if(!empty($request->name)){
            $query->where('unit_name', 'like', '%' . $request->name . '%');
        }

        $dataset = $query->orderBy('id', 'DESC')->get();
        return view('admin.volunteer._list', compact('dataset'));
    }

    public function delete_volunteer(Request $request)
    {
        $data = Volunteer::find($request->id);
        if(!empty($data->img)){
            $path = public_path()."/images/".$data->img;
            unlink($path);
        }
        if($data->delete()) {
            return response()->json(['success' => 'Post Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Post While Deleting Category.']);
        }       
    }
    public function approve_volunteer(Request $request)
    {
        $data = Volunteer::find($request->id);

        $data->is_approved = '1';
        if($data->save()) {
            return response()->json(['success' => 'Life-Member approved Successfully.']);
        }else {
            return response()->json(['error' => 'Error While approving Life-Member.']);
        }       
    }

    public function pending_show(){
        $dataset = Volunteer::where('is_approved','0')->orderBy('id', 'DESC')->get();
        return view('admin.volunteer.pending', compact('dataset'));
    }
    public function executive_show(){
        $dataset = Volunteer::where('is_executive','yes')->orderBy('id', 'ASC')->get();
        return view('admin.volunteer.executive_committee', compact('dataset'));
    }
}
