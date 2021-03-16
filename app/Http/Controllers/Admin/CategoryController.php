<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $newcategory = new Category();
        $newcategory->type = $request->type;
        $newcategory->name = $request->name;
        $newcategory->description = $request->description;
        
        if($newcategory->save()){
            return redirect('/controll_panel/category')->with('success', 'Category Created Successfully.');
        }else {
            return redirect('/controll_panel/category')->with('error', 'Error Creating Category.');
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
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
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
            'name' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $category = Category::find($id);
        $category->type = $request->type;
        $category->name = $request->name;
        $category->description = $request->description;
        
        if($category->save()){
            return redirect('/controll_panel/category')->with('toast_success', 'Category Updated Successfully.');
        }else {
            return redirect('/controll_panel/category')->with('toast_error', 'Erro Updating Category.');
        }
    }

    public function search(Request $request) {
        $query = Category::query();
        if(!empty($request->name)){
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $categories = $query->orderBy('id', 'DESC')->get();
        return view('admin.category._list', compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        if($category->delete()) {
            return response()->json(['success' => 'Category Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Error While Deleting Category.']);
        }       
    }


}
