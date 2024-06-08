@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h3>New Category</h3>
    </div>
    <div class="col-md-3">
        <a href="/category"><button class="btn btn-danger"><i class="fa-solid fa-list"></i> View List</button></a>

    </div>
</div>
<form method="post" action="{{route('category-save')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class=" row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="text" id="form6Example1" class="form-control" name="category_title" />
                <label class="form-label" for="form6Example1">Category Title</label>
            </div>
        </div>

        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <input type="file" id="form6Example2" class="form-control" name="category_image" />
                <label class="form-label" for="form6Example2">Category_Image</label>
            </div>
        </div>


    </div>

    <!-- Submit button -->
    <div class="row mb-4">
        <div class="col-md-4"></div>
        <button data-mdb-ripple-init type="submit" class="btn btn-primary  mb-4 col-md-4">Register</button>
    </div>
</form>
@endsection