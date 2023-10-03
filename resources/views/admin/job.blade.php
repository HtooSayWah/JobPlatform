@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{ route('postJob.create') }}">  
            @csrf          
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control"> 
            </div> 
            <div class="mb-3">
                <label>Description</label>
                <input type="text" name="description" class="form-control"> 
            </div>
            <div class="mb-3">
                <select class="form-select" name="specializaion_id">
                    @foreach ($specs as $spec)
                        <option value="{{ $spec->id }}">
                        {{ $spec->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- location -->
            <div class="mb-3">
                <label>Location</label>
                <input type="text" name="location" class="form-control"> 
            </div>
            <!-- salary -->
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" name="salary" class="form-control"> 
            </div>
            <!-- responsibility -->
            <div class="mb-3">
                <label>Responsibility</label>
                <input type="text" name="responsibility" class="form-control"> 
            </div>
            <!-- requirement -->
            <div class="mb-3">
                <label>Requirement</label>
                <input type="text" name="requirement" class="form-control"> 
            </div>
            <br>       
            <input type="submit" value="Post Job" 
            class="btn btn-primary">
        </form>
    </div>
@endsection