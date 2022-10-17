@extends('layouts.app', ['title' => 'Data Kelurahan'])

@section('content')


<div class="card">
    <div class="card-header">
        <h5 class="float-left">Kelola Data Kelurahan</h5>
        <a type="button" href="{{route('kelurahan_tambah')}}" class="btn btn-primary btn-sm float-right">Tambah Data </a> 
    </div>
    @include('components.alert')
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kelurahan</th>
                <th scope="col">Nama Kecamatan</th>
                <th scope="col">Nama Kota</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($kelurahan as $key => $value)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$value->kelurahan}}</td>
                    <td>{{$value->kecamatan}}</td>
                    <td>{{$value->kota}}</td>
                    <td><div class="p-1 bd-highlight"><a href="{{url('kelurahan/edit')}}/{{$value->id}}" class="btn btn-warning btn-sm">Edit</a></div></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <div class="card-body">
</div>
@endsection
