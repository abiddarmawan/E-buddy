@extends('layouts.main')
@section('container')
    
    <div class="container">
      <div class="row my-3">
        <div class="col-md">
          <h2 class="text-uppercase text-center fw-bold">Catatan</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <a href="/kalkulator" class="btn btn-success"><i class="bi bi-plus-circle-dotted"></i>&nbsp;Tambah</a>
          @if(session()->has('succes'))
          <div class="alert alert-success mt-3 text-center" role="alert">
            {{ session('succes') }}
          </div>
        @endif
        </div>
      </div>
      <div class="tablecatatan mt-3">
        <table class="table table-warning">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>tinggi badan</th>
              <th>Berat badan</th>
              <th>IMT</th>
              <th>Status</th>
              <th>Waktu</th>
              
            </tr>
          </thead>
          <tbody class="table-light">
            @foreach ($users as $user)
              @foreach ($user->berat as $berat)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $user->name }}</td>
                  {{-- {{ dd($user->berat[0]->berat_badan) }} --}}
                  <td><span class="berat">{{ $berat->tinggi_badan }}</span>&nbsp;cm</td>
                  <td><span class="berat">{{$berat->berat_badan}}</span>&nbsp;kg</td>
                  <td><span class="imt">{{ $berat->total}}</span></td>
                  <td><span>{{ $berat->status }}</span></td>
                  <td><span>{{ $berat->created_at->diffForHumans() }}</span></td>
                  <td>
                    <form action="/histori/delete/{{ $berat->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" class="badge bg-danger " onclick="return confirm('are you sure ?')">
                        <i class="bi bi-x-circle"></i>
                        <span  style="font-style: normal">delete</span>
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
   
@endsection