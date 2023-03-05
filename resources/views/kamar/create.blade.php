@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8 p-3">
        <div class="card rounded-4">
            <div class="card-header border-secondary bg-dark text-white text-center">
                <h2>TAMBAH DATA</h2>
            </div>
            <div class="card-body">
          <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
             <div class="mb-3">
                <label for="id_kamar" class="form-label">ID kamar</label>
                <input type="text" class="form-control" name="id_kamar" required>
             </div>
             <div class="mb-3">
                <label for="jenis_kamar" class="form-label">jenis kamar</label>
                <input type="text" class="form-control" name="jenis_kamar" required>
             </div>
             <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" name="deskripsi" id="" cols="30" rows="5"></textarea>
                {{-- <input type="text" class="form-control" name="deskripsi" required> --}}
             </div>
             <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" required>
             </div>
             
             <a href="{{ route('kamar.index') }}" class="btn btn-primary btn-sm ms-2"
                style="float: right">kembali</a>
             <button type="submit" class="btn btn-danger btn-sm" style="float: right">Submit</button>
          </form>
        </div>
       </div>
    </div>
</div>
 </div>
@endsection