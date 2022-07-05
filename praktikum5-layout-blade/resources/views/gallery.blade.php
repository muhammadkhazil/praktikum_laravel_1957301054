{{-- no 1 --}}
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Galery</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/mahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/gallery">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://source.unsplash.com/kfwPJieZVwI/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://source.unsplash.com/8CqDvPuo_kI/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/JdzHrfX4l4Q/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/T-tVt4xsCdE/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/F8t2VGnI47I/350x250" class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>
    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | Copyright © {{ date('Y') }} Teknik Informatika
        </div>
    </footer>
</body>

</html> --}}


{{-- view include --}}
{{-- @include('layout.header')
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250" class="img-thumbnail img-fluid">
        </div>
        ...
        ...
        <div class="col-4 mt-4">
            <img src="https://source.unsplash.com/F8t2VGnI47I/350x250" class="img-thumbnail img-fluid">
        </div>
    </div>
</div>
@include('layout.footer') --}}


{{-- mengirim data ke include --}}
{{-- @include('layout.header', ['title' => 'Gallery'])
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250" class="img-thumbnail img-fluid">
        </div>
        ...
        ...
        <div class="col-4 mt-4">
            <img src="https://source.unsplash.com/F8t2VGnI47I/350x250" class="img-thumbnail img-fluid">
        </div>
    </div>
</div>
@include('layout.footer') --}}



{{-- layout extends --}}
{{-- @extends('layout.master')
@section('title', 'Gallery')
@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250" class="img-thumbnail img-fluid">
            </div> ...
            ...
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/F8t2VGnI47I/350x250" class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>
@endsection --}}


{{-- masalah menu navigasi --}}
@extends('layout.master')
@section('title', 'Gallery')
@section('menuGallery', 'active')
@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Gallery</h1>
        ...
        ...
    @endsection
