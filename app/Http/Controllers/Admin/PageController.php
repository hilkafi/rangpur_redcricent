<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Validator;

class PageController extends HomeController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataset = Page::all();
        return view('admin.page.index', compact('dataset')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
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
            'title' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }
        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move('images', $imageName);
        }


        $data = new Page();
        $data->title = $request->title;
        $data->img = $imageName;
        $data->video_link = $request->video_link;
        $data->description = $request->description;
        $data->created_at = time();
        
        if($data->save()){
            return redirect('/controll_panel/page')->with('success', 'Page Created Successfully.');
        }else {
            return redirect('/controll_panel/page')->with('error', 'Error Creating Page.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Page::find($id);
        return view('admin.page.edit', compact('data'));
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
            'title' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }
        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move('images', $imageName);
        }


        $data = Page::find($id);
        $data->title = $request->title;
        $data->video_link = $request->video_link;
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
            return redirect('/controll_panel/page')->with('success', 'Page Updated Successfully.');
        }else {
            return redirect('/controll_panel/page')->with('error', 'Error Updating Page.');
        }
    }

    public function search(Request $request) {
        $query =Page::query();
        if(!empty($request->name)){
            $query->where('title', 'like', '%' . $request->name . '%');
        }

        $dataset = $query->orderBy('id', 'DESC')->get();
        return view('admin.page._list', compact('dataset'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $data = Page::find($request->id);

        if(!empty($data->img)){
            $path = "images/".$data->img;
            unlink($path);
        }

        if($data->delete()) {
            return response()->json(['success' => 'Page Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Error While Deleting Page.']);
        }    
    }
}
