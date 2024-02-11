@extends('layoutes.master')
@section('content')
    <style>
        section {
            display: none;
        }

        .active {
            display: block;
        }
    </style>
    <form action="{{route('pratyush')}}" method="POST">
        @csrf
    <section id="section1" class="active">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="bg-success text-center">Member</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="">Name</label><span class="text-danger">*</span><br>
                    <input class="col-12 " type="text" name="name" placeholder="Name">
                </div>

                <div class="col-md-6">
                    <label for="">Email</label><span class="text-danger">*</span><br>
                    <input class="col-12 " name="email" type="text" id="datepicker2" placeholder="Email">
                </div>
                <div class="col-md-6">
                    <label for="">city</label><span class="text-danger">*</span><br>
                    <input class="col-12 " name="city" type="text" placeholder="city">
                </div>

            </div>

        </div>

    </section>
    <section id="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="bg-success text-center">Company</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="">Name</label><span class="text-danger">*</span><br>
                    <input class="col-12 " type="text" name="name" placeholder="Name">
                </div>

                {{-- <div class="col-md-6">
                <label for="">Email</label><span class="text-danger">*</span><br>
                <input class="col-12 " name="email" type="text" id="datepicker2"
                    placeholder="Email">
            </div>
          --}}

            </div>

        </div>
    </section>
    <section id="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="bg-success text-center">Branch</h3>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="">Branch Name</label><span class="text-danger">*</span><br>
                    <input class="col-12 " type="text" name="fullname" placeholder="Branch name ">
                </div>

                <div class="col-md-6">
                    <label for="">Address</label><span class="text-danger">*</span><br>
                    <input class="col-12 " name="dob" type="text" id="datepicker2" placeholder="Address">
                </div>

                <div class="col-md-6">
                    <label for="">pincode</label><span class="text-danger">*</span><br>
                    <input class="col-12 " name="mobile" type="text" placeholder="pincode">
                </div>

            </div>

        </div>

    </section>
    <section id="section4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="bg-success text-center">Member-details</h3>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for=""> Name</label><span class="text-danger">*</span><br>
                    <input class="col-12 " type="text" name="fullname" placeholder="Full Name">
                </div>

                <div class="col-md-6">
                    <label for="">father's Name</label><span class="text-danger">*</span><br>
                    <input class="col-12 " name="dob" type="text" id="datepicker2" placeholder="Date of Birth">
                </div>

                <div class="col-md-6">
                    <label for="">Mother's Name</label><span class="text-danger">*</span><br>
                    <input class="col-12 " name="mobile" type="text" placeholder="Mobile">
                </div>
                <div class="col-md-6">
                    <label for="">Mobile</label><span class="text-danger">*</span><br>
                    <input class="col-12 " name="mobile" type="text" placeholder="Mobile">
                </div>

            </div>
            <div class="row ">
                <div class="col-md-12 m-4 d-flex justify-content-center">
                    <button class="btn btn-primary" id="btnsubmit">submit</button>
                </div>
            </div>

        </div>
    </section>
</form>
    <nav>
        <ul class="d-flex justify-content-center">
            <a href="#section1"><button class="btn btn-warning mt-3">member</button></a>
            <a href="#section2"><button class="btn btn-warning m-3" id="page2">company</button></a>
            <a href="#section3"><button class="btn btn-warning mt-3">Branch</button></a>
            <a href="#section4"><button class="btn btn-warning mt-3 ml-3">memberdetails</button></a>
        </ul>
    </nav>
    <script>
        $(document).ready(function(){
           
            const navLinks = document.querySelectorAll('nav a');
                const sections = document.querySelectorAll('section');

                navLinks.forEach(link => {
                    link.addEventListener('click', (event) => {
                        event.preventDefault();

                        const targetSectionId = link.getAttribute('href');
                        const targetSection = document.querySelector(targetSectionId);

                        sections.forEach(section => {
                            section.classList.remove('active');
                        });

                        targetSection.classList.add('active');
                    });
                });
        });
    </script>
@endsection
