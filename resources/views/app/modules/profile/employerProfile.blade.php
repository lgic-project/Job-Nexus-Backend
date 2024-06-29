@extends('app.master')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Employer Profile</h2>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Company Information</h4>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4 text-center">
                    @if($employerData->employer_image)
                    <img src="{{asset('images/employer/profile/' . $employerData->employer_image) }}" alt="Company Image" class="img-thumbnail mb-3" width="150">
                    @else
                    <img src="https://via.placeholder.com/150" alt="No Image" class="img-thumbnail mb-3" width="150">
                    @endif
                </div>
                <div class="col-md-8">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th>Company Name</th>
                                <td>{{ $employerData->employer_company_name }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $employerData->employer_address }}</td>
                            </tr>
                            <tr>
                                <th>PAN/VAT</th>
                                <td>{{ $employerData->employer_pan_vat }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $employerData->employer_description }}</td>
                            </tr>
                            <tr>
                                <th>Company Website</th>
                                <td>
                                    @if($employerData->company_website)
                                    <a href="{{ $employerData->company_website }}" target="_blank">{{ $employerData->company_website }}</a>
                                    @else
                                    N/A
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Certificate</th>
                                <td>
                                    @if($employerData->employer_certificate)
                                    <a href="{{ asset('images/employer/certificate/' . $employerData->employer_certificate) }}" target="_blank">View Certificate</a>
                                    @else
                                    N/A
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="card-title mb-0">User Information</h4>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $employerData->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $employerData->user->email }}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{ $employerData->user->contact }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/app/employer/edit/{}" class="btn btn-primary"><i class="fa fa-edit"></i> Update Profile</a>
    </div>
</div>
@endsection