@extends('admin.master')

@section('content')
<table class="table align-middle mb-0 bg-white">
    <h3 style="text-align: center;">Our Registered Users</h3>
    <thead class="bg-light">
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employeeData as $employee)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">{{$employee->employee_first_name}}</p>
                        <p class="text-muted mb-0">{{$employee->employee_email}}</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">{{$employee->employee_address}}</p>
                <p class="text-muted mb-0">{{$employee->employee_contact}}</p>
            </td>
            <td>
                <span class="badge badge-success rounded-pill d-inline ">Active</span>
            </td>
            <td>
                <button type="button" class="btn btn-primary btn-sm btn-rounded ">
                    Edit
                </button>
                <button type="button" class="btn btn-danger btn-sm btn-rounded">
                    Delete
                </button>
                <button type="button" class="btn btn-successbtn-sm btn-rounded">
                    Details
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection