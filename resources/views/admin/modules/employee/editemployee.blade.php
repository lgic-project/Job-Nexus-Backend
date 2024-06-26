@extends('admin.master')

@section('content')
<div class="row mb-4">
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
    <div class="row mb-4">
        <!-- First Name -->
        <div class="col">
            <div class="form-outline">
                <input type="text" id="formFirstName" class="form-control" name="name" value="{{$employeeData->user->name}}" />
                <label class="form-label" for="formFirstName"> Name</label>
            </div>
        </div>

        <!-- Middle Name -->

    </div>

    <!-- Address -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="formAddress" class="form-control" name="employee_address" value="{{$employeeData->employee_address}}" />
                <label class="form-label" for="formAddress">Address</label>
            </div>
        </div>
    </div>

    <!-- Email and Password -->
    <div class="row mb-4">
        <!-- Email -->
        <div class="col">
            <div class="form-outline">
                <input type="email" id="formEmail" class="form-control" name="employee_email" value="{{$employeeData->user->email}}" />
                <label class="form-label" for="formEmail">Email</label>
            </div>
        </div>

        <!-- Password (Optional) -->

    </div>

    <!-- Contact -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="formContact" class="form-control" name="employee_contact" value="{{$employeeData->user->contact}}" />
                <label class="form-label" for="formContact">Contact</label>
            </div>
        </div>
    </div>

    <!-- Profile Picture and Certificate -->
    <div class="row mb-4">
        <!-- Profile Picture -->
        <div class="col-md-6">
            <div class="form-outline">
                <input type="file" id="formProfilePicture" class="form-control" name="employee_image" />
                <label class="form-label" for="formProfilePicture">Profile Picture</label>
                @if($employeeData->employee_image)
                <img src="{{ asset('images/employee/profile/' . $employeeData->employee_image) }}" alt="Current Profile Picture" class="img-thumbnail mt-2" style="width: 100px;">
                @endif
            </div>
        </div>

        <!-- Certificate -->
        <div class="col-md-6">
            <div class="form-outline">
                <input type="file" id="formCertificate" class="form-control" name="employee_cv" />
                <label class="form-label" for="formCertificate">Certificate</label>
                @if($employeeData->employee_cv)
                <img src="{{ asset('images/employee/cv/' . $employeeData->employee_cv) }}" alt="Current Certificate" class="img-thumbnail mt-2" style="width: 100px;">
                @endif
            </div>
        </div>
    </div>

    <!-- Employee Description -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <textarea id="formDescription" class="form-control" name="employee_description" rows="4">{{$employeeData->employee_description}}</textarea>
                <label class="form-label" for="formDescription">Employee Description</label>
            </div>
        </div>
    </div>

    <!-- Education -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="formEducation" class="form-control" name="employee_education" value="{{$employeeData->employee_education}}" />
                <label class="form-label" for="formEducation">Education</label>
            </div>
        </div>
    </div>

    <!-- Work Experience -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="formWorkExperience" class="form-control" name="employee_work_experience" value="{{$employeeData->employee_work_experience}}" />
                <label class="form-label" for="formWorkExperience">Work Experience</label>
            </div>
        </div>
    </div>

    <!-- Participation -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="formParticipation" class="form-control" name="employee_participation" value="{{$employeeData->employee_participation}}" />
                <label class="form-label" for="formParticipation">Participation</label>
            </div>
        </div>
    </div>

    <!-- Training -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="formTraining" class="form-control" name="employee_training" value="{{$employeeData->employee_training}}" />
                <label class="form-label" for="formTraining">Training</label>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="row mb-4">
        <div class="col-md-4"></div>
        <button type="submit" class="btn btn-primary mb-4 col-md-4">Save</button>
    </div>
</form>
@endsection