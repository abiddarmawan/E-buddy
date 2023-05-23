
@extends('layouts.main')

@section('container')
    <div class="luar-content container-fluid" style="height: auto">
      <div class="dalam-content container bg-light justify-content-center text-center shadow p-3 mb-5" style="height: auto; width: 90%">
        <h1>Halo, Selamat Datang di <span class="text-warning">E-Buddy</span></h1>
        <h5>Hai <span class="text-warning">{{ auth()->user()->name }}</span> Apakah kau siap menjalani Hari ini?</h5>
      </div>
    </div>

    <div class="container-bawah">
      <div class="row">
          <div class="col justify-content-center text-center ">
            <h3>Menu</h3>
            <img src="/image/menu.jpg" alt="" style="height: 300px;">

            <div class="row text-center justify-content-center">
              <div class="col-7">
                  <p>Kami menyediakan pilihan menu kepada user apa
                      bila user ingin membuat badan lebih sehat dengan
                      makan yang teratur.
                  </p>
                </div>
            </div>

          </div>
          <div class="col justify-content-center text-center">
            <h3>Calculator</h3>
            <img src="/image/kalkulator.jpg" alt="Calculator" style="height: 300px;">
            <div class="row text-center justify-content-center">
                <div class="col-7">
                    <p>Kalkulator membantu anda memonitoring bagaimana kondisi tubuh anda dengan hasil perhitungan yang akurat.
                    </p>
                </div>
            </div>
          </div>

          <div class="col justify-content-center text-center">
          <h3>Video</h3>
          <img src="/image/wk.jpg" alt="" style="height: 300px;">
          <div class="row text-center justify-content-center">
              <div class="col-7">
                  <p>Video yang kami hadirkan merupakan video terpilih dengan tujuan yang spesifik agar kamu lebih percaya diri dengan bantuan kami.
                  </p>
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

@endsection
