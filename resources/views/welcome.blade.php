@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h3 class="text-center">Laravel Autocomplete Search Box</h3><hr>
                <div class="form-group">
                    <h4>Type by id, name and email!</h4>
                    <input type="text" name="search" id="search" placeholder="Enter search name" class="form-control" onfocus="this.value=''">
                </div>
                <div id="search_list"></div>
            </div>
        <div class="col-lg-3"></div>
    </div>
</div>
@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
<script>
   jQuery(document).ready(function($){
        alert("Hello! I am an alert box!!");
        $('#search').on('keyup',function(){
            alert("Hello! I am an alert box!!");
            var query= $(this).val(); 
            $.ajax({
                url:"search",
                type:"GET",
                data:{'search':query},
                success:function(data){ 
                    alert("Hello! I am an alert box!!");
                    $('#search_list').html(data);
                }
            });
             //end of ajax call
        });
    });
</script>
@endpush