<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('admin-title', 'Admin Pannel')</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .sidebar {
        position: fixed;
        width: 250px;
        height: 100%;
        background: #333;
        color: #fff;
        padding-top: 20px;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        padding: 10px;
        border-bottom: 1px solid #555;
    }

    .sidebar ul li a {
        color: #fff;
        text-decoration: none;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
    }

    .header {
        background: #222;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    .footer {
        background: #222;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
         /* Style for the buttons */
    .button-group button {
        padding: 5px 10px;
        margin-right: 5px;
        border: none;
        cursor: pointer;
        border-radius: 3px;
    }

    /* Edit button style */
    .button-edit {
        background-color: #3498db;
        color: #fff;
    }

    /* View button style */
    .button-view {
        background-color: #2ecc71;
        color: #fff;
    }

    /* Delete button style */
    .button-delete {
        background-color: #e74c3c;
        color: #fff;
    }

     /* add user form css */
     form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
</style>
</head>
<body>

<div class="sidebar">
    <ul>
        <li><a href="{{route('adminPannel.get')}}"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{route('userList.get')}}"><i class="fa fa-user"></i>Users</a></li>
        <li><a href="{{route('addUser.get')}}"><i class="fa fa-user"></i> Add User</a></li>
        <li><a href="{{route('addRoles.get')}}"><i class="fa fa-user"></i> Add Roles</a></li>
        <li><a href="{{route('getPermissions.get')}}"><i class="fa fa-user"></i> Permissions</a></li>
        <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
        <li><a href="#"><i class="fa fa-envelope"></i> Messages</a></li>
        <li><a href="#"><i class="fa fa-chart-bar"></i> Analytics</a></li>
        <li><a href="{{route('signOut.post')}}"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>

<div class="content">
    
    @yield('admin-content')
    
    
    
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>   



</body>
</html>