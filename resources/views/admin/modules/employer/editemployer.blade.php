@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h3>Edit Employer</h3>
    </div>
    <div class="col-md-3">
        <a href="/employer"><button class="btn btn-danger"><i class="fa-solid fa-list"></i> View List</button></a>

    </div>
</div>
<form method="post" action="/employer/update/{{$employerData->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class=" row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example1" class="form-control" name="employer_first_name" value="{{$employerData->employer_first_name}}" />
                <label class=" form-label" for="form6Example1">First name</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example2" class="form-control" name="employer_middle_name" value="{{$employerData->employer_middle_name}}" />
                <label class=" form-label" for="form6Example2">Middle Name</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example2" class="form-control" name="employer_last_name" value="{{$employerData->employer_last_name}}" />
                <label class=" form-label" for="form6Example2">Last name</label>
            </div>
        </div>
    </div>

    <!-- Text input -->
    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="text" id="form6Example3" class="form-control" name="employer_company_name" value="{{$employerData->employer_company_name}}" />
                <label class=" form-label" for="form6Example3">Company name</label>
            </div>

        </div>


        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="text" id="form6Example4" class="form-control" name="employer_address" value="{{$employerData->employer_address}}" />
                <label class=" form-label" for="form6Example4">Address</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="email" id="form6Example3" class="form-control" name="employer_email" value="{{$employerData->employer_email}}" />
                <label class=" form-label" for="form6Example3">Email</label>
            </div>

        </div>


        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="password" id="form6Example4" class="form-control" name="employer_password" value="{{$employerData->employer_password}}" />
                <label class=" form-label" for="form6Example4">Password</label>
            </div>
        </div>
    </div>



    <div class="col">
        <div data-mdb-input-init class="form-outline ">
            <input type="text" id="form6Example4" class="form-control" name="employer_contact" value="{{$employerData->employer_contact}}" />
            <label class=" form-label" for="form6Example4">Contact</label>
        </div>
    </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-3">
            <div data-mdb-input-init class="form-outline ">
                <input type="file" id="form6Example3" class="form-control" name="employer_image" />
                <label class=" form-label" for="form6Example3">Profile Picture</label>
            </div>
        </div>
        <div class="col-md-3">
            <div data-mdb-input-init class="form-outline ">
                <input type="file" id="form6Example3" class="form-control" name="employer_certificate" />
                <label class=" form-label" for="form6Example3">Certificate</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label-title">Employer/ Description</label>
            <input type="textarea" id="form6Example4" class="form-control" name="employer_description" value="{{$employerData->employer_description}}" />
        </div>


        <div class="row mb-4">
            <div class="col-md-4"></div>
            <button data-mdb-ripple-init type="submit" class="btn btn-primary  mb-4 col-md-4">Save</button>
        </div>
</form>
@endsection