@extends('layouts.main')
@section('container')
    <div class="container-fluid">
      <div class="card mx-auto mt-5 shadow-lg rounded-0" style="width: 50rem">
        <div class="card-header">
          <h3>Keranjang</h3>
        </div>
        <div class="card-body">
          <table class="table table-warning">
            @if(session()->has('gagal'))
            <div class="alert alert-primary text-center" role="alert">
              {{ session('gagal') }}
            </div>
            @endif
            @if(session()->has('succes'))
            <div class="alert alert-success text-center" role="alert">
              {{ session('succes') }}
            </div>
           @endif
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nama Makanan</th>
                <th>Jumlah Barang</th>
                <th>Harga</th>
                <th>Status barang</th>
              </tr>
            </thead>
            <tbody class="table-light">

                @foreach ($orders as $order)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $order->user->name }}</td>
                          <td>{{ $order->user->alamat}}</td>
                          <td>{{ $order->menu->nama_makanan }}</td>
                          <td>{{ $order->total_barang }}</td>
                          <td>Rp.{{ $order->total_harga }}</td>
                          <td>{{$order->status}}</td>
                          <td>
                              @if($order->status === "Barang Tersedia")
                              <div class="d-inline-block">
                                <form action="/order/t/{{ $order->id }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $order->menu->id }}">
                                    <button class="btn btn-warning btn-sm mx-2 text-black d-inline-block">order</button>
                                </form>
                            </div>
                              @endif
                          </td>
                          <td>         
                            @if($order->status === "Barang Tidak Tersedia" || $order->status === 'Barang Tersedia')     
                              <div class="d-inline-block">
                                <form action="/order/del/{{ $order->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    
                                    <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                </form>
                            </div>
                            @endif
                          </td>
                        </tr>
                @endforeach
              </tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
