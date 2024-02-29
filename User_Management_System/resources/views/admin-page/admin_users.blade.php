@extends('admin')
@section('admin-title', 'User List')
@section('admin-content')
<style>
    /* Style to remove default anchor styling */
    .button-edit a {
        text-decoration: none; /* Remove underit erline */
        color: inherit;
    }
    .button-view a {
        text-decoration: none; /* Remove underit erline */
        color: inherit;
    }
    
</style>
<div class="header">
    <h1>User Details</h1>
</div>
<br>
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Role name</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($userDetails as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->first_name}}</td>
                <td>{{$item->last_name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone_number}}</td>
                <td>{{$item->role->role_name}}</td>
                <td class="button-group">
                    <button class="button-edit"><a href="{{route('edit', ['id' => $item->id] )}}">edit</a></button>
                    <button class="button-view"><a href="{{route('view', ['id' => $item->id] )}}">View</a></button>
                    <button class="button-delete">Delete</button>
                </td>
                
            </tr> 
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection