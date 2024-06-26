@extends('admin.master')

@section('content')
<div class="container">
    <h2>Register Employer</h2>
    <form action="{{route('register-employer')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" {{ isset($user) ? '' : 'required' }}>
            @if(isset($user))
            <small class="form-text text-muted">Leave blank if you don't want to change the password.</small>
            @endif
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" name="role" id="role" class="form-control" value="{{ old('role', $user->role ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact', $user->contact ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Next</button>
    </form>
</div>
@endsection