@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3>Register Employee</h3>
    </div>
    <div class="col-md-3">
        <a href="/employee"><button class="btn btn-danger"><i class="fa-solid fa-list"></i> View List</button></a>
    </div>
    <div class="col-md-3 text-end">
        <a href="/employee/register">
            <button class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Create New
            </button>
        </a>
    </div>
</div>
<form method="post" action="{{ route('employee-save') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <!-- Hidden input for user_id -->
    <input type="text" name="user_id" value="{{ $userId }}" />

    <!-- Text input -->
    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="formSlug" class="form-control" name="employee_slug" />
                <label class="form-label" for="formSlug">Slug</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="formAddress" class="form-control" name="employee_address" />
                <label class="form-label" for="formAddress">Address</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="file" id="formImage" class="form-control" name="employee_image" />
                <label class="form-label" for="formImage">Profile Picture</label>
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="file" id="formImage" class="form-control" name="employee_cv" />
                <label class="form-label" for="formImage">Enter your CV</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="formStatus" class="form-control" name="employee_status" />
                <label class="form-label" for="formStatus">Status</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="formEducation" class="form-control" name="employee_education" />
                <label class="form-label" for="formEducation">Education</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="formWorkExperience" class="form-control" name="employee_work_experience" />
                <label class="form-label" for="formWorkExperience">Work Experience</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="formParticipation" class="form-control" name="employee_participation" />
                <label class="form-label" for="formParticipation">Participation</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="formTraining" class="form-control" name="employee_training" />
                <label class="form-label" for="formTraining">Training</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="formFBLink" class="form-control" name="employee_fb_link" />
                <label class="form-label" for="formFBLink">Facebook Link</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="formLinkedInLink" class="form-control" name="employee_linkedin_link" />
                <label class="form-label" for="formLinkedInLink">LinkedIn Link</label>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label-title">Description</label>
        <textarea id="formDescription" class="form-control" name="employee_description"></textarea>
    </div>

    <!-- Submit button -->
    <div class="row mb-4">
        <div class="col-md-4"></div>
        <button data-mdb-ripple-init type="submit" class="btn btn-primary mb-4 col-md-4">Register</button>
    </div>
</form>
@endsection