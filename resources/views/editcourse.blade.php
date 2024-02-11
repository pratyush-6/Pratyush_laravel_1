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
            .error {
                color: rgb(253, 7, 7);
            }
</style>
{{-- action="{{route('updatecourse', ['id'=>$value->id])}}" method="POST" --}}
<form id="myform" >

    @csrf
<section id="section1" class="active">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="bg-success text-center">update-Course</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Course Name</label><span class="text-danger">*</span><br>
                <input class="col-12" type="text" value="{{$value->name}}" name="name" placeholder="Course Name">
            </div>
            <div class="col-md ">
                <label for="">Image</label><span class="text-danger">*</span><br>
                <input class="col-12 row" name="image" type="file" placeholder="Image">
             
            </div>
            <div class="col-md ">
                <label for="">Current-img</label><span class="text-danger">*</span><br>
                
                <img src=" {{ asset('uploads/' . $value->image) }}" alt=""
                                                    class="img row">
            </div>
            <div class="col-md-6">
                <label for="">Title</label><span class="text-danger">*</span><br>
                <input class="col-12" type="text" value="{{$value->title}}" name="title" placeholder="Title">
            </div>
            <div class="col-md-6">
                <label for="">description</label><span class="text-danger">*</span><br>
                <input class="col-12" type="text" value="{{$value->description}}" name="description" placeholder="description">
            </div>
            <div class="col-md-6">
                <label for="">Course-Type</label><span class="text-danger">*</span><br>
                <select class="col-12" type="text" value="{{$value->coursetype}}" name="coursetype" id="" style=" height:36px;">

                    <option >{{$value->coursetype}}</option>
                    <option value="App">App</option>
                    <option value="web">web</option>
                    <option value="open source">open-source</option>
                    {{-- <option value="3">government Job</option> --}}
                </select>

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
        $("#myform").validate({
                    rules: {
                        image: {
                            required: true,
                            minlength: 2
                        },
                        title: {
                            required: true,
                            minlength: 2
                        },
                        description: {
                            required: true,
                            minlength: 2
                        },
                        coursetype: {
                            required: true,

                        }

                    },
                    messages: {
                        image: {
                            required: "Please select image",
                            minlength: "Name must be at least 2 characters long"
                        },
                        title: {
                            required: "Please enter your last name",
                            minlength: "Last name must be at least 2 characters long"
                        },
                        description: {
                            required: "Please enter your email address",
                            minlength: "Last name must be at least 2 characters long"
                        },
                        coursetype: {
                            required: "Please enter your email address",

                        },

                    }

                });
      
        $('#myform').on('submit', function(e) {           
            e.preventDefault();
            // var formdata = new FormData(this);
            $.ajax({
                url: '{{route('updatecourse', ['id'=>$value->id])}}',
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
                            timer: 3000
                        })
                    $('#myform').trigger('reset');
                    window.location="{{route('courselist')}}";
                    console.log(response);
                }
            });
        });

    });
</script>
     

    
@endsection