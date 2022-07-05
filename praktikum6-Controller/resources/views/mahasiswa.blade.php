{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Mahasiswa</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                @forelse ($mahasiswa as $val)
                <li class="list-group-item">{{$val}}</li>
                @empty
                <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>
</body>
</html> --}}

{{-- Membuat include --}}
{{-- 
@include('layout.header')
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3"> Data Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6-m-auto">
            <ol class="list group">
                @forelse ($mahasiswa as $val)
                <li class="list-group-item">{{ $val }}</li>    
                @empty
                <div class="alert alert-dark d-inline-block"> Tidak ada data</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>
@include('layout.footer') --}}

{{-- Mengirim data ke include --}}
{{-- @include('layout.header', ['title' => 'Data Mahasiswa']) 
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3"> Data Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6-m-auto">
            <ol class="list group">
                @forelse ($mahasiswa as $val)
                <li class="list-group-item">{{ $val }}</li>    
                @empty
                <div class="alert alert-dark d-inline-block"> Tidak ada data</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>
@include('layout.footer') --}}

{{-- Membuat extends --}}
{{-- @extends('layout.master')
@section('title',"Data Mahasiswa")

@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3"> Data Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6-m-auto">
            <ol class="list group">
                @forelse ($mahasiswa as $val)
                <li class="list-group-item">{{ $val }}</li>    
                @empty
                <div class="alert alert-dark d-inline-block"> Tidak ada data</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>
@endsection --}}


{{-- Membuat section untuk menu active memperbaiki menu --}}
{{-- @extends('layout.master')
@section('title',"Data Mahasiswa")
@section('menuMahasiswa', 'active')
    
@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3"> Data Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6-m-auto">
            <ol class="list group">
                @forelse ($mahasiswa as $val)
                <li class="list-group-item">{{ $val }}</li>    
                @empty
                <div class="alert alert-dark d-inline-block"> Tidak ada data</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>
@endsection --}}


{{-- Section Extend --}}
{{-- @extends('layout.master') --}}

{{-- Section Extend 2 --}}
{{-- @extends('layout.master')
@section('title',"Data Mahasiswa")
@section('menuMahasiswa', 'active')
    
@section('content')
@parent
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Data Mahasiswa</h1>
    <div class="row">
    <div class="col-sm-8 col-md-6 m-auto">
    <ol class="list-group">
    @forelse ($mahasiswa as $val)
    <li class="list-group-item">{{$val}}</li>
    @empty
    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
    @endforelse
    </ol>
    </div>
    </div>
    </div>
@endsection  --}}


{{-- TUGAS MEMBUAT CONTROLLER MAHASISWA --}}
@extends('layout.master')
@section('title',"Data Mahasiswa")
@section('menuMahasiswa', 'active')

@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Data Mahasiswa</h1>
    <div class="row">
    <div class="col-sm-8 col-md-6 m-auto">
    <ol class="list-group">
    @forelse ($mahasiswa as $val)
    <li class="list-group-item">{{$val}}</li>
    @empty
    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
    @endforelse
    </ol>
    </div>
    </div>
    </div>
@endsection