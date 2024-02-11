@extends('layoutes.master')
@section('content')
    <style>
        .bordered-div {
            border: 2px solid black;
            /* Defines a solid black border with a width of 2px */
            padding: 10px;
            /* Optional: Adds some padding inside the div */
        }

        .pnn {
            height: 139px;
            width: 151px;
        }
        .btn{
          width: 45px;
        }
    </style>
    <div class="container">
        <div class="row">

            <div class="col-md-12 d-flex bg-success ">
              <a href="{{route('listmem')}}"><button class="btn btn-danger p-2"><i class="fa fa-angle-double-left" aria-hidden="true"></i></button></a>
                <h3 class="text-center" style="margin-left:351px;">Member-Details</h3>
            </div>
            <div class="col-md-12 d-flex">

                <div class="col-md-6 d-flex bordered-div mt-2">
                    <div class="col ">
                        <br><label for="">Name:-</label>&nbsp;{{ $value->name }}&nbsp;{{ $value->lastname }}

                        <br><label for="">Email:-</label>&nbsp;{{ $value->email }}

                        <br><label for="">Mobile:-</label>&nbsp;{{ $value->mobile }}

                        <br><label for="">Age:-</label>&nbsp;{{ $value->age }}

                        <br><label for="">Gender:-</label>&nbsp;{{ $value->gender }}

                        <br><label for="">Occupation:-</label>&nbsp;{{ $value->occupation }}

                    </div>
                    <div class="col">
                        {{-- <br><label for="">Annual Income:-</label>&nbsp;{{$value->annualincome}} --}}

                        <br><label for="">Mother's Name:-</label>&nbsp;{{ $value->mothername }}

                        <br><label for="">Father's Name:-</label>&nbsp;{{ $value->fathername }}

                        <br><label for="">Maritial Status:-</label>&nbsp;{{ $value->maritialstatus }}

                        <br><label for="">Anniversary Date:-</label>&nbsp;{{ $value->anniversary }}

                        <br><label for="">Religion:-</label>&nbsp;{{ $value->religion }}

                    </div>
                </div>

                <div class="col-md-6 d-flex bordered-div ml-1 mt-2">
                    <div class="col">
                        <label for="">profile photo</label>
                        <img class="pnn" src="{{ asset('profilepic/' . $value->profilepic) }}" alt="">
                    </div>
                    <div class="col">
                        <label for="">Aadhar Card</label>
                        <img class="pnn" src="{{ asset('aadharcard/' . $value->aadharcard) }}" alt="">
                    </div>
                    <div class="col">
                        <label for="">Signature</label>
                        <img class="pnn" src="{{ asset('signature/' . $value->signature) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
