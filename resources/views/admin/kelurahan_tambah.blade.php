@extends('layouts.app', ['title' => 'Tambah Data Kelurahan'])

@section('content')
<div>
    <div class="card">
        <div class="card-header">
          <h3 class="float-left">Tambah Data Kelurahan</h3>
        </div>
        <form action="{{route('kelurahan')}}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="card-body">
                    
                </div>
            </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
    </div>
</div>
@endsection
