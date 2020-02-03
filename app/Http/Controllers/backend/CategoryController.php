<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    function getCategory() {
        $data['categories'] = Category::all();
        return view('backend.category.category', $data);
    }

    function getEditCategory($idCate) {
        $data['categories'] = Category::all();
        $data['cate'] = Category::find($idCate);
        return view('backend.category.editcategory', $data);
    }

    function postCategory(request $r) {
        
        $cate = new Category();
        $cate->name = $r->name;
        $cate->slug = Str::slug($r->name, '-');
        $cate->parent = $r->parent;
        $cate->save();
        //quay lai duong dan
        return redirect()->back()->with('newNotified', 'da them thanh cong');

    }

    function postEditCategory(request $r) {

    }

    function delCategory($idCate)
    {
        $cate = Category::find($idCate);
        Category::where('parent', $cate->id)->update(['parent'=>$cate->parent]);
        $cate->delete();
        return redirect('/admin/category')->with('newNotified', 'da xoa thanh cong');
    }
}
