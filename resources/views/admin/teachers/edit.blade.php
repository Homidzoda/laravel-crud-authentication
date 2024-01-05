@extends('admin.main')
@section('title', 'Teacher Editing')
@section('content')

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
        @include('admin.partials.validate')

        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Редактирование: {{ $teacher->name }} </h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">

                    <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">

                        {{ csrf_field() }}

                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $teacher->name }}" class="form-control" id="name"
                                       placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" name="subject" value="{{ $teacher->subject }}" class="form-control" id="subject"
                                       placeholder="Enter subject">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" value="{{ $teacher->email }}" class="form-control" id="email"
                                       placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">RePassword</label>
                                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
