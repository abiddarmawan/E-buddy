@extends('layouts.main')
@section('container')

    <div class="container-kalkulator container-fluid">
        <div class="row justify-content-center">
            <div class="col">
              <form action="/kalkulator" method="POST">
                  @csrf
                    <div class="bagian-kiri">
                        <!--Berat Badan -->
                        <label for="berat">Masukan Berat Badan</label>
                        <input type="number" class="form-control  @error('berat_badan') is-invalid @enderror" id="berat" placeholder="Berat Badan" name="berat_badan">
                        @error('berat_badan')
                            <div class="invalid feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    <!--tinggi badan -->
                        <label for="tinggi">Masukan Tinggi Badan</label>
                        <input type="number" class="form-control  @error('tinggi_badan') is-invalid @enderror" id="tinggi" placeholder="Tinggi Badan" name="tinggi_badan">
                        @error('tinggi_badan')
                            <div class="invalid feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <!--  button Hitung -->
                    <div class="button-kiri">
                      <div class="container text-center">
                        <button class="hitung text-decoration-none" type="submit">Hitung</button>
                      </div>
                    </div>
              </form>
            </div>

            <div class="col">
                <div class="bagian-kanan">
                    <h2 class="text-center">FYI</h2>
                    <h4 class="text-center">(For Your Information)</h4>
                    <div class="justify-content-center align-items-center text-center">
                        <img src="/image/index.jpg" alt="IBM" height="200px">
                        <p>Indeks Massa Tubuh (IMT) adalah salah satu cara 
                        untuk mengetahui rentang berat badan ideal Anda 
                        dan memprediksi seberapa besar risiko gangguan 
                        kesehatan Anda. Metode ini digunakan untuk menentukan
                        berat badan yang sehat 
                        berdasarkan berat dan tinggi badan.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="footer-menu container-fluid text-end justify-content-center">
      <div class="row">
        <div class="col-5">
          <h3 class="text-center">E-Buddy</h3>
          <p>E-buddy merupakan aplikasi yang membantu anda dalam meningkatkan kualitas kehidupan anda dengan
            menjadikan anda dapat memantau index massa tubuh dan melakukan diet dari video yang sudah di sediakan.
          </p>
        </div>
        <div class="col">
          <p>Hubungi Kami</p>
          <div class="hubungi">
            <p><img src="/image/telephone-handle-silhouette.png" alt="telephone" style="width: 30px;">
            : +6229013940</p>
            <p><img src="/image/email (1).png" alt="email" style="width: 30px;"> : EBuddy@gmail.com</p>
          </div>
        </div>
        <div class="col">
          <P>Ikuti Kami</P>
          <a href="#"><img src="/image/facebook.png" alt="facebook" style="width: 30px;"></a>
          <a href="#"><img src="/image/instagram.png" alt="instagram" style="width: 30px;"></a>
          <a href="#"><img src="/image/twitter.png" alt="twitter" style="width: 30px;"></a>
          <a href="#"><img src="/image/youtube.png" alt="youtube" style="width: 30px;"></a>
        </div>
      </div>
      
      <p class="text-center">Copyright © 2023 E-Buddy. All Rights Reserved.</p>
    </div>
@endsection()