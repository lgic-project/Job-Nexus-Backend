<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControllerApp extends Controller
{
    //
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

    public function show()
    {
        $categoryData = Category::all();
        return response()->json($categoryData);
    }
}
