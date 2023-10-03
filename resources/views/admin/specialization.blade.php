@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{ route('specialization.create') }}">  
            @csrf          
            <div class="mb-3">
                <label>Name</label>
            <input type="text" name="name" class="form-control">  
            <br>       
            <input type="submit" value="Add Specialization" 
            class="btn btn-primary">
        </form>
    </div>
@endsection