<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\OfficeStaff;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Validator;

class BeAVolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('be_a_volunteer.create');
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
        $data->is_approved = '0';
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/')->with('success', 'Volunteer Request Sent.');
        }else {
            return redirect('/')->with('error', 'Error While Requesting For Volunteer.');
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
        //
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
        //
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
}
