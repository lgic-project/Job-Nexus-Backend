@extends('app.master')

@section('content')
<table class="table align-middle mb-0 bg-white">
    <div class="row mb-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 style="text-align: center;">Posted Jobs</h3>
        </div>
        <div class="col-md-3 text-end">
            <a href="/job"><button class="btn btn-success"><i class="fa-solid fa-plus"></i> Create New</button></a>
        </div>
    </div>
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
                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
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
            <td>
                <?php $color = $job->job_status == 'Not Verified' ? 'danger' : 'success'; ?>
                <a href="#" onclick="return confirmStatusChangeApp('change status')">
                    <span class="badge bg-{{ $color }} rounded-pill d-inline">{{ $job->job_status }}</span>
                </a>
            </td>
            <script>
                function confirmStatusChangeApp(a) {
                    return alert("Only Super Admin can modify this status");
                }
            </script>
            <td>
                <a href="/app/job/edit/{{ $job->id }}">
                    <button type="button" class="btn btn-primary btn-sm btn-rounded mx-2 px-2">
                        Edit
                    </button>
                </a>
                <a href="/job/delete/{{ $job->id }}">
                    <button type="button" class="btn btn-danger btn-sm btn-rounded mx-2 px-2" onclick="return confirmStatusChange('delete')">
                        Delete
                    </button>
                </a>
                <button type="button" class="btn btn-warning btn-sm btn-rounded mx-2 px-2" data-bs-toggle="modal" data-bs-target="#resumeModal{{ $job->id }}">
                    Details
                </button>

                <!-- Modal -->
                <div class="modal fade" id="resumeModal{{ $job->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $job->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel{{ $job->id }}">Job Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
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
                                                <th>Type</th>
                                                <td>{{ $job->job_type }}</td>
                                            </tr>
                                            <tr>
                                                <th>Hour</th>
                                                <td>{{ $job->job_hour }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- Accordion for Description -->
                                    <div class="accordion" id="jobDescriptionAccordion{{ $job->id }}">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne{{ $job->id }}">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $job->id }}" aria-expanded="false" aria-controls="collapseOne{{ $job->id }}">
                                                    Job Description
                                                </button>
                                            </h2>
                                            <div id="collapseOne{{ $job->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne{{ $job->id }}" data-bs-parent="#jobDescriptionAccordion{{ $job->id }}">
                                                <div class="accordion-body overflow-auto">
                                                    {{ $job->job_description }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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

<!-- Add custom CSS for word wrap and overflow -->
<style>
    .accordion-body {
        white-space: pre-wrap;
        /* Preserve white space and wrap long text */
        word-wrap: break-word;
        /* Break words if they are too long */
        overflow-wrap: break-word;
        /* Handle word breaking */
        max-height: 300px;
        /* Set a max height for the description */
    }
</style>
@endsection