@extends('layoutes.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 bg-success text-center">
                <h1>Social Media-List</h1>
            </div>
        
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

                        {{-- <a href="{{ route('course') }}"><button class="btn btn-success"><i class="fa fa-user-plus" aria-hidden="true"></i></button></a> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>class</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($value as $user)
                                    <tr>

                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }} </td>                         
                                        <td> {{ $user->link }}</td>
                                        <td>{{ $user->class}}</td>
                                        <td>{{ $user->coursetype }}</td>
                                        <td>
                                            <div class="d-flex ">
                                              <a href="{{route('editsocial', ['id' => $user->id]) }}"><button 
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
                        {{-- modal start --}}
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content" style="     width: 600px;">
                                    <div class="modal-header d-flex justify-content-between">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Course Name</label><span
                                                    class="text-danger">*</span><br>
                                                <input class="col-12" type="text" value="" name="name"
                                                    placeholder="Course Name">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Image</label><span
                                                    class="text-danger">*</span><br>
                                                <input class="col-12 " name="image" type="file"
                                                    placeholder="Image">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Title</label><span
                                                    class="text-danger">*</span><br>
                                                <input class="col-12" type="text" name="title" placeholder="Title">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">description</label><span
                                                    class="text-danger">*</span><br>
                                                <input class="col-12" type="text" name="description"
                                                    placeholder="description">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Course-Type</label><span
                                                    class="text-danger">*</span><br>
                                                <select class="col-12" type="text" name="coursetype" id=""
                                                    style=" height:36px;">

                                                    <option>select</option>
                                                    <option value="abc">App</option>
                                                    <option value="def">web</option>
                                                    <option value="ghi">open-source</option>
                                                    {{-- <option value="3">government Job</option> --}}
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- modal end --}}
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