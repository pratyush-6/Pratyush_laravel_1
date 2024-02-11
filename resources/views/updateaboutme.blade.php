@extends('layoutes.master')
@section('content')
<div class="container">
        <style>
            section {
                display: none;
            }

            .active {
                display: block;
            }

            input {
                height: 36px;
            }


            .error {
                color: rgb(253, 7, 7);
            }

            .pdf {
                margin-left: 475px;
            }
            .cdr{
                height: 54px;
            }
          
        </style>

        <form id="myform" enctype="multipart/form-data">
            @csrf
            <section id="section1" class="active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-success text-center cdr "><h3 class="">Update-About</h3></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for=""> Name</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" value="{{$value->name}}" name="name" placeholder="Course Name">
                        </div>
                        <div class="col-md">
                            <label for="">Image</label><span class="text-danger">*</span><br>
                            <input class="col-12 " name="image" type="file" placeholder="Image">
                           
                        </div>
                        <div class="col-md">
                            <label for="">current image</label><br>
                            <img src="{{asset('about/' . $value->image) }}" class="img" alt="" style="margin-left:-76;  height: 130px;width:333px;">
                        </div>
                        <div class="col-md-6">
                            <label for="">Age</label><span class="text-danger">*</span><br>
                            <input class="col-12" value="{{$value->age}}" type="text" name="age" placeholder="Title">
                        </div>
                        <div class="col-md-6">
                            <label for="">Email</label><span class="text-danger">*</span><br>
                            <input class="col-12" value="{{$value->email}}" type="text" name="email" placeholder="description">
                        </div>
                        <div class="col-md-6">
                            <label for="">phone</label><span class="text-danger">*</span><br>
                            <input class="col-12" value="{{$value->phone}}" type="text" name="phone" placeholder="description">
                        </div>
                        <div class="col-md-6">
                            <label for="">city</label><span class="text-danger">*</span><br>
                            <input class="col-12" value="{{$value->city}}" type="text" name="city" placeholder="description">
                        </div>
                        <div class="col-md-6">
                            <label for="">degree</label><span class="text-danger">*</span><br>
                            <input class="col-12" value="{{$value->degree}}" type="text" name="degree" placeholder="description">
                        </div>
                        
                      
                    </div>
                    <div>
                        <a href="">
                            <button class="pdf btn btn-success mt-4" id="pdf">update</button>
                        </a>
                    </div>

                </div>
            </section>
        </form>

        <script>
            $(document).ready(function() {
                // $.ajaxSetup({
                //         headers: {
                //             'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
                //         }
                //     });
                $("#datepicker").datepicker();
                $("#datepicker2").datepicker();
                $("#myform").validate({
                    rules: {
                        image: {
                            required: true,
                      
                        },
                       

                    },
                    messages: {
                        image: {
                            required: "Please select image",
                           
                        },
                        

                    }

                });
                $('#myform').on('submit', function(e) {

                    e.preventDefault();
                    // var formdata = new FormData(this);

                    $.ajax({
                        url: '{{ route('aboutlistupdate',['id'=>$value->id]) }}',
                        type: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Your Deta has been Saved ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                            $('#myform').trigger('reset');
                            window.location="{{route('aboutme')}}";
                            console.log(response);
                        }
                    });
                });

            });
        </script>
    </div>
@endsection