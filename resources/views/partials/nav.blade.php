<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ms-3" href="#">E-Buddy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      @can('user')
        
      <li>
        <a class="nav-link" href="/homepage">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kalkulator">Kalkulator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/vidio">Video</a>
      </li>
      @endcan
      <li class="nav-item">
        <a class="nav-link" href="/market">Market</a>
      </li>
      @can('admin')
      <li class="nav-item">
        <a class="nav-link" href="/menuform">Form Makanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/riwayatorder">Riwayat Order</a>
      </li>
      @endcan
      @can('user')
      <li class="nav-item">
        <a class="nav-link" href="/histori/{{ auth()->user()->id }}">Catatan</a>
      </li>
     
      <li class="nav-item">
        <a href="/profile" class="nav-link">Profile</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/order/{{ auth()->user()->id }}">
          <button type="button" class="btn position-relative">
            <i class="bi bi-cart-fill"></i>
            <span class="position-absolute top-0 start-80"></span>
          </button>
        </a>
      </li>
      @endcan
    </ul>
  </div>
  <div class="navbar-button ms-auto">
    @auth
    <form action="/logout" method="POST">
      @csrf
      <button type="sumbit" class="btn btn-warning">Logout</button>
    </form>
    @else
    <a href="/login">
      <button type="button" class="btn btn-warning">Login</button>
    </a>
    @endauth
  </div>      
</nav>
