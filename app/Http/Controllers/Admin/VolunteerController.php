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

    public function upazila_volunteers($id) {
        $dataset = Volunteer::where([['unit_type', UPAZILA], ['upazila_name', $id]])->get();
        $upazilas = upazilas();
        $upazila_name = $upazilas[$id];
        return view('admin.volunteer.upazila_volunteer', compact('dataset', 'upazila_name'));
    }

    public function rcy_volunteers() {
        $dataset = Volunteer::where('unit_type', RCY)->get();
        return view('admin.volunteer.rcy_volunteer', compact('dataset'));
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
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }
        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move('images', $imageName);
        }


        $data = new Volunteer();
        $data->name = $request->name;
        $data->registration_number = $request->registration_no;
        $data->name_bangla = $request->name_bangla;
        $data->joining_date = date('Y-m-d', strtotime($request->joining_date));
        $data->type_of_volunteer = $request->type_of_volunteer;
        $data->contract_number = $request->contract_number;
        $data->father_name = $request->father_name;
        $data->mother_name = $request->mother_name;
        $data->father_occupation = $request->father_occupation;
        $data->mother_occupation = $request->mother_occupation;
        $data->parent_contract_number = $request->parent_contract_number;
        $data->nid_or_birth_no = $request->nid_or_birth_no;
        $data->email = $request->email;
        $data->date_of_birth = date('Y-m-d', strtotime($request->date_of_birth));
        $data->interest_in_blood_donation = $request->interest_in_blood_donation;
        $data->blood_group = $request->blood_group;
        $data->gender = $request->gender;
        $data->marital_status = $request->marital_status;
        $data->institute_name = $request->institute_name;
        $data->educational_status = $request->educational_status;
        $data->district_name = $request->district_name;
        $data->upazila_name = $request->upazila_name;
        $data->house_village_word_name = $request->house_village_word_name;
        $data->img = $imageName;
        $data->any_time_service = $request->any_time_service;
        $data->reason_for_joining = $request->reason_for_joining;
        $data->unit_type = $request->unit_type;
        $data->is_approved = '1';
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/volunteer')->with('success', 'Volunteer Created Successfully.');
        }else {
            return redirect('/controll_panel/volunteer')->with('error', 'Error While Creating Volunteer.');
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
            $request->img->move('images', $imageName);
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
                $path = "images/".$data->img;
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
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $dataset = $query->orderBy('id', 'DESC')->get();
        return view('admin.volunteer._list', compact('dataset'));
    }

    public function delete_volunteer(Request $request)
    {
        $data = Volunteer::find($request->id);
        if(!empty($data->img)){
            $path = "images/".$data->img;
            unlink($path);
        }
        if($data->delete()) {
            return response()->json(['success' => 'Volunteer Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Error While Deleting Volunteer.']);
        }       
    }
    public function approve_volunteer(Request $request)
    {
        $data = Volunteer::find($request->id);

        $data->is_approved = '1';
        if($data->save()) {
            return response()->json(['success' => 'Volunteer Approved Successfully.']);
        }else {
            return response()->json(['error' => 'Error While approving Volunteer.']);
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
