@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>                
            </div> -->
            <!-- Carousel-->
            <div class="carousel slide" data-bs-ride="carousel" id = "slide">
            <!-- <ul class="carousel-indicators">
                <li data-bs-target="#slide" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#slide" data-bs-slide-to="1"></li>
                <li data-bs-target="#slide" data-bs-slide-to="2"></li>
            </ul> -->
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
            <!--Search Box-->  
            <div class= "input-group mb-3 mt-3">
                <input type="text" name="searchtext" class="form-control">
                <button class = "btn btn-primary">Search</button>
            </div>
            <!-- Specialization List -->
            <div class= "btn-group mb-2 mt-3">
                <ul>
                    @foreach($specializations as $specialization)
                    <a href="#" class="btn border mb-2" style = "border-radius: 10px; padding: 5px 5px;">
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
