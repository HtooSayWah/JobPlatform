@extends('layouts.app')
@section('content')
@push('style')
@endpush
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Results: found {{count($jobs)}} jobs</div>
                 <div class="card-body">
                
                 @foreach($jobs as $job)
                    <div class = "card mb-3">
                        
                        <div class = "card-body">
                            
                            <h4 class = "card-title"><b>{{$job['title']}}</b></h4></br>
                            <h5>{{$job['location']}}</h5></br>
                            {!! $job['description']!!}
                            <a href="{{ url('jobDetail/getDetail/'.$job->id) }}">more</a>
                            
                        </div>  
                                    
                    </div>
                    @endforeach 
                    <center class="mt-5">
                        {{  $jobs->withQueryString()->links() }}
                    </center>
                </div>
            </div>
        </div> 
    </div>
@push('scripts')

@endpush
@endsection 