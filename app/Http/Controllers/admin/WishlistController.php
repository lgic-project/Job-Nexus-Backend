<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    //
    public function showWishlist($id)
    {
        $wishlistData = Wishlist::all()->where('employee_id', $id);
        return response()->json($wishlistData);
    }

    public function deleteWishlist($job_id, $emp_id)
    {
        // Attempt to find the wishlist entry by job_id and emp_id
        $wishlistEntry = Wishlist::where('job_id', $job_id)
            ->where('employee_id', $emp_id)
            ->first();

        // Check if the entry exists
        if ($wishlistEntry) {
            $wishlistEntry->delete();
            $wishlistData = Wishlist::all()->where('employee_id', $emp_id);
            return response()->json($wishlistData);
        } else {
            return response()->json(['success' => false, 'message' => 'Wishlist entry not found.'], 404);
        }
    }

    public function saveWishlist($job_id, $employee_id)
    {


        // Check if the entry already exists
        $existingEntry = Wishlist::where('job_id', $job_id)
            ->where('employee_id', $employee_id)
            ->first();

        if ($existingEntry) {
            return response()->json(['success' => false, 'message' => 'Wishlist entry already exists.'], 409);
        }

        // Create a new wishlist entry
        $wishlistEntry = new Wishlist();
        $wishlistEntry->job_id = $job_id;
        $wishlistEntry->employee_id = $employee_id;
        $wishlistEntry->created_at = now();
        $wishlistEntry->updated_at = now();
        $wishlistEntry->save();

        // Retrieve all wishlist entries for the employee
        $wishlistData = Wishlist::where('employee_id', $employee_id)->get();

        return response()->json($wishlistData);
    }
}
