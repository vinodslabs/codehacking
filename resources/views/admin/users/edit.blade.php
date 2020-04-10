@extends('layouts.admin')

@section('content')

<h1>Edit User</h1>


<div class="row">

    <div class="col-md-3">
    
        <img src="{{$user->photo?$user->photo->file  : 'http://placehold.it/200x200/'}}" alt="" class="img-resposive img-rounded">
    
    </div>

    <div class="col-md-6">
{!! Form::model($user,['method' => 'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

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
    {!! Form::label('photo_id','Photo') !!}
    {!! Form::file('photo_id', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password','Password') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit("Update User", ['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

{!! Form::open(['method' => 'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}

{!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}

{!! Form::close() !!}

@include('includes.form_error')
</div>
</div>
@endsection