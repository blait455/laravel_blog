@extends('backend.layout.main')

@section('title', 'Admin Blog | Delete User')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> User
                <small>Delete User</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}"><i class="fa fa-list"></i> All Users </a>
                </li>
                <li class="active">
                    Delete User
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {!! Form::model($user, [
                          'method' => 'DELETE',
                          'route'  => ['user.destroy', $user->id]
                      ]) !!}

                <div class="col-xs-9">
                    <div class="box">

                        <div class="box-body">
                            <p> You have specified this user for deletion: </p>
                            <p>ID #{{ $user->id }} : {{ $user->name }}</p>
                            <p>hat should be done with the content own by this user?</p>
                            <p>
                                <p><input type="radio" name="delete_option" value="delete" checked> Delete All Content </p>
                                <p>
                                    <input type="radio" name="delete_option" value="attribute"> Attribute content to:
                                    {!! Form::select('selected_user', $users, null ) !!}
                                </p>
                            </p>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-danger">Confirm Deletion</button>
                            <a href="{{ route('user.index') }}" class="btn btn-default">Cancel</a>
                        </div>

                    </div>
                </div>

                {!! Form::close() !!}
            </div>
                <!-- /.box -->
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>

@endsection

@include('backend.user.script')