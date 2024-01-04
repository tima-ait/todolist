<!DOCTYPE html>
@props(['title'])

<html lang="en">
    @extends('partials.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
@auth
<nav class="nav justify-content-end position-fixed top-0 end-0  ">
  <a class="nav-link" href="{{ route('logout') }}">Se deconnecter</a>
</nav>
@endauth
<body>
    @if(session()->has('success'))
    <center class="text-success">{{ session('success') }}</center>
    @endif
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        {{ $slot }}
    </div>
</body>
</html>
@extends('partials.footer')
