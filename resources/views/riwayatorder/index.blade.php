@extends('layouts.main')
@section('container')
    <div class="container-fluid">
      <div class="card mx-auto mt-5 shadow-lg rounded-0" style="width: 50rem">
        <div class="card-header">
          <h3>Riwayat Order</h3>
        </div>
        <div class="card-body">
          <table class="table table-warning">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nama Makanan</th>
                <th>Jumlah Barang</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody class="table-light">

                @foreach ($menus as $menu)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $menu->user->name }}</td>
                          <td>{{ $menu->user->alamat }}</td>
                          <td>{{ $menu->menu->nama_makanan }}</td>
                          <td>{{ $menu->total_barang }}</td>
                          <td>Rp.{{ $menu->total_harga }}</td>                 
                        </tr>
                @endforeach
              </tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
