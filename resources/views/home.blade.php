@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">

            <div class="carousel slide" data-bs-ride="carousel" id = "slide">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class = "bg-dark" style="height: 200px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class = "bg-primary" style="height: 200px"></div>
                    </div>
                    <div class="carousel-item">
                        <div class = "bg-success" style="height: 200px"></div>
                    </div>
                </div>
                <a href="#slide" class="carousel-control-prev" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#slide" class="carousel-control-next" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <br>

            <!--Search Box-->  
            <form method="get" action="{{ route('home.jobsList') }}">
                <div class= "input-group mb-3 mt-3">
                    <input type="search" class="form-control" placeholder="Find jobs here" name="search" >
                    <input type="submit" value="Search" class="btn btn-primary">
                </div>
            </form>

        

            <!--  Ayemon Job List -->
            <!--  Job List -->
            @foreach($jobs as $job)
            <div class = "card mb-3">
                <div class = "card-body">                    
                    <h4 class = "card-title"><b>{{$job['title']}}</b></h4></br>
                    <h5>{{$job['location']}}</h5></br>
                    {!!\Illuminate\Support\Str::limit( $job['description'], 150, $end = '...')!!}
                    <a href="{{ url('jobDetail/getDetail/'.$job->id) }}">more</a>                    
                </div>                    
            </div>
            @endforeach 
            <div class= "btn-group mb-2 mt-3">
                <ul>
                    @foreach($specializations as $specialization)
                    <a href="{{url('home/jobsListwithSpec/'.$specialization->id)}}" class="btn border mb-2" style = "border-radius: 10px; padding: 5px 5px;">
                        {{$specialization['name']}}
                    </a>
                    @endforeach
                </ul>
            </div>
            <!-- 3 Grid Text Box -->     
            <div class="row g-5">
                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class = "border text-center" style="height: 200px; border-radius: 10px;">About Us</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class = "border text-center" style="height: 200px; border-radius: 10px;">About Us</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class = "border text-center" style="height: 200px; border-radius: 10px;">About Us</div>
                </div>                
            </div>
        </div>              
    </div>    
</div>
@endsection
