@extends('layout')
@section('title', 'Welcome Page')
@section('content')
    <style>
        body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }
        .container {
      width: 80%;
      max-width: 800px;
      margin: 50px auto;
      text-align: center;
      color: white
    }
    h1 {
      color:#fff;
    }
    p {
      color: #787878;
    }
    .cta-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }
    .cta-button:hover {
      background-color: #0056b3;
    }
    </style>

<div class="container">
    <h1>Welcome to Our Website!</h1>
    <p>We're excited to have you here.</p>
    <a href="#" class="cta-button">Get Started</a>
  </div>
@endsection