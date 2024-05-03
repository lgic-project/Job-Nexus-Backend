@extends('admin.master')

@section('content')
<table class="table align-middle mb-0 bg-white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <h3 style="text-align: center;">Our Registered Users</h3>
                </div>
                <div class="col-md-3">
                    <a href="/employee/register"><button class="btn btn-success"><i class="fa-solid fa-plus"></i> Create New</button></a>
                </div>
            </div>
        </div>

    </div>
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
            @if($employee->employee_status == 'Inactive')
            <?php $color = 'danger'; ?>
            @elseif($employee->employee_status == 'under verification')
            <?php $color = 'danger'; ?>
            @else
            <?php $color = 'success'; ?>
            @endif
            <td>
                <a href="/employee/verification/{{$employee->id}}" onclick="return confirmStatusChange('change status')">
                    <span class="badge badge-{{$color}} rounded-pill d-inline">{{$employee->employee_status}}</span>
                </a>
            </td>

            <script>
                function confirmStatusChange(a) {
                    return confirm("Are you sure you want to" + " " + a + "?");
                }
            </script>
            <td>
                <a href="/employee/edit/{{$employee->id}}">
                    <button type="button" class="btn btn-primary btn-sm btn-rounded mx-2 px-2 ">
                        Edit
                    </button>
                </a>
                <a href="/employee/delete/{{$employee->id}}">

                    <button type="button" class="btn btn-danger btn-sm btn-rounded mx-2 px-2" onclick="return confirmStatusChange('delete')">
                        Delete
                    </button>
                </a>
                <a href="/employee/profile/{{$employee->id}}">

                    <button type="button" class="btn btn-warning btn-sm btn-rounded mx-2 px-2">
                        Details
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection