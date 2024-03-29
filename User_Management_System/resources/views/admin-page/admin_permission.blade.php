{{-- @extends('admin')
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

<table>
    <thead>
        <tr>
            <th>Role Name</th>
            <th>Role ID</th>
            <th>Assigned Roles</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->role_name }}</td>
            <td>{{ $role->role_id }}</td>
            <td>
                @foreach ($role->assignedRoles as $assignedRole)
                    {{ $assignedRole->role_name }}<br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection --}}