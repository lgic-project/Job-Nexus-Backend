@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3>Register Employer</h3>
    </div>
    <div class="col-md-3">
        <a href="/employer"><button class="btn btn-danger"><i class="fa-solid fa-list"></i> View List</button></a>
    </div>
</div>

<form method="post" action="{{ route('employer-save') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example1" class="form-control" name="employer_company_name" />
                <label class="form-label" for="form6Example1">Company Name</label>
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example2" class="form-control" name="employer_address" />
                <label class="form-label" for="form6Example2">Address</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="email" id="form6Example3" class="form-control" name="employer_email" />
                <label class="form-label" for="form6Example3">Email</label>
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="password" id="form6Example4" class="form-control" name="employer_password" />
                <label class="form-label" for="form6Example4">Password</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example5" class="form-control" name="employer_pan_vat" />
                <label class="form-label" for="form6Example5">PAN/VAT</label>
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="url" id="form6Example6" class="form-control" name="company_website" />
                <label class="form-label" for="form6Example6">Company Website</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-3">
            <div data-mdb-input-init class="form-outline">
                <input type="file" id="form6Example7" class="form-control" name="employer_image" />
                <label class="form-label" for="form6Example7">Profile Picture</label>
            </div>
        </div>
        <div class="col-md-3">
            <div data-mdb-input-init class="form-outline">
                <input type="file" id="form6Example8" class="form-control" name="employer_certificate" />
                <label class="form-label" for="form6Example8">Certificate</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example9" class="form-control" name="employer_contact" />
                <label class="form-label" for="form6Example9">Contact</label>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label-title">Employer Description</label>
        <textarea id="form6Example10" class="form-control" name="employer_description"></textarea>
    </div>

    <input type="hidden" name="user_id" value="{{ $userId }}">

    <div class="row mb-4">
        <div class="col-md-4"></div>
        <button data-mdb-ripple-init type="submit" class="btn btn-primary mb-4 col-md-4">Register</button>
    </div>
</form>
@endsection