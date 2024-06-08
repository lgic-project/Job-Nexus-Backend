@extends('app.master')

@section('content')
<table class="table align-middle mb-0 bg-white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <h3 style="text-align: center;">Posted Jobs</h3>
        </div>
        <div class="col-md-3">
            <a href="/app/job"><button class="btn btn-success"><i class="fa-solid fa-plus"></i> Create New</button></a>
        </div>
    </div>
    <thead class="bg-light">
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Address</th>
            <th>Company</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jobData as $jobData)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">{{$jobData->job_title}}</p>
                        <p class="text-muted mb-0">{{$jobData->job_type}}</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">{{$jobData->job_address}}</p>
                <p class="text-muted mb-0">{{$jobData->job_contact}}</p>
            </td>

            <td>
                <p class="fw-normal mb-1">{{$jobData->job_contact}}</p>
            </td>
            @if($jobData->job_status == 'Not Verified')
            <?php $color = 'danger'; ?>

            @else
            <?php $color = 'success'; ?>
            @endif
            <td>
                <a href="/app/job/verify/{{$jobData->id}}" onclick="return confirmStatusChange('change status')">
                    <span class="badge badge-{{$color}} rounded-pill d-inline">{{$jobData->job_status}}</span>
                </a>
            </td>

            <script>
                function confirmStatusChange(a) {
                    return confirm("Are you sure you want to" + " " + a + "?");
                }
            </script>


            <td>
                <a href="/app/job/edit/{{$jobData->id}}">
                    <button type="button" class="btn btn-primary btn-sm btn-rounded mx-2 px-2 ">
                        Edit
                    </button>
                </a>
                <a href="/app/job/delete/{{$jobData->id}}">

                    <button type="button" class="btn btn-danger btn-sm btn-rounded mx-2 px-2" onclick="return confirmStatusChange('delete')">
                        Delete
                    </button>
                </a>


                <button type="button" class="btn btn-warning btn-sm btn-rounded mx-2 px-2" data-bs-toggle="modal" data-bs-target="#resumeModal">
                    Details
                </button>

                <div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Job Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">

                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Title</th>
                                                <td>{{ $jobData->job_title }}</td>
                                            </tr>
                                            <tr>
                                                <th>Category</th>
                                                <td>{{ $jobData->job_category }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{ $jobData->job_address }}</td>
                                            </tr>
                                            <tr>
                                                <th>Company Name</th>
                                                <td>{{ $jobData->job_company_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Experience</th>
                                                <td>{{ $jobData->job_experience }}</td>
                                            </tr>
                                            <tr>
                                                <th>Salary</th>
                                                <td>{{ $jobData->job_min_salary }} - {{ $jobData->job_max_salary }}</td>
                                            </tr>
                                            <tr>
                                                <th>Slug</th>
                                                <td>{{ $jobData->job_slug }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>{{ $jobData->job_status }}</td>
                                            </tr>
                                            <tr>
                                                <th>Contact</th>
                                                <td>{{ $jobData->job_contact }}</td>
                                            </tr>
                                            <tr>
                                                <th>Validity</th>
                                                <td>{{ $jobData->job_validity }}</td>
                                            </tr>
                                            <tr>
                                                <th>Description</th>
                                                <td>{{ $jobData->job_description }}</td>
                                            </tr>
                                            <tr>
                                                <th>Type</th>
                                                <td>{{ $jobData->job_type }}</td>
                                            </tr>
                                            <tr>
                                                <th>Hour</th>
                                                <td>{{ $jobData->job_hour }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection