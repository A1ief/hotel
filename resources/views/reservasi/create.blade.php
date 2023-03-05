@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8 p-3">
        <div class="card rounded-4">
            <div class="card-header border-secondary bg-dark text-white text-center">
                <h2>TAMBAH DATA</h2>
            </div>
            <div class="card-body text-uppercase">
          <form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
             <div class="mb-3">
                <label for="id_reservasi" class="form-label">id reservasi</label>
                <input type="text" class="form-control" name="id_reservasi" required>
             </div>
             <div class="mb-3">
                <label for="id-kamar" class="form-label">jenis kamar</label>
                <select class="form-select" aria-label="Default select example" name="id_kamar">
                    <option selected hidden>Open this select menu</option>
                    @foreach ($kamar as $item)
                       <option value="{{ $item->id_kamar }}">{{ $item->jenis_kamar }}</option>
                    @endforeach
                 </select>
             </div>
             <div class="mb-3">
                <label for="nik_tamu" class="form-label">nama tamu</label>
                <select class="form-select" aria-label="Default select example" name="nik_tamu">
                    <option selected hidden>Open this select menu</option>
                    @foreach ($tamu as $item)
                       <option value="{{ $item->nik_tamu }}">{{ $item->nama_tamu }}</option>
                    @endforeach
                 </select>
             </div>
             <div class="mb-3">
                <label for="tanggal_cin" class="form-label">tgl check in</label>
                <input type="date" class="form-control" name="tanggal_cin" required>
             </div>
             <div class="mb-3">
                <label for="tanggal_cout" class="form-label">tgl check out</label>
                <input type="date" class="form-control" name="tanggal_cout" required>
             </div>
             <a href="{{ route('reservasi.index') }}" class="btn btn-primary btn-sm ms-2"
                style="float: right">kembali</a>
             <button type="submit" class="btn btn-danger btn-sm" style="float: right">Submit</button>
          </form>
        </div>
       </div>
    </div>
</div>
 </div>
@endsection