@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8 p-3">
        <div class="card rounded-4">
            <div class="card-header border-secondary bg-dark text-white text-center">
                <h2>UPDATE DATA</h2>
            </div>
            <div class="card-body text-uppercase">
          <form action="{{ route('tamu.update', $tamu->nik_tamu) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('put')
             <div class="mb-3">
                <label for="nik_tamu" class="form-label">NIK Tamu</label>
                <input type="text" class="form-control" name="nik_tamu" value="{{ $tamu->nik_tamu }}" required>
             </div>
             <div class="mb-3">
                <label for="nama_tamu" class="form-label">NAma tamu</label>
                <input type="text" class="form-control" name="nama_tamu" value="{{ $tamu->nama_tamu }}" required>
             </div>
             <div class="mb-3">
                <label for="no_telp_tamu" class="form-label">NO TElp</label>
                <input type="text" class="form-control" name="no_telp_tamu" value="{{ $tamu->no_telp_tamu }}" required>
             </div>
             <a href="{{ route('tamu.index') }}" class="btn btn-primary btn-sm ms-2"
                style="float: right">kembali</a>
             <button type="submit" class="btn btn-danger btn-sm" style="float: right">Submit</button>
          </form>
        </div>
       </div>
    </div>
</div>
 </div>
@endsection