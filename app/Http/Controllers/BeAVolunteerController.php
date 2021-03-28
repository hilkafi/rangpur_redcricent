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
            'img' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'role' => 'required',
            'unit' => 'required',
            'unit_name'=>'required',
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
        $data->img = $imageName;
        $data->unit_type = $request->unit;
        $data->role = $request->role;
        $data->occupation = $request->occupation;
        $data->phone = $request->contact;
        $data->address = $request->address;
        $data->unit_name = $request->unit_name;
        $data->institute = $request->institution;
        $data->blood_group = $request->blood_group;
        $data->blood_donation = $request->blood_date;
        $data->is_approved = '0';
       
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/')->with('success', 'Requested Created Successfully.');
        }else {
            return redirect('/')->with('error', 'Error Creating Request.');
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
