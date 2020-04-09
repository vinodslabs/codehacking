@extends('layouts.admin')

@section('content')

<h1>Users</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created_at</th>
            <th>Updated</th>
        </tr>
    </thead>

    <tbody>
        @if ($users)
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{@isset($user->role->name)?$user->role->name:'Not Defined'}}</td>
                    <td>{{$user->is_active==1?'Active':'In-Acitve'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach    

        @endif

    </tbody>
</table>

@endsection