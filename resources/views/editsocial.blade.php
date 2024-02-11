@extends('layoutes.master')
@section('content')
<style>
    .img {
        height: 60px;
        width: 60px;
    }
    input {
                height: 36px;
            }
</style>
{{-- action="{{route('updatecourse', ['id'=>$value->id])}}" method="POST" --}}
<form id="myform" >

    @csrf
<section id="section1" class="active">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="bg-success text-center">update-social-media</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Name</label><span class="text-danger">*</span><br>
                <input class="col-12" type="text" value="{{$value->name}}" name="name" placeholder="Course Name">
            </div>        
            <div class="col-md-6">
                <label for="">Link</label><span class="text-danger">*</span><br>
                <input class="col-12" type="text" value="{{$value->link}}" name="link" placeholder="Title">
            </div>
            <div class="col-md-6">
                <label for="">class</label><span class="text-danger">*</span><br>
                <input class="col-12" type="text" value="{{$value->class}}" name="class" placeholder="description">
            </div>
         
        </div>
        <div >
           
                <button class="pdf btn btn-success mt-4" id="pdf" 
                style="margin-left: 450px;">update</button>
            
        </div>

    </div>
</section>
</form>
<script>
    $(document).ready(function() {
      
        $('#myform').on('submit', function(e) {           
            e.preventDefault();
            // var formdata = new FormData(this);
            $.ajax({
                url: '{{route('updatesocial', ['id'=>$value->id])}}',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Your Deta has been Updated ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    $('#myform').trigger('reset');
                    window.location="{{route('addsocial')}}";
                    console.log(response);
                }
            });
        });

    });
</script>
    
@endsection