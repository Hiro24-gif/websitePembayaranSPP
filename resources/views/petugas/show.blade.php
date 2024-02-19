@extends('template.master')

@section('h1')
    Petugas
    @endsection
@section('rowTengah')
<div>
    <h1>Petugas Detail</h1>
    <h3>ID: {{ $petuga->id_petugas}}</h3>
    <h3>Username: {{ $petuga->username }}</h3>
    <h3>Password: {{ $petuga->password }}</h3>
    <h3>Nama Petugas: {{ $petuga->nama_petugas }}</h3>
    <h3>Level: {{ $petuga->level }}</h3>
    <br>
    <a href="{{route('petugas.index')}}" class="btn btn-info">Back</a>
</div>
@endsection
