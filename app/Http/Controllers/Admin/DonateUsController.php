<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DonateUs;


class DonateUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataset = DonateUs::all();
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
            $request->img->move(public_path('images'), $imageName);
        }

        $data = new DonateUs();
        $data->intro = $request->intro;
        $data->mobile_banking_info = $request->mobile_banking_info;
        $data->bank_details = $request->bank_details;
        $data->img = $imageName;
        $data->description = $request->description;
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
            $request->img->move(public_path('images'), $imageName);
        }

        $data = DonateUs::find($id);
        $data->intro = $request->intro;
        $data->mobile_banking_info = $request->mobile_banking_info;
        $data->bank_details = $request->bank_details;
        $data->description = $request->description;
        if(!empty($request->img)) {
            if(!empty($data->img)){
                $path = public_path()."/images/".$data->img;
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
}
