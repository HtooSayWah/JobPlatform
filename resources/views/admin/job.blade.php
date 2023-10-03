@extends('layouts.app')
@section('content')
@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
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
            <div class="mb-3">
                <label class="col-sm-3 col-form-label">Job Type</label>
                <div class="col-sm-9">
                    <input type="radio" name="type" value="Full Time"> Full Time
                    <input type="radio" name="type" value="Part Time"> Part Time
                </div>
            </div>
            <div class="mb-3">
                <label for="join">{{ __('Closing Date') }}</label>
                <input type="datetime-local" class="form-control" name="closing_date">
            </div>             
            <br>      
            <input type="submit" value="Post Job" 
            class="btn btn-primary">
        </form>
    </div>
    @push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    config = {
        enableTime: true,
        dateFormat: 'Y-m-d H:i',
    }
    flatpickr("input[type=datetime-local]", config);
</script>
@endpush
@endsection