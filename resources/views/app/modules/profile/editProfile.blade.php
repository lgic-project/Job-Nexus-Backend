@extends('app.master')

@section('content')
<div class="container">
    <h2>Employer Profile</h2>
    <form id="employerProfileForm" action="/employerUpdate" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="employer_company_name">Company Name</label>
            <input type="text" class="form-control" id="employer_company_name" name="employer_company_name" value="{{ $employerData->employer_company_name }}">
        </div>

        <div class="form-group">
            <label for="employer_address">Address</label>
            <input type="text" class="form-control" id="employer_address" name="employer_address" value="{{ $employerData->employer_address }}">
        </div>

        <div class="form-group">
            <label for="employer_pan_vat">PAN/VAT</label>
            <input type="text" class="form-control" id="employer_pan_vat" name="employer_pan_vat" value="{{ $employerData->employer_pan_vat }}">
        </div>

        <div class="form-group">
            <label for="employer_description">Description</label>
            <textarea class="form-control" id="employer_description" name="employer_description">{{ $employerData->employer_description }}</textarea>
        </div>

        <div class="form-group">
            <label for="company_website">Company Website</label>
            <input type="url" class="form-control" id="company_website" name="company_website" value="{{ $employerData->company_website }}">
        </div>

        <div class="form-group">
            <label for="employer_image">Company Image</label>
            <input type="file" class="form-control-file" id="employer_image" name="employer_image">
            @if($employerData->employer_image)
            <img src="{{ asset('storage/' . $employerData->employer_image) }}" alt="Company Image" class="img-thumbnail" width="100">
            @endif
        </div>

        <div class="form-group">
            <label for="employer_certificate">Certificate</label>
            <input type="file" class="form-control-file" id="employer_certificate" name="employer_certificate">
            @if($employerData->employer_certificate)
            <a href="{{ asset('storage/' . $employerData->employer_certificate) }}" target="_blank">View Certificate</a>
            @endif
        </div>

        <h4>User Information</h4>
        <div class="form-group">
            <label for="user_name">Name</label>
            <input type="text" class="form-control" id="user_name" name="name" value="{{ $employerData->user->name }}" disabled>
        </div>

        <div class="form-group">
            <label for="user_email">Email</label>
            <input type="email" class="form-control" id="user_email" name="email" value="{{ $employerData->user->email }}" disabled>
        </div>

        <div class="form-group">
            <label for="user_contact">Contact</label>
            <input type="text" class="form-control" id="user_contact" name="contact" value="{{ $employerData->user->contact }}" disabled>
        </div>

        <a href="/app/edit/employer"></a><button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection