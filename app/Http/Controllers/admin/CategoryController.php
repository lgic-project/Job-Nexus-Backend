<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categoryData = Category::all();
        return response()->json($categoryData);
    }



    public function getJobsByCategory($title)
    {
        $category = Category::where('category_title', $title)->first();

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $jobs = $category->jobs;
        return response()->json($jobs);
    }
    public function save(Request $request)
    {
        $categoryData = new Category();
        $categoryData->fill($request->all());
        $newThumbnailImageName = time() . '.' . $request->file('category_image')->getClientOriginalName();
        $request->category_image->move(public_path('images/category'), $newThumbnailImageName);
        $categoryData->category_image = $newThumbnailImageName;
        $categoryData->save();
        return view('admin.modules.category.newcategory');
    }
    public function show()
    {
        return view('admin.modules.category.newcategory');
    }
}
