@extends('layouts.main')
@section('container')
    

    <!-- Form Makanan -->
    <section id="form_makanan">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Form Makanan</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            @if(session()->has('succes'))
            <div class="alert alert-success" role="alert">
              {{ session('succes') }}
            </div>
          @endif
            <form action="/menuform" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama Makanan</label>
                <input type="text" class="form-control @error('nama_makanan') is-invalid @enderror" id="name" aria-describedby="name" name="nama_makanan" />
                @error('nama_makanan')
                <div class="invalid feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" />
                @error('harga')
                <div class="invalid feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Makanan</label>
                <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi" id="exampleFormControlTextarea1"  rows="3"></textarea>
                @error('deskripsi')
                <div class="invalid feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">File foto Makanan</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile" name="image"/>
                @error('image')
                <div class="invalid feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label" style="display: block">Jumlah</label>
                <input type="number" class="form-control @error('jumlah_barang') is-invalid @enderror" name="jumlah_barang" />
                @error('jumlah_barang')
                <div class="invalid feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <button type="submit" class="btn btn-warning">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
  
