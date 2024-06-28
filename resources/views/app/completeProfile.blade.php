<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-4">

    <h1>Complete your Profile</h1>

    <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" name="employer_company_name" />
                    <label class="form-label" for="form6Example1">Company Name</label>
                </div>
            </div>
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" name="employer_address" />
                    <label class="form-label" for="form6Example2">Address</label>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="form6Example5" class="form-control" name="employer_pan_vat" />
                    <label class="form-label" for="form6Example5">PAN/VAT</label>
                </div>
            </div>
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="url" id="form6Example6" class="form-control" name="company_website" />
                    <label class="form-label" for="form6Example6">Company Website</label>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-3">
                <div data-mdb-input-init class="form-outline">
                    <input type="file" id="form6Example7" class="form-control" name="employer_image" />
                    <label class="form-label" for="form6Example7">Profile Picture</label>
                </div>
            </div>
            <div class="col-md-3">
                <div data-mdb-input-init class="form-outline">
                    <input type="file" id="form6Example8" class="form-control" name="employer_certificate" />
                    <label class="form-label" for="form6Example8">Certificate</label>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="form6Example9" class="form-control" name="employer_contact" />
                    <label class="form-label" for="form6Example9">Contact</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label-title">Employer Description</label>
            <textarea id="form6Example10" class="form-control" name="employer_description"></textarea>
        </div>


        <div class="row mb-4">
            <div class="col-md-4"></div>
            <button data-mdb-ripple-init type="submit" class="btn btn-primary mb-4 col-md-4">Register</button>
        </div>
    </form>

</div>