@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero-section text-center">
  <div class="container">
    <h6>Education Malaysia Indonesia</h6>
    <h1 class="display-5 fw-bold">Wujudkan Impian Pendidikan Tinggi di Malaysia</h1>
    <p class="lead">Bergabunglah dengan ribuan mahasiswa Indonesia yang telah meraih kesuksesan di Malaysia.</p>
    <a href="#" class="btn btn-yellow btn-lg mt-3">Mulai Perjalanan Anda</a>
  </div>
</section>

<section class="py-5 text-center">
  <div class="container">
    <div class="row">
      <div class="col"><h3 class="fw-bold text-danger">50,000+</h3><p>Mahasiswa Indonesia</p></div>
      <div class="col"><h3 class="fw-bold text-danger">20+</h3><p>Universitas Terkemuka</p></div>
      <div class="col"><h3 class="fw-bold text-danger">100+</h3><p>Program Studi</p></div>
      <div class="col"><h3 class="fw-bold text-danger">95%</h3><p>Tingkat Kepuasan</p></div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="section-heading mb-4">Mengapa Memilih Malaysia?</h2>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card h-100 p-4">
          <div class="card-icon text-danger"><i class="bi bi-globe"></i></div>
          <h5>Pendidikan Berkualitas Dunia</h5>
          <p>Universitas Malaysia diakui secara internasional dengan ranking dunia tinggi.</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card h-100 p-4">
          <div class="card-icon text-danger"><i class="bi bi-currency-dollar"></i></div>
          <h5>Biaya Terjangkau</h5>
          <p>Biaya hidup dan pendidikan lebih terjangkau dibanding negara lain.</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card h-100 p-4">
          <div class="card-icon text-danger"><i class="bi bi-people"></i></div>
          <h5>Komunitas Indonesia</h5>
          <p>Komunitas mahasiswa Indonesia besar dan suportif di Malaysia.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
