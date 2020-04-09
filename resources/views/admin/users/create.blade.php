@extends('layouts.admin')

@section('content')

<h1>Create User</h1>


<div class="row">
    <div class="col-md-6">
{!! Form::open(['method' => 'POST','action'=>'AdminUsersController@store']) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('is_active', "Active") !!}
    {!! Form::select('is_active', [1=>'Active',0=>'Not Active'], null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('role_id','Role') !!}    
    {!! Form::select('role_id', [''=>'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('file','Photo') !!}
    {!! Form::file('file', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password','Password') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::submit("Create User", ['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}
@include('includes.form_error')
</div>
</div>
@endsection