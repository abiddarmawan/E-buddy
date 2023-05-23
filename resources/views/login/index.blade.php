@extends('login.layouts.main')
@section('container')
  
    <div class="box-login container-fluid text-center items-align-center bg-light shadow p-3 mb-5" style="width: 500px; height: auto;">
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
        </div>
      @endif
      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
        </div>
       @endif
      <h1 class="text-start">E-Buddy</h1>
      <p>Selamat datang jangan lupa isi data ya!</p>

      <form  method="post" onsubmit="return validasi()" action="/login">
        @csrf
        <!--EMAIL-->
        <label for="email">Email</label>
        <input class="email form-control  @error('email') is-invalid @enderror" type="email" name="email" placeholder="Masukan Email" autocomplete="off">
        <div id="email_error" class="text-center">Mohon isi Email</div>
        @error('email')
          <div class="invalid feedback">
            {{ $message }}
          </div>
        @enderror

        <!--Password-->
        <label for="password">Password</label>
        <input class="password form-control  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Masukan Password" autocomplete="off">
        @error('password')
          <div class="invalid feedback">
            {{ $message }}
          </div>
        @enderror
        <div id="password_error" class="text-center">Mohon isi Password dengan Benar</div>
        <!--submit button-->
        <button type="submit">Login</button>
        <div class="container">
          <span class="d-inline">Belum punya akun? <a href="/register" class="signup d-inline text-decoration-none">Ayo bikin akun</a></span>
        </div>

      </form>
    </div>
@endsection
