<!doctype html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <title>Employer</title>        
    </head>
    <body>        
        @extends('layouts.app')
        @section('content')
        <div class="container">
        <h3>Add Employer</h3>
            <form action="{{ url('/employer/add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label>Organization Name</label>
                    <input type="text" name="orgname" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Phone Number</label>
                    <input type="text" name="phoneNo" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="image">Logo</label>
                    <input type="file" name="imgPath" id="image" class="form-control" required><br>                    
                </div>
                
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>
        @endsection
    </body>
</html>