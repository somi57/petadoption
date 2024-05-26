<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Adoption</title>
</head>
<body>
    <a href="/home">Home Page </a><br>
    <a href="/contact">Contact Us </a>
    <a href="/pinfo">Pet Information</a>
    <a href="/signup">Signup</a>
    <a href="/adoptionform">Adoptionform</a>
    <a href="/login">Login</a>

    {{-- @php
         $n=["one"=>"ab","two"=>"ba","three"=>"ca","four"=>"cb"];
//    $n=[];
$no="1";
   @endphp
    @includeUnless(empty($no),'demo',['mn'=>$n])
</body>
</html>

@extends('layout')

@section('content')
    <h1>home page</h1>
    <p>gjjj</p>
@endsection --}}