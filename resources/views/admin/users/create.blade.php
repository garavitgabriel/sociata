@extends('layouts.admin')







@section('content')





    <h1>Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action' => 'AdminUsersController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label ('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label ('email', 'Email') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}

        <div class="form-group">
            {!! Form::label('role_id', 'Role') !!}
            {!! Form::select('role_id', $roles, null, ['placeholder'=>'Choose a role', 'class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label ('active', 'Active:') !!}
            {!! Form::select('active', array(1=>'Active', 0=>'Not Active'),0,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label ('password', 'Password') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
        </div>


      <div class="form-group">
          {!! Form::submit('Create User', ['class'=>'btn btn-info']) !!}
      </div>




        {!! Form::close() !!}
    </div>

@include('includes.form_error')



@stop




