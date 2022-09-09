<!-- awal navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">

<a class="navbar-brand" href="{{url('/')}}">
  <img src="{{ url('frontend/images/logo.png') }}" alt="Logo Nomads">
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navb">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navb">
  <ul class="navbar-nav ms-auto me-3">
    <li class="nav-item mx-2">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Paket Travel</a>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-bs-toggle="dropdown">Services</a>

      <div class="dropdown-menu">
          <a href="#" class="dropdown-item">Link</a>
          <a href="#" class="dropdown-item">Link</a>
          <a href="#" class="dropdown-item">Link</a>
      </div>
  </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Testimonial</a>
    </li>


  </ul>
  <!-- Mobile BUtton -->
  @guest
  <form class="form-inline d-sm-block d-md-none">
    <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
        onclick="event.preventDefault(); location.href='{{url('login')}}';">
    Masuk
</button>
</form>

<!-- Desktop Button -->
<form class="form-inline my-2 my-lg-0 d-none d-md-block">
  <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
    onclick="event.preventDefault(); location.href='{{url('login')}}';">
  Masuk
</button>
</form>
  @endguest

  @auth
  <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
    @csrf
    <button class="btn btn-login my-2 my-sm-0 px-4">
    Keluar
</button>
</form>

<!-- Desktop Button -->
<form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
    @csrf
  <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
  Keluar
</button>
</form>
  @endauth
</div>

</nav>
<!-- akhir navbar -->
