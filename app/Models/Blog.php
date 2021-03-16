<?php

namespace App\Models;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
public function category_name($id)
{
    $qry = Category::query();
        if(!empty($id))
        {
            $data = $qry->where('id',$id)->first();
        }
        return !empty($data) ? $data->name : " ";

}
public function subcategory_name($id){
    $qry = SubCategory::query();
    if(!empty($id))
    {
        $data = $qry->where('id',$id)->first();
    }
    return !empty($data) ? $data->name : " ";

}
}
