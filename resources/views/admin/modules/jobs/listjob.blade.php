@extends('admin.master')

@section('content')
<table class="table align-middle mb-0 bg-white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <h3 style="text-align: center;">Posted Jobs</h3>
        </div>
        <div class="col-md-3">
            <a href="/job"><button class="btn btn-success"><i class="fa-solid fa-plus"></i> Create New</button></a>
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
                <a href="/jobData/verification/{{$jobData->id}}" onclick="return confirmStatusChange('change status')">
                    <span class="badge badge-{{$color}} rounded-pill d-inline">{{$jobData->job_status}}</span>
                </a>
            </td>

            <script>
                function confirmStatusChange(a) {
                    return confirm("Are you sure you want to" + " " + a + "?");
                }
            </script>


            <td>
                <a href="/job/edit/{{$jobData->id}}">
                    <button type="button" class="btn btn-primary btn-sm btn-rounded mx-2 px-2 ">
                        Edit
                    </button>
                </a>
                <a href="/job/delete/{{$jobData->id}}">

                    <button type="button" class="btn btn-danger btn-sm btn-rounded mx-2 px-2" onclick="return confirmStatusChange('delete')">
                        Delete
                    </button>
                </a>
                <a href="/job/profile/{{$jobData->id}}">

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