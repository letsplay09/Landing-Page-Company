@extends('layouts.app', ['title' => 'Edit Data Kelurahan'])

@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="float-left">Edit Data Kelurahan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <form action="{{url('kelurahan/update')}}/{{$kelurahan->id}}" method="post" class="form-horizontal">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Kelurahan<b class="text-danger">*</b></label>
          <div class="col-sm-9">
            <input type="text" name="kelurahan" class="form-control" autocomplete="off" placeholder="Kelurahan" value="{{ old('kelurahan', $kelurahan->kelurahan) }}">
            @error('kelurahan')<p class="text-danger">{{$message}}</p>@enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Kecamatan<b class="text-danger">*</b></label>
          <div class="col-sm-9">
            <input type="text" name="kecamatan" class="form-control" autocomplete="off" placeholder="Kecamatan" value="{{ old('kecamatan', $kelurahan->kecamatan) }}">
            @error('kecamatan')<p class="text-danger">{{$message}}</p>@enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">kota<b class="text-danger">*</b></label>
          <div class="col-sm-9">
            <input type="text" name="kota" class="form-control" autocomplete="off" placeholder="kota" value="{{ old('kota', $kelurahan->kota) }}">
            @error('kota')<p class="text-danger">{{$message}}</p>@enderror
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between float-right">
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
    </div>
    </form>
    <!-- /.card-body -->
  </div>
</div>
@endsection
