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
                <div class="col-sm-6">
                    <h1>About-List</h1>
                </div>
                {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active"></li>
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

                            <!-- <a href=""><button class="btn btn-success">add</button></a> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>city</th>
                                        <th>degree</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($about as $user)
                                        <tr>
                                                 
                                            <td>{{ $user->id }}</td>
                                            {{-- <td>{{ $user->name }} </td> --}}
                                            <td><img src=" {{ asset('about/' . $user->image) }}" alt=""
                                                    class="img"></td>
                                            <td> {{ $user->name }}</td>
                                            <td>{{ $user->age }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->city }}</td>
                                            <td>{{ $user->degree }}</td>
                                
                                            <td>
                                                <div class="d-flex ">
                                                  <a href="{{ route('updteabout', ['id' => $user->id]) }}"><button 
                                                        class="btn btn-warning" style=""><i class="fa fa-pencil"
                                                            aria-hidden="true"></i></button></a> 
                                                    {{-- <form action="" class="ml-2">
                                                        <a href=""><button class="btn btn-danger" style=""><i
                                                                    class="fa fa-ban" aria-hidden="true"></i></button></a>
                                                    </form> --}}

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
    <!-- /.content -->
@endsection
