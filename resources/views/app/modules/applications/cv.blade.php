@extends('app.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <!-- Employee Image -->
            @if($employee->employee_image)
            <div class="text-center mb-4">
                <img src="{{ asset('images/employee/profile/' . $employee->employee_image) }}" class="rounded-circle img-thumbnail" alt="Employee Image" width="150" height="150">
            </div>
            @endif

            <h2 class="text-center">CV of {{ $user->name }}</h2>

            <!-- Personal Information -->
            <h4 class="mt-4">Personal Information</h4>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Contact:</strong> {{ $user->contact }}</p>

            <!-- Employee Details -->
            <h4 class="mt-4">Employee Details</h4>
            <p><strong>Address:</strong> {{ $employee->employee_address }}</p>
            <p><strong>Description:</strong> {{ $employee->employee_description }}</p>
            <p><strong>Education:</strong> {!! nl2br(e($employee->employee_education)) !!}</p>
            <p><strong>Work Experience:</strong> {!! nl2br(e($employee->employee_work_experience)) !!}</p>
            <p><strong>Training:</strong> {!! nl2br(e($employee->employee_training)) !!}</p>
            <p><strong>LinkedIn:</strong> <a href="{{ $employee->employee_linkedin_link }}" target="_blank">{{ $employee->employee_linkedin_link }}</a></p>
            <p><strong>Facebook:</strong> <a href="{{ $employee->employee_fb_link }}" target="_blank">{{ $employee->employee_fb_link }}</a></p>

            <!-- Accept/Reject Buttons -->
            <div class="mt-4 text-center">

                <a href="/job-applications/{{$user->id}}/accept"> <button type="submit" class="btn btn-success">Accept</button></a>
                <a href="/job-applications/{{$user->id}}/reject"> <button type="submit" class="btn btn-danger">Reject</button></a>
                <a href="/app/job/list"> <button type="submit" class="btn btn-primary"> Back </button></a>

            </div>
        </div>
    </div>
</div>
@endsection