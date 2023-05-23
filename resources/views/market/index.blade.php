 
@extends('layouts.main')

@section('container')
    
    
    @if ($menus->count())
        <div class="card mb-3">
            <div style="max-height: 300px; overflow:hidden">
                <img src="{{ asset('storage/' . $menus[0]->image) }}"  class="img-fluid">
            </div>
                 
         
            <div class="card-body text-center">
                <h3 class="card-title">{{ $menus[0]->nama_makanan }}</h3>
                <div class="menu-item">
                    <h3>{{ $menus[0]->nama }}</h3>
                    <p>{{ $menus[0]->deskripsi }}</p>
                    <h6 class=" badge bg-warning text-dark">Rp{{ $menus[0]->harga }}</h6>
                    <p class="quantity">tersisa {{ $menus[0]->jumlah_barang }} buah</p>
                </div>
                @can('user')
                <div class="d-inline-block">
                    <div style="margin-left: 20px">
                        <form action="\menu\add\{{ $menus[0]->id }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="quantity" class="fs-1"> Jumlah Barang: </label>
                                <div class="col-ms-6 ml-2">
                                    <input type="number" name="total_barang" id="quantity" class="form-control form-control-sm" min="1" max="{{ $menus[0]->jumlah_barang }}" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm col-auto d-flex w-51">
                                Tambah Keranjang
                            </button>
                        </form>
                    </div>
                </div>
                @endcan
                @can('admin')
                <div class="d-inline-block">
                   <form action="\menu\del\{{ $menus[0]->id }}" method="POST">
                       @method('DELETE')
                       @csrf
                       <button type="submit" class="btn btn-danger btn-sm mt-2">Delete</button>
                   </form>
                </div>
                <a class="btn btn-warning btn-sm mx-2 text-black mt-2" href="\menu\edit\{{ $menus[0]->id }}">Edit</a>
                @endcan
            </div>
        </div>
 
        
        <div class="container">
                <div class="row">
                    @foreach($menus->skip(1) as $menu )
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="position-absolute bg-dark px-3 py-2  text-white">
                                        {{ $menu->nama_makanan}}
                                </div>
                        
                                <img src="{{ asset('storage/' . $menu->image) }}" class="card-img">
                      
                                <div class="card-body">
                                        <div class="menu-item">
                                            <h3>{{ $menu->nama_makanan }}</h3>
                                            <p class="description">{{ $menu->deskripsi }}</p>
                                            <h6 class=" badge bg-warning text-dark">Rp{{ $menu->harga }}</h6>
                                            <p>tersisa {{ $menu->jumlah_barang }} buah</p>
                                        </div>
                                        @can('user')
                                        <div class="d-inline-block">
                                            <div style="margin-left: 15px">
                                                <form action="\menu\add\{{ $menu->id }}" method="POST">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label for="quantity"> Jumlah Barang: </label>
                                                        <div class="col-ms-6 ml-2">
                                                            <input type="number" name="total_barang" id="quantity" class="form-control form-control-sm" min="1" max="{{ $menu->jumlah_barang }}" required>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-sm col-auto d-flex w-51 text-center">
                                                        Tambah Keranjang
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        @endcan
                                        @can('admin')
                                        <div class="d-inline-block" >
                                           <form action="\menu\del\{{ $menu->id }}" method="POST">
                                               @method('DELETE')
                                               @csrf
                                               <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                           </form>
                                       </div>
                                       <a class="btn btn-warning btn-sm mx-2 text-black" href="\menu\edit\{{ $menu->id }}">EDIT</a>
                                       @endcan
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>       
        </div>

    @else
        <p class="text-center fs-4">NO POST FOUND</p>
    @endif


@endsection


 
