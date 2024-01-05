<!DOCTYPE html>
@props([
    'title',
    'body',
])
<html lang="en">
    @extends('partials.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
@auth
<nav class="nav justify-content-between  ">
  <a class="nav-link text-dark position-fixed top-0 start-0 p-4" href="{{ route('index') }}"><h4>TO DO LIST</h4></a>
  <a class="nav-link text-dark position-fixed top-0 end-0 p-4" data-bs-toggle="tooltip" data-bs-placement="right" title="Se deconnecter" href="{{ route('logout') }}"><i class="bi bi-box-arrow-right" ></i></a>
</nav>
@endauth
<body class="{{ $body }}">
    @if(session()->has('success'))
    <center class="text-success">{{ session('success') }}</center>
    @endif
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        {{ $slot }}
    </div>
</body>
</html>
@extends('partials.footer')
