@extends('admin.master')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-6 offset-md-3 text-center">
            <h3>Posted Jobs</h3>
        </div>
        <div class="col-md-3 text-end">
            <a href="/job">
                <button class="btn btn-success">
                    <i class="fa-solid fa-plus"></i> Create New
                </button>
            </a>
        </div>
    </div>

    <table class="table align-middle bg-white">
        <thead class="bg-light">
            <tr>
                <th>Title</th>
                <th>Address</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobData as $job)
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!-- Employer's Image or Default -->
                        <img src="{{ $job->employer && $job->employer->employer_image ? asset('images/employer/profile/' . $job->employer->employer_image) : asset('images/default-employer.png') }}" alt="Employer Image" style="width: 45px; height: 45px" class="rounded-circle" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $job->job_title }}</p>
                            <p class="text-muted mb-0">{{ $job->job_type }}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $job->job_address }}</p>
                    <p class="text-muted mb-0">{{ $job->job_contact }}</p>
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $job->job_category }}</p>
                </td>
                @php
                $color = ($job->job_status == 'Not Verified') ? 'danger' : 'success';
                @endphp
                <td>
                    <a href="/job/verify/{{ $job->id }}" onclick="return confirmStatusChange('change status')">
                        <span class="badge badge-{{ $color }} rounded-pill d-inline">{{ $job->job_status }}</span>
                    </a>
                </td>
                <td>
                    <a href="/job/edit/{{ $job->id }}">
                        <button type="button" class="btn btn-primary btn-sm btn-rounded mx-2 px-2">
                            Edit
                        </button>
                    </a>
                    <a href="/job/delete/{{ $job->id }}" onclick="return confirmStatusChange('delete')">
                        <button type="button" class="btn btn-danger btn-sm btn-rounded mx-2 px-2">
                            Delete
                        </button>
                    </a>
                    <button type="button" class="btn btn-warning btn-sm btn-rounded mx-2 px-2" data-bs-toggle="modal" data-bs-target="#jobModal{{ $job->id }}">
                        Details
                    </button>

                    <!-- Modal for Job Details -->
                    <div class="modal fade" id="jobModal{{ $job->id }}" tabindex="-1" aria-labelledby="jobModalLabel{{ $job->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="jobModalLabel{{ $job->id }}">Job Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Title</th>
                                                <td>{{ $job->job_title }}</td>
                                            </tr>
                                            <tr>
                                                <th>Category</th>
                                                <td>{{ $job->job_category }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{ $job->job_address }}</td>
                                            </tr>
                                            <tr>
                                                <th>Company Name</th>
                                                <td>{{ $job->job_company_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Experience</th>
                                                <td>{{ $job->job_experience }}</td>
                                            </tr>
                                            <tr>
                                                <th>Salary</th>
                                                <td>{{ $job->job_min_salary }} - {{ $job->job_max_salary }}</td>
                                            </tr>
                                            <tr>
                                                <th>Slug</th>
                                                <td>{{ $job->job_slug }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>{{ $job->job_status }}</td>
                                            </tr>
                                            <tr>
                                                <th>Contact</th>
                                                <td>{{ $job->job_contact }}</td>
                                            </tr>
                                            <tr>
                                                <th>Validity</th>
                                                <td>{{ $job->job_validity }}</td>
                                            </tr>
                                            <tr>
                                                <th>Description</th>
                                                <td>{{ $job->job_description }}</td>
                                            </tr>
                                            <tr>
                                                <th>Type</th>
                                                <td>{{ $job->job_type }}</td>
                                            </tr>
                                            <tr>
                                                <th>Hour</th>
                                                <td>{{ $job->job_hour }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
</div>

<script>
    function confirmStatusChange(action) {
        return confirm(`Are you sure you want to ${action}?`);
    }
</script>
@endsection