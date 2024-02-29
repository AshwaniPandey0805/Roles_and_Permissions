@extends('admin')
@section('admin-title', 'User List')
@section('admin-content')
<style>
    .container {
        margin-top: 30px;
    }
    form {
        max-width: 500px;
        padding: 35px;
        border: 4px solid white;
        border-radius: 10px;
        box-shadow: 0 0 50px rgba(0, 0, 0, 0.8); 
    }
    /* .redirect-signin {
        text-align: right;
        margin-top: 10px;
    } */
    .sign-in {
        color: red;
        font-weight: 600;
    }
    #main-container {
    display: flex;
    justify-content: center; /* Center content horizontally */
    /* align-items: center; Center content vertically */
    flex-direction: row; /* Arrange items in a column */
    /* Add any other flexbox properties as needed */
}
.custom-img {
    width: 300px;
    height: auto;
}
.redirect-signin{
        /* display: flex; */
        justify-content: space-between;
        display: block;
        width: 60%;
        margin: auto;
        margin-top: 10px;
        
    }
    small{
        margin-left: 5px;
        font-weight: 600;
    }
    .sign-in{
        text-decoration: none;
        color: red;
        font-size: 15px;
        font-weight: 600;
        float: right;
        margin-right: 10px;
        
    }

    .btn {
        display: block;
        width: 60%;
        margin: auto;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 20px;
    }

    .error {
        color: firebrick;
        font-weight: bold;
        display: none; /* Hide error messages initially */
    }

    .error-active {
        display: block; /* Show error message when active */
    }
</style>
<div class="header">
    <h1>Add Roles</h1>
</div>
<div id="main-container" class="container">

    

    
    
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
            <div>
                <form action="{{route('addRoles.post')}}" method="post">
                    @csrf
                    <div>
                        <label for="roleID">Role ID</label>
                        <input type="text" placeholder="add Role id" name="roleID">
                    </div>
                    <div>
                        <label for="roleName">Role name</label>
                        <input type="text" placeholder="add Role name" name="roleName">
                    </div>

                    <h4>Add Permissions</h4>
                    <hr>
                        <div>
                            <label><input type="checkbox" name="permission[]" value="1"> Create</label>
                            <label><input type="checkbox" name="permission[]" value="2"> Read</label>
                            <label><input type="checkbox" name="permission[]" value="3"> Delete</label>
                        </div>

                        <br>
                    <div>
                        <button type="submit" class="btn btn-primary btn-block">ADD Role</button>
                    </div>
                </form>

                {{-- <hr>
                <form action="{{route('assignPermission.post')}}" method="post">
                    @csrf
                    
                        <div><button>submit</button></div>
                    
                </form> --}}
            </div>
            

           
            


        </div>
            <table>
                <thead>
                    <tr>
                        <th>Role ID</th>
                        <th>Role Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $item)
                    <tr>
                        <td>{{$item->role_id}}</td>
                        <td>{{$item->role_name}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

        
        </div>
        
    </div>

    
</div>

{{-- Script file --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection