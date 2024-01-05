@extends('admin.main')
@section('title', 'Teacher Create')
@section('content')

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
        @include('admin.partials.validate')

        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавить учителя</h3>

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

                    <form action="{{ route('teacher.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter subject">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Re-enter Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                                       placeholder="Re-enter Password">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
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
