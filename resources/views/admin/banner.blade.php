<!doctype html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <title>Banner</title>        
    </head>
    <body>        
        @extends('layouts.app')
        @section('content')
        <div class="container">
        <h3>Add Banner</h3>
            <form action="{{ url('/banner/add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                
                <div class="form-group mb-3">
                    <label for="image">Banner Image</label>
                    <input type="file" name="imgPath" id="image" class="form-control" required><br>                    
                </div>
                
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>
        @endsection
    </body>
</html>