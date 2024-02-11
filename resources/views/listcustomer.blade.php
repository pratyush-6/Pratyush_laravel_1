@extends('layoutes.master')
@section('content')
<style>
    .img {
        height: 60px;
        width: 60px;
    }

    
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 bg-success text-center">
                <h1>Member-List</h1>
            </div>
            {{-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div> --}}
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-end bg-secondary">
                      
                       <a href="{{route('addcustomer')}}"><button class="btn btn-success ml-5"><i class="fa fa-user-plus" aria-hidden="true"></i></button></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="overflow-x:auto;">
                        <table id="example2" class="table table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Name</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    {{-- <th>Age</th> --}}
                                    <th>Gender</th>
                                    <th>Occupation</th>
                                    <th>Religion</th>
                                    {{-- <th>mother's name</th> --}}
                                    <th>Father's name</th>
                                    <th>Maritial status</th>
                                    <th>Anniversary</th>
                                    {{-- <th>profilepic</th>
                                    <th>aadharcard</th>
                                    <th>signature</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($value as $user)
                                    <tr>

                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->lastname}}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>{{ $user->mobile }}</td>
                                        {{-- <td>{{ $user->age }}</td> --}}
                                        <td>{{ $user->gender}}</td>
                                        <td>{{ $user->occupation}}</td>
                                        <td>{{ $user->religion }}</td>
                                        {{-- <td>{{ $user->mothername }}</td> --}}
                                        <td>{{ $user->fathername }}</td>
                                        <td>{{ $user->maritialstatus }}</td>
                                        <td>{{ $user->anniversary }}</td>
                                        {{-- <td>{{ $user->profilepic }}</td>
                                        <td>{{ $user->aadharcard }}</td>
                                        <td>{{ $user->signature }}</td> --}}
                                        

                                        <td>
                                            <div class="d-flex ">
                                                {{-- {{ route('editcourse', ['id' => $user->id]) }} --}}
                                                <a href="{{ route('editcustomer', ['id' => $user->id]) }}"><button
                                                        class="btn btn-warning" style=""><i class="fa fa-pencil"
                                                            aria-hidden="true"></i></button></a>

                                                <a href="{{ route('memberdetails', ['id' => $user->id]) }}"
                                                    class="ml-2"><button class="btn btn-danger" style=""><i
                                                            class="fa fa-eye" aria-hidden="true"></i></button></a>

                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>

    <!-- /.container-fluid -->
</section> 
@endsection