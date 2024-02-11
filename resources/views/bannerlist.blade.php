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
                    <h1>Banner-List</h1>
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
                        <div class="card-header d-flex justify-content-end">

                            <a href=""><button class="btn btn-success"><i class="fa fa-user-plus" aria-hidden="true"></i></button></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\Banner::where('image', '!=', '')->get() as $user)
                                        <tr>

                                            <td>{{ $user->id }}</td>
                                            <td><img src="{{ asset('banner/' . $user->image) }}" alt=""
                                                    class="img"></td>
                                            <td> {{ $user->title }}</td>
                                            <td>{{ $user->description }}</td>

                                            <td>
                                                <div class="d-flex ">
                                                    {{-- {{ route('editcourse', ['id' => $user->id]) }} --}}
                                                    <a href="{{ route('editbanner', ['id' => $user->id]) }}"><button
                                                            class="btn btn-warning" style=""><i class="fa fa-pencil"
                                                                aria-hidden="true"></i></button></a>

                                                    <a href="{{ route('editbanner', ['id' => $user->id]) }}"
                                                        class="ml-2"><button class="btn btn-danger" style=""><i
                                                                class="fa fa-ban" aria-hidden="true"></i></button></a>

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
