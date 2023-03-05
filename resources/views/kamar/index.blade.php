@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="d-flex justify-content-center">
            <div class="col-md-10"> 
                <div class="card rounded-4 text-center">
                    <div class="card-header border-secondary bg-dark text-white text-center">
                        <h2>DATA KAMAR</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('kamar.create') }}" class="btn btn-sm btn-primary m-2 mr-3" style="float: right">Tambah</a>
                        <table class="table table-bordered">
                            <thead class="text-uppercase">
                              <tr>
                                <th scope="col">No</th>
                                <th class="col-2" scope="col">ID Kamar</th>
                                <th class="col-2" scope="col">Jenis Kamar</th>
                                <th scope="col">Deskripsi</th>
                                <th class="col-1" scope="col">Harga</th>
                                <th class="col-2">Action</th>
                              </tr>
                            </thead>    
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                  <th>{{ $loop->iteration }}</th>
                                  <td>{{ $item->id_kamar }}</td>
                                  <td>{{ $item->jenis_kamar }}</td>
                                  <td>{{ $item->deskripsi }}</td>
                                  <td>{{ $item->harga }}</td>
                                  <td>
                                    <a href="{{ route('kamar.edit', $item->id_kamar) }}"
                                        class="btn btn-primary btn-sm"> update</a>

                                    <form class="d-inline" action="{{ route('kamar.destroy', $item->id_kamar) }}" method="POST">
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