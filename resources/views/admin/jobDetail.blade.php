<!doctype html>
<html lang = "en" dir = "ltr">
    <head>
        <meta  charset = "utf-8">
        <title>Job Details</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class = "col-md-9">  
                    <div class = "card mb-3">
                        <div class = "card-header">
                            <div class = "row">
                                <div class = "col-md-9">
                                    <b>
                                    <h4>{{$jobDetails['title']}}</h4>
                                    <h5>{{$jobDetails['location']}}</h5></br>
                                    <h5>{{$jobDetails['salary']}}</h5></br>                        
                                    <h5>Closing Date - {{$jobDetails['closing_date']}}</h5>
                                    </b>
                                </div>
                                                    
                                <div class = "col-md-2">
                                    <div class = "row mb-2">
                                        <img src="{{ Storage::url($employer->imgPath) }}" alt="{{ $employer->orgname }}">
                                    </div>
                                    <div class = "row">
                                        <button class = "btn btn-primary">Apply Now</button>
                                    </div>
                                </div>              
                            </div>
                        </div>
                        <div class = "card-body">                    
                            <h4>Job Description</h4>
                            {!! $jobDetails['description']!!}
                            <h4>Responsibilities</h4>
                            {!! $jobDetails['responsibility']!!}
                            <h4>Basic Requirements</h4>
                            {!! $jobDetails['requirement']!!}               
                        </div>                    
                    </div>
                </div>            
            </div>            
        </div>
        @endsection
    </body>
</html>