@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="d-flex justify-content-center">
            <div class="col-md-10"> 
                <div class="card rounded-4 text-center">
                    <div class="card-header border-secondary bg-dark text-white text-center">
                        <h2>DATA TAMU</h2>
                    </div>
                    <div class="card-body">
                      <a href="{{ route('tamu.create') }}" class="btn btn-sm btn-primary m-2 mr-3" style="float: right">Tambah</a>
                        <table class="table table-bordered">
                            <thead class="text-uppercase">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIK Tamu</th>
                                <th scope="col">Nama Tamu</th>
                                <th scope="col">NO Telp</th>
                                <th class="col-2">Action</th>
                              </tr>
                            </thead>    
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                  <th>{{ $loop->iteration }}</th>
                                  <td>{{ $item->nik_tamu }}</td>
                                  <td>{{ $item->nama_tamu }}</td>
                                  <td>{{ $item->no_telp_tamu }}</td>
                                  <td>
                                    <a href="{{ route('tamu.edit', $item->nik_tamu) }}"
                                      class="btn btn-primary btn-sm text-lowercase"> update</a>

                                  <form class="d-inline" action="{{ route('tamu.destroy', $item->nik_tamu) }}" method="POST">
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