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
                            <div class="bg-success text-center cdr "><h3 class="">Add-Course</h3></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Course Name</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="name" placeholder="Course Name">
                        </div>
                        <div class="col-md-6">
                            <label for="">Image</label><span class="text-danger">*</span><br>
                            <input class="col-12 " name="image" type="file" placeholder="Image">
                        </div>
                        <div class="col-md-6">
                            <label for="">Title</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="title" placeholder="Title">
                        </div>
                        <div class="col-md-6">
                            <label for="">description</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="description" placeholder="description">
                        </div>
                        <div class="col-md-6">
                            <label for="">Course-Type</label><span class="text-danger">*</span><br>
                            <select class="col-12" type="text" name="coursetype" id="" style=" height:36px;">

                                <option>select</option>
                                <option value="app">App</option>
                                <option value="web">web</option>
                                <option value="ios">IOS</option>
                                {{-- <option value="3">government Job</option> --}}
                            </select>

                        </div>
                    </div>
                    <div>
                        <a href="{{ route('addcourse') }}">
                            <button class="pdf btn btn-success mt-4" id="pdf">submit</button>
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
                        name: {
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
                        name: {
                            required: "Please enter your name",
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
                        url: '{{ route('addcourse') }}',
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
                            window.location="{{route('courselist')}}";
                            console.log(response);
                        }
                    });
                });

            });
        </script>
    </div>
@endsection
