@extends('admin.master')

@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$employeeData->user->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/employee/profile/' . $employeeData->employee_image) }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{$employeeData->user->name}}</h5>
                        <p class="text-muted mb-4">{{$employeeData->employee_address}}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#resumeModal">
                                View Resume
                            </button>
                            <div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="resumeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="resumeModalLabel">Employee Resume</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/employee/cv/' . $employeeData->employee_cv) }}" alt="Employee cv" class="img-fluid">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="/employee/verification/{{$employeeData->id}}"> <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">{{$employeeData->employee_status}}</button></a>
                        </div>
                    </div>
                </div>

                <!-- Social Links Card -->
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            @if($employeeData->employee_fb_link)
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                <a href="{{ $employeeData->employee_fb_link }}" target="_blank" class="mb-0">{{ $employeeData->employee_fb_link }}</a>
                            </li>
                            @endif
                            @if($employeeData->employee_linkedin_link)
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-linkedin fa-lg" style="color: #0077b5;"></i>
                                <a href="{{ $employeeData->employee_linkedin_link }}" target="_blank" class="mb-0">{{ $employeeData->employee_linkedin_link }}</a>
                            </li>
                            @endif
                            <!-- Add other social links here -->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <!-- Full Name -->
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->user->name}}</p>
                            </div>
                        </div>
                        <hr>

                        <!-- Email -->
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->user->email}}</p>
                            </div>
                        </div>
                        <hr>

                        <!-- Phone -->
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->user->contact}}</p>
                            </div>
                        </div>
                        <hr>

                        <!-- Address -->
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->employee_address}}</p>
                            </div>
                        </div>
                        <hr>

                        <!-- Education -->
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Education</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->employee_education}}</p>
                            </div>
                        </div>
                        <hr>

                        <!-- Work Experience -->
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Work Experience</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->employee_work_experience}}</p>
                            </div>
                        </div>
                        <hr>

                        <!-- Participation -->
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Participation</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->employee_participation}}</p>
                            </div>
                        </div>
                        <hr>

                        <!-- Training -->
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Training</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->employee_training}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h4 style="text-align: center; margin-bottom: 2rem;">Employee Description</h4>
                    <div class="card-body col-md-12" style="text-align:justify">
                        <p>{{$employeeData->employee_description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection