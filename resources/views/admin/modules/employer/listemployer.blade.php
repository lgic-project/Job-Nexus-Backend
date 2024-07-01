@extends('admin.master')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-6 offset-md-3 text-center">
            <h3>Our Registered Users</h3>
        </div>
        <div class="col-md-3 text-end">
            <a href="/employer/register">
                <button class="btn btn-success">
                    <i class="fa-solid fa-plus"></i> Create New
                </button>
            </a>
        </div>
    </div>

    <table class="table align-middle bg-white">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employerData as $employer)
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/employer/profile/' . $employer->employer_image) }}" alt="Profile Picture" style="width: 45px; height: 45px" class="rounded-circle" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $employer->user->name ?? 'N/A' }}</p>
                            <p class="text-muted mb-0">{{ $employer->user->email ?? 'N/A' }}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $employer->employer_address }}</p>
                    <p class="text-muted mb-0">{{ $employer->user->contact ?? 'N/A' }}</p>
                </td>
                @php
                $color = ($employer->employer_status == 'Inactive' || $employer->employer_status == 'under verification') ? 'danger' : 'success';
                @endphp
                <td>
                    <a href="/employer/verification/{{ $employer->id }}" onclick="return confirmStatusChange('change status')">
                        <span class="badge badge-{{ $color }} rounded-pill d-inline">{{ $employer->employer_status }}</span>
                    </a>
                </td>
                <td>
                    <a href="/employer/edit/{{ $employer->id }}">
                        <button type="button" class="btn btn-primary btn-sm btn-rounded mx-2 px-2">
                            Edit
                        </button>
                    </a>
                    <a href="/employer/delete/{{ $employer->id }}" onclick="return confirmStatusChange('delete')">
                        <button type="button" class="btn btn-danger btn-sm btn-rounded mx-2 px-2">
                            Delete
                        </button>
                    </a>
                    <a href="/employer/profile/{{ $employer->user_id }}">
                        <button type="button" class="btn btn-warning btn-sm btn-rounded mx-2 px-2">
                            Details
                        </button>
                    </a>
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