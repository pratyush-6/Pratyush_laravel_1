@extends('layoutes.master')
@section('content')

    <head>
        <style>
            * {
                box-sizing: border-box;
            }

            .tab {
                display: none;
                width: 100%;
                height: 50%;
                margin: 0px auto;
            }

            .current {
                display: block;
            }

            /* body {background-color: #f1f1f1;} */

            /* form {background-color: #ffffff; margin: 100px auto; font-family: Raleway; padding: 40px; width: 40%; min-width: 300px; } */

            /* h1 {text-align: center; } */

            input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
            }

            button {
                background-color: #4CAF50;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                font-size: 17px;
                font-family: Raleway;
                cursor: pointer;
            }

            button:hover {
                opacity: 0.8;
            }

            .previous {
                background-color: #bbbbbb;
            }

            /* Make circles that indicate the steps of the form: */
            .step {
                height: 30px;
                width: 30px;
                cursor: pointer;
                margin: 0 2px;
                color: #fff;
                background-color: #bbbbbb;
                border: none;
                border-radius: 50%;
                display: inline-block;
                opacity: 0.8;
                padding: 5px
            }

            .step.active {
                opacity: 1;
                background-color: #69c769;
            }

            .step.finish {
                background-color: #4CAF50;
            }

            .error {
                color: #f00;
            }
        </style>
        <title>jQuery Multi Step Form Wizard Plugin With Demo</title>
        <link rel="stylesheet" type="text/css" href="./multi-form.css?v2">
        {{-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script> --}}
        <script type="text/javascript" src="./multi-form.js?v2"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#age').datepicker();
                $('#anniversary').datepicker();
                var val = {
                    // Specify validation rules
                    rules: {
                        name: {
                            required: true,
                            minlength: 2,
                        },
                        lastname: {
                            required: true,
                            minlength: 2,
                        },
                        email: {
                            required: true,
                            email: true

                        },
                        mobile: {
                            required: true,
                            digits: true,
                            minlength: 10,
                            maxlength: 10
                        },
                        age: {

                            required: true,
                            minlength: 2,
                        },
                        gender: {

                            required: true,
                           
                        },
                        occupation: {
                            required: true,
                            required: true,
                        },

                        religion: {
                            required: true,
                            required: true,

                        },
                        mothername: {
                            required: true,
                            required: true,
                            // month: true,
                            // required: true,
                            // minlength: 2,
                            // maxlength: 2,
                            // digits: true
                        },
                        fathername: {

                            required: true,
                            minlength: 2,
                        },
                        maritialstatus: {

                            required: true,
                            minlength: 2,
                        },
                        anniversary: {
                            required: true,
                            minlength: 2,
                        },
                        //
                        profilepic: {

                            required: true,
                            minlength: 2,
                        },
                        aadharcard: {

                            required: true,
                            minlength: 2,
                        },
                        signature: {
                            required: true,
                            minlength: 2,
                        },
                    },
                    // Specify validation error messages
                    messages: {
                        name: {
                            required: "Name feild is required",
                            minlength: "please enter more than two words",
                        },
                        lastname: {
                            required: "lastname feild is required",
                            minlength: "please enter more than two words",
                        },
                        email: {
                            required: "Email feild is required",
                            email: "please enter valid email",

                        },
                        mobile: {
                            required: "Please  enter your mobile number",
                            digits: "Mobile number must contain only digits",
                            minlength: "Mobile number must be 10 digits",
                            maxlength: "Mobile number must be 10 digits"
                        },
                        age: {

                            required: "Age feild is required",
                            minlength: "please enter more than two words",
                        },
                        gender: {

                            required: "Gender feild is required",
                           
                        },
                        occupation: {
                            required: "Occupation  feildis required",
                            minlength: "please enter more than two words",
                        },

                        religion: {
                            required: "Religion feild is required",
                            minlength: "please enter more than two words",

                        },
                        mothername: {
                            required: "Mothername feild is required",
                            minlength: "please enter more than two words",
                            // month: true,
                            // required: true,
                            // minlength: 2,
                            // maxlength: 2,
                            // digits: true
                        },
                        fathername: {

                            required: "Fathername feild is required",
                            minlength: "please enter more than two words",
                        },
                        maritialstatus: {

                            required: "Maritialstatus feild is required",
                            minlength: "please enter more than two words",
                        },
                        anniversary: {
                            required: "Anniversary feild is required",
                            minlength: "please enter more than two words",
                        },
                        //
                        profilepic: {

                            required: "Profilepic feild is required",
                            minlength: "please enter more than two words",
                        },
                        aadharcard: {

                            required: "Aadharcard feild is required",
                            minlength: "please enter more than two words",
                        },
                        signature: {
                            required: "Signature feild is required",
                            minlength: "please enter more than two words",
                        },
                    }
                }
                $('#myform').on('submit', function(e) {

                    e.preventDefault();
                    // var formdata = new FormData(this);

                    $.ajax({
                        url: '{{ route('pratyush') }}',
                        type: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Your Details has been Saved ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#myform').trigger('reset');
                            window.location = "{{ route('listmem') }}";
                            console.log(response);
                        }
                    });
                });
                $("#myform").multiStepForm({
                    // defaultStep:0,
                    beforeSubmit: function(form, submit) {
                        console.log("called before submiting the form");
                        console.log(form);
                        console.log(submit);
                    },
                    validations: val,
                }).navigateTo(0);
            });
        </script>
    </head>

    <body style="background-color: darkslategray;">
        {{-- <h1 style="margin-top:50px; color: white;">jQuery Multi Step Form Wizard Plugin With Demo</h1> --}}
        <form id="myform">
            @csrf
            <!-- One "tab" for each step in the form: -->
            <div class="container">
                <div class="tab row">
                    <div class="bg-success text-center">
                        <h3>Member-details</h3>
                    </div>
                    <div class="col-md-12 ">
                        <div class="d-flex">
                            <div class="col-6">
                                <label for="">Name<span class="text-danger">*</span></label><input class=""
                                    placeholder="Name..." name="name">
                            </div>
                            <div class="col-6">
                                <label for="">last name<span class="text-danger">*</span></label><input
                                    class="" placeholder="lastname..." name="lastname">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-6">
                                <label for="">email<span class="text-danger">*</span></label><input
                                    placeholder="Email..." name="email">
                            </div>
                            <div class="col-6">
                                <label for="">mobile<span class="text-danger">*</span></label><input
                                    placeholder="mobile..." name="mobile">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-6">
                                <label for="">Age<span class="text-danger">*</span></label><input id="age"
                                    class="" placeholder="Select your age" name="age">
                            </div>
                            {{-- <div class="col-6">
                                <label for="">gender<span class="text-danger">*</span></label><input class="" placeholder="gender..."
                                    name="gender">
                            </div> --}}
                            <div class="col-6">
                                <label>Gender:</label>
                                <div class="d-flex">
                                    <div class="col-6">
                                        <input type="radio" id="male" name="gender" value="male"
                                            class="form-check-input">
                                        <label for="male" class="form-check-label">Male</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" id="female" name="gender" value="female"
                                            class="form-check-input">
                                        <label for="female" class="form-check-label">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-6">
                                <label for="">Occupation<span class="text-danger">*</span></label><input
                                    placeholder="occupation..." name="occupation">
                            </div>
                            <div class="col-6">
                                <label for="">Religion<span class="text-danger">*</span></label><input
                                    placeholder="religion..." name="religion">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-6">
                                <label for="">Mother name<span class="text-danger">*</span></label><input
                                    class="" placeholder="mothername..." name="mothername">
                            </div>
                            <div class="col-6">
                                <label for="">father name<span class="text-danger">*</span></label><input
                                    class="" placeholder="fathername..." name="fathername">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-6">
                                <label for="">maritial status<span class="text-danger">*</span></label><input
                                    placeholder="maritialstatus..." name="maritialstatus">
                            </div>
                            <div class="col-6">
                                <label for="">anniversary<span class="text-danger">*</span></label><input
                                    id="anniversary" placeholder="anniversary..." name="anniversary">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab">
                    <div class="bg-success text-center">
                        <h3>Member-details</h3>
                    </div>
                    {{-- <p><input placeholder="Username..." name="username"></p>
                    <p><input placeholder="Password..." name="password" type="password"></p> --}}
                    <div class="d-flex">
                        <div class="col-6">
                            <label for="">profile photo <span class="text-danger">*</span></label><input
                                type="file" placeholder="First name..." name="profilepic">
                        </div>
                        <div class="col-6">
                            <label for="">Aadhar card<span class="text-danger">*</span></label><input
                                type="file" placeholder="Last name..." name="aadharcard">
                        </div>

                    </div>
                    <div class="d-flex">
                        <div class="col-6">
                            <label for="">Signature<span class="text-danger">*</span></label><input
                                type="file" placeholder="First name..." name="signature">
                        </div>

                    </div>
                </div>
                <div style="overflow:auto;">
                    <div style="float:right; margin-top: 5px;">
                        <button type="button" class="previous">Previous</button>
                        <button type="button" class="next">Next</button>
                        <button type="button" class="submit">Submit</button>
                    </div>
                </div>
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step">1</span>
                    <span class="step">2</span>

                </div>
            </div>
        </form>
    </body>
    <script>
        (function($) {
            $.fn.multiStepForm = function(args) {
                if (args === null || typeof args !== 'object' || $.isArray(args))
                    throw " : Called with Invalid argument";
                var form = this;
                var tabs = form.find('.tab');
                var steps = form.find('.step');
                steps.each(function(i, e) {
                    $(e).on('click', function(ev) {});
                });
                form.navigateTo = function(i) {
                    /*index*/
                    /*Mark the current section with the class 'current'*/
                    tabs.removeClass('current').eq(i).addClass('current');
                    // Show only the navigation buttons that make sense for the current section:
                    form.find('.previous').toggle(i > 0);
                    atTheEnd = i >= tabs.length - 1;
                    form.find('.next').toggle(!atTheEnd);
                    // console.log('atTheEnd='+atTheEnd);
                    form.find('.submit').toggle(atTheEnd);
                    fixStepIndicator(curIndex());
                    return form;
                }

                function curIndex() {
                    /*Return the current index by looking at which section has the class 'current'*/
                    return tabs.index(tabs.filter('.current'));
                }

                function fixStepIndicator(n) {
                    steps.each(function(i, e) {
                        i == n ? $(e).addClass('active') : $(e).removeClass('active');
                    });
                }
                /* Previous button is easy, just go back */
                form.find('.previous').click(function() {
                    form.navigateTo(curIndex() - 1);
                });

                /* Next button goes forward iff current block validates */
                form.find('.next').click(function() {
                    if ('validations' in args && typeof args.validations === 'object' && !$.isArray(args
                            .validations)) {
                        if (!('noValidate' in args) || (typeof args.noValidate === 'boolean' && !args
                                .noValidate)) {
                            form.validate(args.validations);
                            if (form.valid() == true) {
                                form.navigateTo(curIndex() + 1);
                                return true;
                            }
                            return false;
                        }
                    }
                    form.navigateTo(curIndex() + 1);
                });
                form.find('.submit').on('click', function(e) {
                    if (typeof args.beforeSubmit !== 'undefined' && typeof args.beforeSubmit !== 'function')
                        args.beforeSubmit(form, this);
                    /*check if args.submit is set false if not then form.submit is not gonna run, if not set then will run by default*/
                    if (typeof args.submit === 'undefined' || (typeof args.submit === 'boolean' && args
                            .submit)) {
                        form.submit();
                    }
                    return form;
                });
                /*By default navigate to the tab 0, if it is being set using defaultStep property*/
                typeof args.defaultStep === 'number' ? form.navigateTo(args.defaultStep) : null;

                form.noValidate = function() {

                }
                return form;
            };
        }(jQuery));
    </script>
@endsection
