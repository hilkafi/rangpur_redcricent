<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\DonateGetBlood;

class DonateGetBloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataset = DonateGetBlood::where('is_approved','1')->orderBy('id','DESC')->get();
        return view('admin.donate_get_blood.index', compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donate_get_blood.create');
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
            'unit_name' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $data = new DonateGetBlood();
        $data->unit_name = $request->unit_name;
        $data->address = $request->address;
        $data->hot_line = $request->hot_line;
        $data->is_approved = '1';
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/donate_get_blood')->with('success', 'Info Created Successfully.');
        }else {
            return redirect('/controll_panel/donate_get_blood')->with('error', 'Error Creating Info.');
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
        $data = DonateGetBlood::find($id);
        return view('admin.donate_get_blood.edit', compact('data'));
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
            'unit_name' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $data = DonateGetBlood::find($id);
        $data->unit_name = $request->unit_name;
        $data->address = $request->address;
        $data->hot_line = $request->hot_line;
        $data->updated_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/donate_get_blood')->with('success', 'Info Updated Successfully.');
        }else {
            return redirect('/controll_panel/donate_get_blood')->with('error', 'Error Updating Info.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request) {
        $query =DonateGetBlood::query();
        if(!empty($request->name)){
            $query->where('unit_name', 'like', '%' . $request->name . '%');
        }

        $dataset = $query->orderBy('id', 'DESC')->get();
        return view('admin.donate_get_blood._list', compact('dataset'));
    }


    public function delete(Request $request)
    {
        $data = DonateGetBlood::find($request->id);
        if($data->delete()) {
            return response()->json(['success' => 'Info Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Error While Deleting Info.']);
        }     
    }

    public function show_pending(){
        $dataset = DonateGetBlood::where('is_approved','0')->orderBy('id', 'DESC')->get();
        return view('admin.donate_get_blood.pending',compact('dataset'));
    }
    public function approve_info(Request $request)
    {
        $data = DonateGetBlood::find($request->id);

        $data->is_approved = '1';
        if($data->save()) {
            return response()->json(['success' => 'Info approved Successfully.']);
        }else {
            return response()->json(['error' => 'Error While approving info.']);
        }       
    }
}
