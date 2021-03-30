<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExecutiveCommittee;

use Illuminate\Support\Facades\Validator;

class ExecutiveCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataset = ExecutiveCommittee::all();
        
        return view('admin.executive_committee.index',compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.executive_committee.create');
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
    
    
            $data = new ExecutiveCommittee();
            $data->name = $request->name;
            $data->registration_number = $request->registration_no;
            $data->name_bangla = $request->name_bangla;
            $data->joining_date = date('Y-m-d', strtotime($request->joining_date));
            $data->contract_number = $request->contract_number;
            $data->father_name = $request->father_name;
            $data->mother_name = $request->mother_name;
            $data->nid_or_birth_no = $request->nid_or_birth_no;
            $data->email = $request->email;
            $data->date_of_birth = date('Y-m-d', strtotime($request->date_of_birth));
            $data->blood_group = $request->blood_group;
            $data->gender = $request->gender;
            $data->marital_status = $request->marital_status;
            $data->educational_status = $request->educational_status;
            $data->district_name = $request->district_name;
            $data->upazila_name = $request->upazila_name;
            $data->house_village_word_name = $request->house_village_word_name;
            $data->img = $imageName;
            $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/executive-committee')->with('success', 'Executive Committee Member Created Successfully.');
        }else {
            return redirect('/controll_panel/executive-committee')->with('error', 'Error Creating Executive Committee Member.');
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
        $data = ExecutiveCommittee::find($id);
 
        return view('admin.executive_committee.edit', compact('data'));
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
        //return redirect('/office-staff')->with('success', 'Successfull');
        $validator = Validator::make($request->all(), [
            'name' => 'required'
           
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName="";
        if(!empty($request->img)){
            $imageName = time().'.'.$request->img->extension();
            $request->img->move('images', $imageName);
        }


        $data =  LifeMember::find($id);
        $data->name = $request->name;
        $data->is_executive = $request->ex_cmt;
        $data->role = $request->role;
        $data->occupation = $request->occupation;
        $data->phone = $request->contact;
        $data->address = $request->address;
        $data->blood_group= $request->blood_group;
        if(!empty($request->img)){
            if(!empty($data->img)){
                $path = "images/".$data->img;
                unlink($path);
            }
            $data->img = $imageName;
        }
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/life-member')->with('success', 'Life-Member Updated Successfully.');
        }else {
            return redirect('/controll_panel/life-member')->with('error', 'Error Creating Life-Member.');
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
 
    public function search(Request $request) {
        $query = ExecutiveCommittee::query();
        if(!empty($request->name)){
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $dataset = $query->orderBy('id', 'DESC')->get();
        return view('admin.executive_committee._list', compact('dataset'));
    }

    public function delete(Request $request)
    {
        $data = ExecutiveCommittee::find($request->id);
        if(!empty($data->img)){
            $path = "images/".$data->img;
            unlink($path);
        }
        if($data->delete()) {
            return response()->json(['success' => 'Executive Committee Member Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Error While Deleting Executive Committee.']);
        }       
    }
}
