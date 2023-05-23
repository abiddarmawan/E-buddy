@extends('landingpage.layouts.main')
@section('container')
      <!---------------title------------------>
    <div class="title-atas container-fluid justify-content-center text-center" style="width: cover; height: auto">
        <div class="title container-fluid">
            <h1>Selamat Datang di E-Buddy</h1>
            <h5>E-Buddy membuat anda semakin sayang dengan tubuh anda dan anda akan selalu tersenyum dengan kesehatan anda.</h5>
            <div class="container-fluid">
                <a href="/register">
                     <button type="button" class="btn btn-warning btn-lg" style="color: white; width: 200px; height: 60px;">Bergabung</button>
                </a>
            </div>
        </div>
    </div>

    <div class="fitur container-fluid justify-content-center text-center" style="height: auto;">
        <div class="row">
            <div class="col">
              <h1><i class="bi bi-calculator"></i></h1>
              <h5>Menghitung Index Massa Tubuh</h5>
              <p>Hidup sehat dimulai dengan menghitung BMI yang tepat dan menjaga berat badan yang sehat.</p>
            </div>
            <div class="col">
              <h1><i class="bi bi-caret-right-square-fill"></i></h1>  
              <h5>Vidio Tips Diet</h5>
              <p>Tonton vidio tips diet untuk membantu kamu dalam program diet!</p>
            </div>
            <div class="col">
              <h1><i class="bi bi-clock-history"></i></h1>
              <h5>Riwayat Index Massa Tubuh</h5>
              <p>Riwayat BMI yang teratur, jaminan kesehatan di masa depan.</p>
            </div>
            <div class="col">
              <h1><i class="bi bi-cart"></i></h1>
              <h5>Menjual Makanan Sehat</h5>
              <p>Menjual Aneka Makanan Sehat untuk Mensuport Kamu Dalam Program Diet</p>
            </div>
        </div>
    </div>

    <!--Isi Konten-->
    <div class="isi-konten container-fluid bg-light" style="height: auto;">
      <div class="dalem container-fluid shadow bg-white p-3 mb-5" style="width: 90%; height: auto;">
        <div class="text-center">
          <h1>Konten E-Buddy</h1>
        </div>

        <div class="row justify-content-center text-center">
          <div class="col">
            <h3>Video</h3>
            <img src="/image/video.jpg" alt="" style="height: 230px;">
            <p>Video ini memberikan tips dan saran tentang cara menjaga kesehatan dengan pola hidup sehat. 
              Video ini dibuat oleh tim ahli kesehatan dan menampilkan berbagai informasi yang berguna untuk 
              meningkatkan kesehatan fisik dan mental.</p>
          </div>
          <div class="col">
            <h3>Menu Makanan</h3>
            <img src="/image/menu2.jpg" alt="" style="height :230px;">
            <p>Menu makanan sehat yang dapat membantu pengguna untuk mencapai pola makan sehat dan seimbang.</p>
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
@endsection

  