@extends('layouts.main')

@section('container')
  <div class="main-profile container-fluid">
    <div class="row">
        <div class="col-4 justify-content-center text-center bg-secondary shadow p-3 mb-5" style="height: 200px">
          <div class="isi container">

            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
              @if($user->image)
                <img src="{{ asset('storage/' . $user->image) }}" class="profile-pic" alt='Photo'>
              @else
              <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"/>
              @endif
              <span class="text-black-50">{{ $user->email }}</span><span> </span>
            </div>
            <div class="text-center">
              <form action="/profile/photo/{{ $user->name }}" method="POST">
                    @method('delete')
                    @csrf
                    <input  type="hidden"  name="oldImage" value="{{ $user->image }}">
                    <button class="hapus-foto btn btn-danger profile-button" type="sumbit">Hapus foto</button>
              </form>
            </div>
          </div>
        </div>

          <div class="col">
            @if(session()->has('succes'))
              <div class="alert alert-success" role="alert">
                {{ session('succes') }}
              </div>
            @endif
            <form  method="POST" action="/profile/{{ $user->name }}" enctype="multipart/form-data" >
              
              @method('put')
              @csrf
                  
                <div class="row mt-3">
                  <div class="col-md-12"><label class="labels">Nama</label>
                    <input type="text"  class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Nomor Telepon" name="name" value="{{ old('name',$user->name )}}" />
                    @error('nomor_telpon')
                    <div class="invalid feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-12"><label class="labels">Nomor Telepon</label>
                    <input type="number"  class="form-control @error('nomor_telpon') is-invalid @enderror" placeholder="Masukan Nomor Telepon" name="nomor_telpon" value="{{ old('nomor_telpon',$user->nomor_telpon )}}" />
                    @error('nomor_telpon')
                    <div class="invalid feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-12"><label class="labels">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukan Alamat" value="{{ old('alamat',$user->alamat )}}" />
                    @error('alamat')
                    <div class="invalid feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>
                  <div class="col-md-12"><label class="labels">Kode Pos</label>
                    <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" placeholder="Masukan Kode Pos" value="{{ old('kode_pos',$user->kode_pos )}}" />
                    @error('kode_pos')
                    <div class="invalid feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-12"><label class="labels">Photo profile</label>
                   
                    <input class="form-control" type="file" id="image" name="image">
                    @error('kode_pos')
                    <div class="invalid feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="mt-5 text-center">
                  <button class="simpan-tombol btn btn-warning profile-button text-white" type="sumbit">Simpan Profile</button>
                </div>
          </form>
         </div>
        
    </div>
  </div>
@endsection