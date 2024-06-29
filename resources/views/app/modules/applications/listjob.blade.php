@extends('app.master')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Applications for <strong>{{ $job->job_title }}</strong></h2>

    @if($applications->isEmpty())
    <div class="alert alert-warning" role="alert">
        No applications found for this job.
    </div>
    @else
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Applicant Name</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applications as $application)
                <tr>
                    <td>{{ $application->applicant->name }}</td>
                    <td>
                        @if($application->applicant_status == 'pending')
                        <span class="badge bg-warning text-dark">{{ ucfirst($application->applicant_status) }}</span>
                        @elseif($application->applicant_status == 'accepted')
                        <span class="badge bg-success">{{ ucfirst($application->applicant_status) }}</span>
                        @elseif($application->applicant_status == 'rejected')
                        <span class="badge bg-danger">{{ ucfirst($application->applicant_status) }}</span>
                        @else
                        <span class="badge bg-secondary">{{ ucfirst($application->applicant_status) }}</span>
                        @endif
                    </td>
                    <td>{{ $application->applicant_description }}</td>
                    <td>
                        <a href="{{ route('view-cv', ['user_id' => $application->applicant->id]) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-file-alt"></i> View CV
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection