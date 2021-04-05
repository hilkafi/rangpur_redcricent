<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends HomeController
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::latest()->orderBy('id', 'DESC')->get();

        return view('admin.sub_category.index', compact('categories', 'sub_categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.sub_category.create', compact('categories'));
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
            'category_id' => 'required',
            'name' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $new_subcategory = new SubCategory();
        $new_subcategory->category_id = $request->category_id;
        $new_subcategory->type = Category::find($request->category_id)->type;
        $new_subcategory->name = $request->name;
        $new_subcategory->description = $request->description;
        
        if($new_subcategory->save()){
            return redirect('/controll_panel/sub-category')->with('success', 'SubCategory Created Successfully.');
        }else {
            return redirect('/controll_panel/sub-category')->with('error', 'Error Creating SubCategory.');
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
        $categories = Category::all();
        $data = SubCategory::find($id);
        return view('admin.sub_category.edit', compact('categories', 'data'));
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
            'category_id' => 'required',
            'name' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages()->all());
        }

        $subcategory = SubCategory::find($id);
        $subcategory->category_id = $request->category_id;
        $subcategory->type = Category::find($request->category_id)->type;
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        
        if($subcategory->save()){
            return redirect('/controll_panel/sub-category')->with('toast_success', 'SubCategory Updated Successfully.');
        }else {
            return redirect('/controll_panel/sub-category')->with('toast_error', 'Erro Updating SubCategory.');
        }
    }

    public function search(Request $request) {
        $query = SubCategory::query();
        if(!empty($request->name)){
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        if(!empty($request->category_id)){
            $query->where('category_id', $request->category_id);
        }

        $sub_categories = $query->orderBy('id', 'DESC')->get();
        return view('admin.sub_category._list', compact('sub_categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $subcategory = SubCategory::find($request->id);
        if($subcategory->delete()) {
            return response()->json(['success' => 'SubCategory Deleted Successfully.']);
        }else {
            return response()->json(['error' => 'Error While Deleting SubCategory.']);
        }    
    }
}
