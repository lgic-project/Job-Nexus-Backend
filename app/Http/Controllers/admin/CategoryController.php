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
}
