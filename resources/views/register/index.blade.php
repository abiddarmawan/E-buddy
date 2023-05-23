@extends('register.layouts.main')
@section('container')

    <div class="box-register container-fluid text-center items-align-center bg-light shadow p-3 mb-5" style="width: 500px; height: auto;">
      <h1 class="text-start">E-Buddy</h1>
      <p>Selamat datang di E-Buddy</p>

      <form action="/register" method="POST" onsubmit="return validasi()">
        @csrf
              <label for="Nama">Nama Pengguna</label>
              <div class="row">
                  <div class="col">
                      <!--nama depan-->
                      <input class="firstname form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Nama" autocomplete="off">
                      @error('name')
                      <div  class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                
              </div>

              <!--EMAIL-->
              <label for="email">Email</label>
              <input class="email form-control  @error('email') is-invalid @enderror" type="email" name="email" placeholder="Masukan Email" autocomplete="off">
              @error('email')
                <div  class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror

              <!--Password-->
              <label for="password">Password</label>
              <input class="password form-control  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Masukan Password" autocomplete="off">
              @error('password')
                <div  class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              <!--reType Password-->
              <!--submit button-->
              <button type="submit">Register</button>
          <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
      </form>
    </div>

@endsection
