

@extends('admin')
@section('admin-title', 'Roles and Assigned Roles')
@section('admin-content')
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }
</style>

<div class="header">
    <h1>Assigned Permissions</h1>
</div>
<br>
<table>
    <thead>
        <tr>
            <th>Role Name</th>
            <th>Assigned Roles</th>
        </tr>
    </thead>
    <tbody>
        
        <tr>
            <td>{{ $role->role_name}}</td>
            <td></td>
            {{-- <td>
                @foreach ($role->assignedRoles as $assignedRole)
                    {{ $assignedRole->role_name }}<br>
                @endforeach
            </td> --}}
        </tr>
        
    </tbody>
</table>
    
@endsection

{{-- <h1>{{dd($role->role_name)}}</h1> --}}