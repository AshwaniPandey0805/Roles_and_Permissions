@extends('layout')
@section('title', 'Login')
@section('content')

<style>
    /* body{
        display: flex;
        justify-content: center;
        align-items: center;
    } */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        /* height: 100vh; This ensures the container takes up the full viewport height */
    }
    form {
        width: 500px;
        padding: 35px;
        border: 4px solid white;
        border-radius: 10px;
        box-shadow: 0 0 50px rgba(0, 0, 0, 0.8); 
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
</style>

<div class="mt-5">
    @if($errors->all())
        <div class="col-12">
            @foreach($errors->all() as $error )
                <div class="alert alert-danger">{{$errors}}</div>
            @endforeach
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
</div>

<div class="container">

        
        
    <form action="{{route('signIn.post')}}" method="post" > 
    <h1 style="text-align: center; margin-bottom:20px ">LOGIN</h1>
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control"  name="email">
            <div id="emailHelp" class="form-text" style="color:white">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">SIGN IN</button>
        <div class="redirect-signin">
            <small>Don't have an account !</small>
            <span>
                <a href="{{ route('signUp.get') }}" class="sign-in">
                    SIGN-UP
                </a>
            </span>
        </div>
    </form>
</div>

@endsection
