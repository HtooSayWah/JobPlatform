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
            <!-- Description -->
            <div class="form-group">
                <label>Description</label>
                <textarea class="tinymce-editor" name="description"></textarea>
            </div>
            
            <div class="mb-3">
                <label>Specialization</label>
                <select class="form-select" name="specializaion_id">
                    @foreach ($specs as $spec)
                        <option value="{{ $spec->id }}">
                        {{ $spec->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Employer</label>
                <select class="form-select" name="employer_id">
                    @foreach ($emps as $emp)
                        <option value="{{ $emp->id }}">
                        {{ $emp->name }}
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
            <div class="form-group">
                <label>Responsibility</label>
                <textarea class="tinymce-editor" name="responsibility"></textarea>
            </div>
            <!-- requirement -->
            <div class="form-group">
                <label>Requirement</label>
                <textarea class="tinymce-editor" name="requirement"></textarea>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/111vze4uzh9c24ufu4jpbq740gjshycd80v9f1mc6ao95e7w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
    });
  </script>
@endpush
@endsection