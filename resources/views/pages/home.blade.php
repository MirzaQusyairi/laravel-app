@extends("layout.landing")

@section("konten")
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active bg-abu">
      {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
      <img class="" src="img/logo-bg.png" alt="">

      <div class="container">
        <div class="carousel-caption text-start">
          <h2 class="fw-light">WELCOME TO <br><span class="hijau"><span class="fw-bold">BIG DATA</span> LABORATORY</span></h2>
          <p class="pt-5">Data Science Laboratory is one of the laboratory <br>
            in School of Computing, Telkom University</p>
          
        </div>
      </div>
    </div>
    <div class="carousel-item bg-abu">
      {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}

      <div class="container">
        <div class="carousel-caption">
          <h2 class="fw-light">Another example headline.</h2>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-success bg-hijau" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item bg-abu">
      {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}

      <div class="container">
        <div class="carousel-caption text-end">
          <h2 class="fw-light">One more for good measure.</h2>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
          <p><a class="btn btn-lg btn-success bg-hijau" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container pb-5 pt-4" id="topics">
  <h4 class="text-center fw-semibold">TOPICS</h4>
  <p class="text-center fw-light mt-3">we are divided into 3 discussion divisions</p>
  <div class="card border-0 shadow-lg mt-4 br-2">
    <div class="row">
      <div class="col text-center p-5">
        <img class="m-auto" src="img/product.png" alt="" height="200" width="200">
        <h4 class="fw-semibold">PRODUCTS</h4>
        <p class="fw-light mt-4">We study, analyze and also process data to extract insights that can be used to predict and solve complex problems through scientific methods, algorithms and system</p>
      </div>
      <div class="col text-center p-5">
        <img class="m-auto" src="img/datascience.png" alt="" height="200" width="200">
        <h4 class="text-center fw-semibold">DATA SCIENCE</h4>
        <p class="fw-light mt-4">We study and analyze problems to solve them by researching, designing and developing a digital product in the form of a website</p>
      </div>
      <div class="col text-center p-5">
        <img class="m-auto" src="img/blockchain.png" alt="" height="200" width="200">
        <h4 class="text-center fw-semibold">BLOCKCHAIN</h4>
        <p class="fw-light mt-4">We will study how a blockchain system works, find out how they can be implemented in various fields today and also build our very own blockchain system</p>
      </div>
    </div>
    
  </div>
</div>


<div class="bg-abuterang" id="activities">
  <div class="container">
    <h4 class="text-center fw-semibold mt-5 pt-4">RECENT ACTIVITIES</h4>
    <div class="row ps-4 pe-4 pb-5">
      <div class="col mt-5">
        <img class="rounded-3" src="img/post/175039.png" alt="">
        <h4 class="post-title fw-semibold mt-3">Kunjungan ke lab RPL & GDC</h4>
        <p class="fw-light">12 Agustus 2021</p>
        <p style="width: 90%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col mt-5">
        <img class="rounded-3" src="img/post/175032.png" alt="">
        <h4 class="post-title fw-semibold mt-3">Open Mind Database Laboratory 2020</h4>
        <p class="fw-light">12 Agustus 2021</p>
        <p style="width: 90%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col mt-5">
        <img class="rounded-3" src="img/post/175041.png" alt="">
        <h4 class="post-title fw-semibold mt-3">Responsi UTS 2019</h4>
        <p class="fw-light">12 Agustus 2021</p>
        <p style="width: 90%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
</div>

<div class="container" id="members">
  <h4 class="text-center fw-semibold pt-4">LABORATORY ASSISTANT MEMBERS</h4>
  <div class="row ps-4 pe-4 pb-5">
    <div class="col mt-5 text-center">
      <img class="rounded-circle shadow" src="img/member.jpg" alt="" width="200" height="200">
      <h4 class="fw-semibold mt-3 text-center" style="font-size:19px;">NAMA LENGKAP</h4>
      <p class="fw-light">Jabatan</p>
    </div>
    <div class="col mt-5 text-center">
      <img class="rounded-circle shadow" src="img/member.jpg" alt="" width="200" height="200">
      <h4 class="fw-semibold mt-3 text-center" style="font-size:19px;">NAMA LENGKAP</h4>
      <p class="fw-light">Jabatan</p>
    </div>
    <div class="col mt-5 text-center">
      <img class="rounded-circle shadow" src="img/member.jpg" alt="" width="200" height="200">
      <h4 class="fw-semibold mt-3 text-center" style="font-size:19px;">NAMA LENGKAP</h4>
      <p class="fw-light">Jabatan</p>
    </div>
  </div>
</div>

<div class="bg-abu prefooter">
  <img class="kanan" src="img/bg-kanan.png" alt="" style="margin-bottom: -23px;">
  <img class="kiri" src="img/bg-kiri.png" alt="" style="margin-top: -23px;">
  <div class="container text-center pt-5">
    <img src="img/logo.svg" width="45" alt="" class="d-inline-block align-middle mr-2">
    <p class="mt-4" style="color:white">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
    <h1 style="color:white; font-size:64px">Learn More With Us</h1>
    <button type="button" class="btn btn-success rounded-pill btn-sm fw-bold mt-5 mb-5">JOIN US</button>
  </div>
</div>

@endsection