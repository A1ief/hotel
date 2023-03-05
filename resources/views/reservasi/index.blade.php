@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="d-flex justify-content-center">
            <div class="col-md-10"> 
                <div class="card rounded-4 text-center">
                    <div class="card-header border-secondary bg-dark text-white text-center">
                        <h2>DATA RESERVASI</h2>
                    </div>
                    <div class="card-body">
                      <a href="{{ route('reservasi.create') }}" class="btn btn-sm btn-primary m-2 mr-3" style="float: right">Tambah</a>
                        <table class="table table-bordered">
                            <thead class="text-uppercase">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID reservasi</th>
                                <th scope="col">id kamar</th>
                                <th scope="col">nik tamu</th>
                                <th scope="col">tanggal check in</th>
                                <th scope="col">tanggal check out</th>
                                <th class="col-2">Action</th>
                              </tr>
                            </thead>    
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                  <th>{{ $loop->iteration }}</th>
                                  <td>{{ $item->id_reservasi }}</td>
                                  <td>{{ $item->kamar->jenis_kamar }}</td>
                                  <td>{{ $item->tamu->nama_tamu }}</td>
                                  <td>{{ $item->tanggal_cin }}</td>
                                  <td>{{ $item->tanggal_cout }}</td>
                                  <td>
                                    <a href="{{ route('reservasi.edit', $item->id_reservasi) }}"
                                      class="btn btn-primary btn-sm text-lowercase"> update</a>

                                  <form class="d-inline" action="{{ route('tamu.destroy', $item->id_reservasi) }}" method="POST">
                                      @method('delete')
                                      @csrf
                                      <button type="submit" class="btn btn-danger btn-sm"> delete</button>
                                   </form>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection