<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Auth;


class DashboardController extends Controller
{
    //

    public function dashboard()
    {
        if (Auth::user()->role == 'superadmin') {
            return view('admin.master');
        }
        if (Auth::user()->role == 'admin') {
            $userId = Auth::user()->id;
            $employer = Employer::where('user_id', '=', $userId)->first();
            if ($employer === null) {
                return redirect('/completeprofile');
            } else {
                if ($employer->employer_status == 'pending') {
                    return redirect('/pending-page');
                } else {
                    return view('app.master');
                }
            }
        }
    }

    public function completeProfile()
    {
        return view('app.completeProfile');
    }

    public function createProfile(Request $req)
    {
        $employerData = new Employer();
        $employerData->user_id = Auth::user()->id;
        $employerData->employer_status = "pending";
        $employerData->fill($req->all());
        //profile picture
        $newThumbnailImageName = time() . '.' . $req->file('employer_image')->getClientOriginalName();
        $req->employer_image->move(public_path('images/employer/profile'), $newThumbnailImageName);
        $employerData->employer_image = $newThumbnailImageName;

        //certificate
        $newThumbnailImageName2 = time() . '.' . $req->file('employer_certificate')->getClientOriginalName();
        $req->employer_certificate->move(public_path('images/employer/certificate'), $newThumbnailImageName2);
        $employerData->employer_certificate = $newThumbnailImageName2;
        $employerData->employer_slug = $req->user_id;
        $employerData->employer_status = "pending";
        $employerData->employer_slug = "Inactive";
        // dd($employerData);
        $employerData->save();
        return redirect('/pending-page');
    }


    public function verifyPending()
    {
        $userId = Auth::user()->id;
        $employer = Employer::where('user_id', '=', $userId)->first();
        if ($employer->employer_status == 'pending') {
            return view('app.pending');
        } else {
            return view('app.master');
        }
    }
}
