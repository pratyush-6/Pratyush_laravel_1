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
    </style>

    <form id="myform" enctype="multipart/form-data">
        @csrf
   
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="bg-success text-center">Add-banner</h3>
                    </div>
                </div>
                <div class="row">
                  
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
                  
                </div>
                <div>
                    <a href="">
                        <button class="pdf btn btn-success mt-4" id="pdf">submit</button>
                    </a>
                </div>

            </div>
      
    </form>
</div>
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
           

            },
            messages: {
                name: {
                    required: "Please enter Banner name",
                    minlength: "Name must be at least 2 characters long"
                },
                title: {
                    required: "Please enter title of banner",
                    minlength: "Last name must be at least 2 characters long"
                },
                description: {
                    required: "Please enter description of banner",
                    minlength: "Last name must be at least 2 characters long"
                },
             

            }

        });
        $('#myform').on('submit', function(e) {

            e.preventDefault();
            // var formdata = new FormData(this);

            $.ajax({
                url: '{{route('addbanner')}}',
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
                    window.location="{{route('bannerlist')}}";
                    console.log(response);
                }
            });
        });

    });
</script>
@endsection