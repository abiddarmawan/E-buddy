@extends('layouts.main')
@section('container')
    

    <!-- Form Makanan -->
    <section id="form_makanan">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>EDIT MAKANAN</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="/menu/edit" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama Makanan</label>
                <input type="text" class="form-control @error('nama_makanan') is-invalid @enderror" id="name" aria-describedby="name" name="nama_makanan" value="{{ $menu->nama_makanan }}"/>
                <input type="hidden" class="form-control"  name="id" value="{{ $menu->id }}"/>
                @error('nama_makanan')
                    <div class="invalid feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Harga</label>
                <input type="string" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $menu->harga }}"/>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Makanan</label>
                <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi" id="exampleFormControlTextarea1"  rows="3">{{ $menu->deskripsi }}</textarea>
              </div>
              <div class="mb-3">
                @if ($menu->image)
                <img src="{{ asset('storage/' . $menu->image) }}"class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <label for="formFile" class="form-label">File foto Makanan</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile" name="image"/>
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label" style="display: block">Jumlah</label>
                <input type="number" class="form-control @error('jumlah_barang') is-invalid @enderror" name="jumlah_barang"  value="{{ $menu->jumlah_barang }}"/>
              </div>

              <button type="submit" class="btn btn-warning">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
  
