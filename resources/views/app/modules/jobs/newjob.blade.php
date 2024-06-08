@extends('app.master')

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h3>Post a Vacancy</h3>
    </div>
    <div class="col-md-3">
        <a href="/app/job/list"><button class="btn btn-danger"><i class="fa-solid fa-list"></i> View List</button></a>

    </div>
</div>
<form method="post" action="{{route('app-job-save')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class=" row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example1" class="form-control" name="job_title" />
                <label class="form-label" for="form6Example1">Job Title</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example2" class="form-control" name="job_category" />
                <label class="form-label" for="form6Example2">Job Category</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example2" class="form-control" name="job_address" />
                <label class="form-label" for="form6Example2">Job Address</label>
            </div>
        </div>
    </div>

    <!-- Text input -->
    <div class="row mb-4">

        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="text" id="form6Example4" class="form-control" name="job_company_name" />
                <label class="form-label" for="form6Example4">Company Name</label>
            </div>
        </div>


        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="text" id="form6Example3" class="form-control" name="job_experience" />
                <label class="form-label" for="form6Example3">Job Experience</label>
            </div>

        </div>


        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="text" id="form6Example4" class="form-control" name="job_max_salary" />
                <label class="form-label" for="form6Example4">Job Max Salary</label>
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="text" id="form6Example4" class="form-control" name="job_min_salary" />
                <label class="form-label" for="form6Example4">Job Min Salary</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="text" id="form6Example4" class="form-control" name="job_contact" />
                <label class="form-label" for="form6Example4">Contact</label>
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="date" id="form6Example4" class="form-control" name="job_validity" />
                <label class="form-label" for="form6Example4">Job Validity</label>
            </div>
        </div>



    </div>

    <div class="row mb-4">


        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="text" id="form6Example4" class="form-control" name="job_type" />
                <label class="form-label" for="form6Example4">Type</label>
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline ">
                <input type="text" id="form6Example4" class="form-control" name="job_hour" />
                <label class="form-label" for="form6Example4">Duty Hour</label>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label-title">Job Description</label>
        <input type="textarea" id="form6Example4" class="form-control" name="job_description" />
    </div>

    <!-- Submit button -->
    <div class="row mb-4">
        <div class="col-md-4"></div>
        <button data-mdb-ripple-init type="submit" class="btn btn-primary  mb-4 col-md-4">Register</button>
    </div>
</form>
@endsection