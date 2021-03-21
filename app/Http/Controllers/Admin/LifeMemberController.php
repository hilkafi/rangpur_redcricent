<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\OfficeStaff;
use App\Models\Volunteer;
use App\Models\LifeMember;

use Illuminate\Support\Facades\Validator;

class LifeMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataset = LifeMember::all();
        
        return view('admin.life_member.index',compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.life_member.create');
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
           
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('images'), $imageName);
        }


        $data = new LifeMember();
        $data->name = $request->name;
        $data->img = $imageName;
        $data->is_executive = $request->ex_cmt;
        $data->role = $request->role;
        $data->occupation = $request->occupation;
        $data->phone = $request->contact;
        $data->address = $request->address;
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/life-member')->with('success', 'Life-Member Created Successfully.');
        }else {
            return redirect('/controll_panel/life-member')->with('error', 'Error Creating Life-Member.');
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
        $data = LifeMember::find($id);
 
        return view('admin.life_member.edit', compact('data'));
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
            $request->img->move(public_path('images'), $imageName);
        }


        $data =  LifeMember::find($id);
        $data->name = $request->name;
        $data->is_executive = $request->ex_cmt;
        $data->role = $request->role;
        $data->occupation = $request->occupation;
        $data->phone = $request->contact;
        $data->address = $request->address;
        if(!empty($request->img)){
            if(!empty($data->img)){
                $path = public_path()."/images/".$data->img;
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
 
    public function search_member(Request $request) {
        $query =LifeMember::query();
        if(!empty($request->name)){
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $dataset = $query->orderBy('id', 'DESC')->get();
        return view('admin.life_member._list', compact('dataset'));
    }

    public function delete_member(Request $request)
    {
        $data = LifeMember::find($request->id);
        if(!empty($data->img)){
            $path = public_path()."/images/".$data->img;
            unlink($path);
        }
        if($data->delete()) {
            return response()->json(['success' => 'Life-Member Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Error While Deleting Life-Member.']);
        }       
    }
}