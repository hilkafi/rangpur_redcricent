<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;

use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataset = Blog::all();
        
        return view('admin.blog.index',compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat = Category::all();
        return view('admin.blog.create',compact('cat'));
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
            'title' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = "";
        if(!empty($request->img)) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('images'), $imageName);
        }


        $post = new Blog();
        $post->title = $request->title;
        $post->img = $imageName;
        $post->category_id = $request->category;
        $post->sub_category_id = $request->subcategory;
        $post->date = $request->date;
        $post->description = $request->description;
        $post->created_at = time();
        
        if($post->save()){
            return redirect('/controll_panel/blog')->with('success', 'Post Created Successfully.');
        }else {
            return redirect('/controll_panel/blog')->with('error', 'Error Creating Post.');
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
        $blog = Blog::find($id);
        $cat = Category::all();
        $data = new Blog();
        return view('admin.blog.edit', compact('blog','cat','data'));
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
        //return redirect('controll_panel/blog')->with('success', 'Successfull.');

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $imageName = "";

        if(!empty($request->img)){
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('images'), $imageName);
        }

        $post = Blog::find($id);
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->sub_category_id = $request->subcategory;
        $post->date = $request->date;
        $post->description = $request->description;
        if(!empty($request->img)){
            if(!empty($post->img)){
                $path = public_path()."/images/".$post->img;
                unlink($path);
            }
            $post->img = $imageName;
        }
        $post->updated_at = time();
        
        if($post->save()){
            
            return redirect('/controll_panel/blog')->with('success', 'Post Updated Successfully.');
        }else {
            return redirect('/controll_panel/blog')->with('error', 'Error While Updating Post Info.');
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
    public function list_subcategory(Request $r){
        $dataset = SubCategory::where( 'category_id', $r->category)->get();
        $str = "";
        if(!empty($dataset)){
           $str .="<option value = ''>Select Subcategory</option>";
            foreach($dataset as $data){
               $str .= "<option value='{$data->id}'>{$data->name}</option>";
            }
           return $str;
        }
    }
    public function search_post(Request $request) {
        $query = Blog::query();
        if(!empty($request->title)){
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        $dataset = $query->orderBy('id', 'DESC')->get();
        return view('admin.blog._list', compact('dataset'));
    }

    public function delete_post(Request $request)
    {
        $post = Blog::find($request->id);
        if(!empty($post->img)){
            $path = public_path()."/images/".$post->img;
            unlink($path);
        }
        if($post->delete()) {
            return response()->json(['success' => 'Post Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Post While Deleting Category.']);
        }       
    }
}
