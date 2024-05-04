@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h3>Edit Employee</h3>
    </div>
    <div class="col-md-3">
        <a href="/employee"><button class="btn btn-danger"><i class="fa-solid fa-list"></i> View List</button></a>

    </div>
</div>
<form method="post" action="/employee/update/{{$employeeData->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class=" row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example1" class="form-control" name="employee_first_name" value="{{$employeeData->employee_first_name}}" />
                <label class=" form-label" for="form6Example1">First name</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example2" class="form-control" name="employee_middle_name" value="{{$employeeData->employee_middle_name}}" />
                <label class=" form-label" for="form6Example2">Middle Name</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example2" class="form-control" name="employee_last_name" value="{{$employeeData->employee_last_name}}" />
                <label class=" form-label" for="form6Example2">Last name</label>
            </div>
        </div>
    </div>

    <!-- Text input -->
    <div class="row mb-4">



        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="text" id="form6Example4" class="form-control" name="employee_address" value="{{$employeeData->employee_address}}" />
                <label class=" form-label" for="form6Example4">Address</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="email" id="form6Example3" class="form-control" name="employee_email" value="{{$employeeData->employee_email}}" />
                <label class=" form-label" for="form6Example3">Email</label>
            </div>

        </div>


        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="password" id="form6Example4" class="form-control" name="employee_password" value="{{$employeeData->employee_password}}" />
                <label class=" form-label" for="form6Example4">Password</label>
            </div>
        </div>
    </div>



    <div class="col">
        <div data-mdb-input-init class="form-outline ">
            <input type="text" id="form6Example4" class="form-control" name="employee_contact" value="{{$employeeData->employee_contact}}" />
            <label class=" form-label" for="form6Example4">Contact</label>
        </div>
    </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-3">
            <div data-mdb-input-init class="form-outline ">
                <input type="file" id="form6Example3" class="form-control" name="employee_image" />
                <label class=" form-label" for="form6Example3">Profile Picture</label>
            </div>
        </div>
        <div class="col-md-3">
            <div data-mdb-input-init class="form-outline ">
                <input type="file" id="form6Example3" class="form-control" name="employee_cv" />
                <label class=" form-label" for="form6Example3">Certificate</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label-title">Employee/ Description</label>
            <input type="textarea" id="form6Example4" class="form-control" name="employee_description" value="{{$employeeData->employee_description}}" />
        </div>


        <div class="row mb-4">
            <div class="col-md-4"></div>
            <button data-mdb-ripple-init type="submit" class="btn btn-primary  mb-4 col-md-4">Save</button>
        </div>
</form>
@endsection