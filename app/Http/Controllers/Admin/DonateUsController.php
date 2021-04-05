<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\DonateUs;
use Illuminate\Support\Facades\Validator;


class DonateUsController extends HomeController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataset = DonateUs::where('is_approved','1')->orderBy('id','DESC')->get();
        return view('admin.donate_us.index', compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donate_us.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move('images', $imageName);
        }

        $data = new DonateUs();
        $data->intro = $request->intro;
        $data->mobile_banking_info = $request->mobile_banking_info;
        $data->bank_details = $request->bank_details;
        $data->img = $imageName;
        $data->description = $request->description;
        $data->is_approved = '1';
        $data->created_at = time();
        if($data->save()){
            return redirect('/controll_panel/donate_us')->with('success', 'Donation Info Created Successfully.');
        }else {
            return redirect('/controll_panel/donate_us')->with('error', 'Error Creating Donation Info.');
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
        $data = DonateUs::find($id);
        return view('admin.donate_us.edit', compact('data'));
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
        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move('images', $imageName);
        }

        $data = DonateUs::find($id);
        $data->intro = $request->intro;
        $data->mobile_banking_info = $request->mobile_banking_info;
        $data->bank_details = $request->bank_details;
        $data->description = $request->description;
        if(!empty($request->img)) {
            if(!empty($data->img)){
                $path = "images/".$data->img;
                unlink($path);
            }
            $data->img = $imageName;
        }
        $data->updated_at = time();
        if($data->save()){
            return redirect('/controll_panel/donate_us')->with('success', 'Donation Info Updated Successfully.');
        }else {
            return redirect('/controll_panel/donate_us')->with('error', 'Error Updating Donation Info.');
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

    public function show_pending(){
        $dataset = DonateUs::where('is_approved','0')->orderBy('id', 'DESC')->get();
        return view('admin.donate_us.pending',compact('dataset'));
    }
    public function approve_info(Request $request)
    {
        $data = DonateUs::find($request->id);

        $data->is_approved = '1';
        if($data->save()) {
            return response()->json(['success' => 'Info approved Successfully.']);
        }else {
            return response()->json(['error' => 'Error While approving info.']);
        }       
    }
}
