@extends('admin.master')

@section('content')
<div class="row mb-4">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3>Edit Employer</h3>
    </div>
    <div class="col-md-3 text-end">
        <a href="/employer" class="btn btn-danger">
            <i class="fa-solid fa-list"></i> View List
        </a>
    </div>
</div>

<form method="post" action="/employer/update/{{$employerData->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="employer_first_name" class="form-control" name="name" value="{{ $employerData->user->name }}" />
                <label class="form-label" for="employer_first_name">Name</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="employer_company_name" class="form-control" name="employer_company_name" value="{{ $employerData->employer_company_name }}" />
                <label class="form-label" for="employer_company_name">Company Name</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="employer_address" class="form-control" name="employer_address" value="{{ $employerData->employer_address }}" />
                <label class="form-label" for="employer_address">Address</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="email" id="employer_email" class="form-control" name="email" value="{{ $employerData->user->email }}" />
                <label class="form-label" for="employer_email">Email</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="password" id="employer_password" class="form-control" name="password" placeholder="Enter new password if you want to change" />
                <label class="form-label" for="employer_password">Password</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="employer_contact" class="form-control" name="contact" value="{{ $employerData->user->contact }}" />
                <label class="form-label" for="employer_contact">Contact</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="employer_contact" class="form-control" name="employer_pan_vat" value="{{ $employerData->employer_pan_vat }}" />
                <label class="form-label" for="employer_contact">PAN/VAT</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="employer_contact" class="form-control" name="company_website" value="{{ $employerData->company_website }}" />
                <label class="form-label" for="employer_contact">Website Link</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="form-outline">
                <input type="file" id="employer_image" class="form-control" name="employer_image" />
                <label class="form-label" for="employer_image">Profile Picture</label>
            </div>
            @if ($employerData->employer_image)
            <img src="{{ asset('images/employer/profile/' . $employerData->employer_image) }}" alt="Profile Picture" class="img-thumbnail mt-2" style="width: 100px; height: 100px;">
            @endif
        </div>
        <div class="col-md-6">
            <div class="form-outline">
                <input type="file" id="employer_certificate" class="form-control" name="employer_certificate" />
                <label class="form-label" for="employer_certificate">Certificate</label>
            </div>
            @if ($employerData->employer_certificate)
            <img src="{{ asset('images/employer/certificate/' . $employerData->employer_certificate) }}" alt="Certificate" class="img-thumbnail mt-2" style="width: 100px; height: 100px;">
            @endif
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <textarea id="employer_description" class="form-control" name="employer_description" rows="4">{{ $employerData->employer_description }}</textarea>
                <label class="form-label" for="employer_description">Description</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
@endsection