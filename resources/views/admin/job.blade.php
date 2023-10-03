@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{ route('specialization.create') }}">  
            @csrf          
            <div class="mb-3">
                <label>Title</label>
            <input type="text" name="title" class="form-control">  
            <br>       
            <input type="submit" value="Post Job" 
            class="btn btn-primary">
        </form>
    </div>
@endsection