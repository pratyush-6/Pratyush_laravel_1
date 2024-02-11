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

            .img {
                height: 167px;
                width: 307px;
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

                    <div class="col-md">
                        <label for="">Image</label><span class="text-danger">*</span><br>
                        <input class="col-12 "  name="image" type="file" placeholder="Image">
                    </div>
                    <div class="col-md">
                        <label for="">Current Image</label><span class="text-danger">*</span><br>
                        <img src="{{ asset('banner/' . $value->image) }}" class="img" alt="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Title</label><span class="text-danger">*</span><br>
                        <input class="col-12" type="text" value="{{ $value->title }}" name="title" placeholder="Title">
                    </div>
                    <div class="col-md-6">
                        <label for="">description</label><span class="text-danger">*</span><br>
                        <input class="col-12" type="text" value="{{ $value->description }}" name="description"
                            placeholder="description">
                    </div>
                </div>
                <div>
                    <a href="">
                        <button class="pdf btn btn-success mt-4" id="pdf">update</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $("#myform").validate({
            rules: {
                image: {
                    required: true,
                   
                }
               
           

            },
            messages: {
                image: {
                    required: "Please upload New banner",
                   
                }
            }

        });

            $('#myform').on('submit', function(e) {

                e.preventDefault();
                // var formdata = new FormData(this);

                $.ajax({
                    url: '{{ route('updatebanner', ['id' => $value->id]) }}',
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

                        // swal("Click on either the button or outside the modal.")
                        //     .then((value) => {
                        //         swal(`The returned value is: ${value}`);
                        //     });
                        console.log(response);
                        window.location = "{{ route('bannerlist') }}";
                    }
                });
            });

        });
    </script>
@endsection
