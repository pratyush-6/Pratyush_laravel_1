@extends('layoutes.master')
@section('content')
    <div class="container">
        <style>
            section {
                display: ;
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

        <form action="" id="myform">

            <section id="section1" class="active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="bg-success text-center">Registration -form</h3>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name</label><span class="text-danger">*</span><br>
                            <input class="col-12 " name="name" type="text" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="lastname" placeholder="Last name">
                        </div>
                        <div class="col-md-6">
                            <label for="">Email</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <label for="">Mobile</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="mobile" placeholder="Mobile">
                        </div>
                        <div class="col-md-6">
                            <label for="">Age</label><span class="text-danger">*</span><br>

                            <input class="col-12" type="number" name="age" id="age" name="age" min="0"
                                max="150" placeholder="Age">
                        </div>
                        <div class="col-md-6 d-flex">
                            <label for="">Gender</label><br>
                            <div class="row">
                                <label class="mt-4">
                                    <input type="radio" name="gender" value="male">
                                    Male
                                </label>
                                <br>
                                <label class="mt-4 ml-5">
                                    <input type="radio" name="gender" value="female">
                                    Female
                                </label>
                                <br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Occupation</label><span class="text-danger">*</span><br>
                            <select class="col-12" name="occupation" id="" style=" height:36px;">

                                <option>select</option>
                                <option value="0">self-Employed</option>
                                <option value="1">Farmer</option>
                                <option value="2">private Job</option>
                                <option value="3">government Job</option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <label for="">Annual Income</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="annualincome" placeholder="Annual Income">
                        </div>
                        <div class="col-md-6">
                            <label for="">Mother's Name</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="mothername" placeholder="Mother's Name">
                        </div>
                        <div class="col-md-6">
                            <label for="">Father's/Husband Name</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="fathername" placeholder="Father's/Husband">
                        </div>
                        <div class="col-md-6">
                            <label for="">Maritial status</label><span class="text-danger">*</span><br>

                            <select class="col-12" name="" id="" name="maritial " style="height: 36px;">
                                <option value="0">Un-Married</option>
                                <option value="1">Married</option>
                                <option value="2">divorced</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Anniversary Date</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" id="datepicker" name="anniversary"
                                placeholder="Anniversary Date">
                        </div>
                        <div class="col-md-6">
                            <label for="">Religion</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="religion" placeholder="Religion">
                        </div>
                        <div class="col-md-6">
                            <label for="">Category</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="text" name="category" placeholder="Category">
                        </div>
                    </div>

                </div>
            </section>


            <section id="section2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="bg-success text-center">Bank||Details</h3>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Profile Photo</label><span class="text-danger">*</span><br>
                            <input class="col-12 " type="file" name="profilepic" placeholder="Profile Photo">
                        </div>
                        <div class="col-md-6">
                            <label for="">Aadhar Card </label><span class="text-danger">*</span><br>
                            <input class="col-12" type="file" name="aadharcard" placeholder="Aadhar Card ">
                        </div>
                        <div class="col-md-6">
                            <label for="">Signature</label><span class="text-danger">*</span><br>
                            <input class="col-12" type="file" name="signature" placeholder="Signature">
                        </div>


                    </div>
                    <div class=" d-flex justify-content-between">

                        <button class=" mt-4  btn btn-success pdf">Submit</button>

                    </div>

                </div>
            </section>

        </form>
        <nav>
            <ul class="d-flex justify-content-center">
                <a href="#section1"><button class="btn btn-warning mt-3"><i class="fa fa-angle-double-left"
                            aria-hidden="true"></i></button></a>
                <a href="#section2"><button class="btn btn-warning m-3" id="page2"><i
                            class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>
                {{-- <a href="#section3"><button class="btn btn-warning mt-3">Page-3</button></a> --}}
            </ul>
        </nav>
        <script>
            $(document).ready(function() {
                $("#datepicker").datepicker();
                $("#datepicker2").datepicker();
                $("#myform").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 2
                        },
                        lastname: {
                            required: true,
                            minlength: 2
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        mobile: {
                            required: true,
                            digits: true
                        },
                        age: {
                            required: true,
                            digits: true,
                            min: 18
                        },
                        gender: {
                            required: true
                        },
                        occupation: {
                            required: true
                        },
                        annualincome: {
                            required: true
                        },
                        mothername: {
                            required: true
                        },
                        fathername: {
                            required: true
                        },
                        maritial: {
                            required: true,
                            date: true
                        },
                        anniversary: {
                            required: true,
                        },
                        religion: {
                            required: true
                        },
                        category: {
                            required: true
                        },
                        //    bankdetails
                        profilepic: {
                            required: true,
                            extension: "jpg|jpeg|png|ico|bmp"
                        },
                        aadharcard: {
                            required: true,
                            extension: "jpg|jpeg|png|ico|bmp"
                        },
                        signature: {
                            required: true,
                            extension: "jpg|jpeg|png|ico|bmp"
                        }
                    
                 
                    },
                    messages: {
                        name: {
                            required: "Please enter your name",
                            minlength: "Name must be at least 2 characters long"
                        },
                        lastname: {
                            required: "Please enter your last name",
                            minlength: "Last name must be at least 2 characters long"
                        },
                        email: {
                            required: "Please enter your email address",
                            email: "Please enter a valid email address"
                        },
                        mobile: {
                            required: "Please enter your mobile number",
                            digits: "Please enter only digits"
                        },
                        age: {
                            required: "Please enter your age",
                            digits: "Please enter only digits",
                            min: "Age must be at least 18"
                        },
                        gender: {
                            required: "Please select your gender"
                        },
                        occupation: {
                            required: "Please enter your occupation"
                        },
                        annualincome: {
                            required: "Please enter your annual income"
                        },
                        mothername: {
                            required: "Please enter your mother's name"
                        },
                        fathername: {
                            required: "Please enter your father's name"
                        },
                        maritial: {
                            required: "Please enter your marital anniversary",
                            date: "Please enter a valid date"
                        },
                        anniversary: {
                            required: "Please enter your marital anniversary"
                        },
                        religion: {
                            required: "Please enter your religion"
                        },
                        category: {
                            required: "Please select a category"
                        },
                        // bankdetails
                        profilepic: {
                            required: "please upload your profile Photo",
                            extension: "Please upload file in these format only (jpg, jpeg, png, ico, bmp)"
                        },
                        aadharcard: {
                            required: "please upload your aadhar card",
                            extension: "Please upload file in these format only (jpg, jpeg, png, ico, bmp)"
                        },
                        signature: {
                            required: "please  upload your signature",
                            extension: "Please upload file in these format only (jpg, jpeg, png, ico, bmp)"
                        }
                     
                     
                    }
                });


                // const navLinks = document.querySelectorAll('nav a');
                // const sections = document.querySelectorAll('section');

                // navLinks.forEach(link => {
                //     link.addEventListener('click', (event) => {
                //         event.preventDefault();

                //         const targetSectionId = link.getAttribute('href');
                //         const targetSection = document.querySelector(targetSectionId);

                //         sections.forEach(section => {
                //             section.classList.remove('active');
                //         });

                //         targetSection.classList.add('active');
                //     });
                // });
            });
        </script>
    </div>
@endsection
