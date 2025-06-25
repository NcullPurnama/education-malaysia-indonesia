@extends('layouts.app')

@section('content')
<div class="container py-5">

  {{-- Hero Section --}}
  <div class="text-center mb-5">
    <span class="badge bg-danger-subtle text-danger mb-3">Studi di Malaysia</span>
    <h1 class="fw-bold display-5">Mengapa Memilih Malaysia?</h1>
    <p class="text-muted lead mx-auto" style="max-width: 700px;">
      Malaysia menawarkan pendidikan berkualitas dunia dengan biaya terjangkau, lingkungan multikultural, dan peluang karir yang luas
    </p>
    <a href="/application-guide" class="btn btn-danger btn-lg mt-3">Mulai Aplikasi Sekarang</a>
  </div>

  {{-- Key Benefits --}}
  <div class="row text-center g-4 mb-5">
    <div class="col-md-3">
      <div class="p-4 border rounded h-100">
        <i class="bi bi-globe2 text-danger fs-1 mb-3"></i>
        <h5 class="fw-bold">Kualitas Dunia</h5>
        <p class="text-muted">Universitas Malaysia diakui secara internasional dengan ranking dunia yang tinggi</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="p-4 border rounded h-100">
        <i class="bi bi-cash-stack text-danger fs-1 mb-3"></i>
        <h5 class="fw-bold">Biaya Terjangkau</h5>
        <p class="text-muted">Biaya kuliah dan hidup yang lebih murah dibanding negara maju lainnya</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="p-4 border rounded h-100">
        <i class="bi bi-people-fill text-danger fs-1 mb-3"></i>
        <h5 class="fw-bold">Multikultural</h5>
        <p class="text-muted">Lingkungan yang beragam dengan mahasiswa dari berbagai negara</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="p-4 border rounded h-100">
        <i class="bi bi-geo-alt-fill text-danger fs-1 mb-3"></i>
        <h5 class="fw-bold">Lokasi Strategis</h5>
        <p class="text-muted">Dekat dengan Indonesia dan mudah dijangkau untuk pulang kampung</p>
      </div>
    </div>
  </div>

  {{-- Tabs Section --}}
  <ul class="nav nav-tabs mb-4" id="studyTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="universities-tab" data-bs-toggle="tab" data-bs-target="#universities" type="button">Universitas</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="programs-tab" data-bs-toggle="tab" data-bs-target="#programs" type="button">Program Studi</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="costs-tab" data-bs-toggle="tab" data-bs-target="#costs" type="button">Biaya</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="life-tab" data-bs-toggle="tab" data-bs-target="#life" type="button">Kehidupan</button>
    </li>
  </ul>

  <div class="tab-content" id="studyTabContent">

    {{-- Universitas --}}
    <div class="tab-pane fade show active" id="universities" role="tabpanel">
      <div class="row g-4">
        @php
          $universities = [
            ["name" => "Universiti Malaya (UM)", "ranking" => "#70 QS World Ranking", "location" => "Kuala Lumpur", "programs" => "Kedokteran, Teknik, Bisnis"],
            ["name" => "Universiti Putra Malaysia (UPM)", "ranking" => "#158 QS World Ranking", "location" => "Serdang, Selangor", "programs" => "Pertanian, Veteriner, Teknik"],
            ["name" => "Universiti Kebangsaan Malaysia (UKM)", "ranking" => "#129 QS World Ranking", "location" => "Bangi, Selangor", "programs" => "Sains, Teknologi, Sosial"]
          ];
        @endphp
        @foreach($universities as $uni)
        <div class="col-md-4">
          <div class="card h-100">
            <img src="/placeholder.svg" class="card-img-top" alt="{{ $uni['name'] }}">
            <div class="card-body">
              <h5 class="card-title">{{ $uni['name'] }}</h5>
              <span class="badge bg-secondary mb-2">{{ $uni['ranking'] }}</span>
              <p class="mb-1"><i class="bi bi-geo-alt text-muted"></i> {{ $uni['location'] }}</p>
              <p class="mb-0"><i class="bi bi-book text-muted"></i> {{ $uni['programs'] }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Program Studi --}}
    <div class="tab-pane fade" id="programs" role="tabpanel">
      <div class="row g-4">
        @php
          $programs = [
            ["category" => "Teknik", "count" => "25+ Program", "icon" => "⚙️"],
            ["category" => "Kedokteran", "count" => "15+ Program", "icon" => "🏥"],
            ["category" => "Bisnis", "count" => "30+ Program", "icon" => "💼"],
            ["category" => "IT & Komputer", "count" => "20+ Program", "icon" => "💻"],
            ["category" => "Sains", "count" => "18+ Program", "icon" => "🔬"],
            ["category" => "Seni & Desain", "count" => "12+ Program", "icon" => "🎨"],
          ];
        @endphp
        @foreach($programs as $prog)
        <div class="col-md-4">
          <div class="card h-100 text-center">
            <div class="card-body">
              <div class="fs-2">{{ $prog['icon'] }}</div>
              <h5 class="card-title">{{ $prog['category'] }}</h5>
              <p class="text-muted">{{ $prog['count'] }}</p>
              <a href="#" class="btn btn-outline-secondary w-100">Lihat Program</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Biaya --}}
    <div class="tab-pane fade" id="costs" role="tabpanel">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body">
              <h5><i class="bi bi-mortarboard text-danger me-2"></i>Biaya Kuliah (Per Tahun)</h5>
              <ul class="list-group list-group-flush mt-3">
                <li class="list-group-item d-flex justify-content-between"><span>Universitas Negeri</span><span>RM 3,000 - 8,000</span></li>
                <li class="list-group-item d-flex justify-content-between"><span>Universitas Swasta</span><span>RM 15,000 - 40,000</span></li>
                <li class="list-group-item d-flex justify-content-between"><span>Program Kedokteran</span><span>RM 40,000 - 80,000</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body">
              <h5><i class="bi bi-currency-dollar text-danger me-2"></i>Biaya Hidup (Per Bulan)</h5>
              <ul class="list-group list-group-flush mt-3">
                <li class="list-group-item d-flex justify-content-between"><span>Akomodasi</span><span>RM 300 - 800</span></li>
                <li class="list-group-item d-flex justify-content-between"><span>Makanan</span><span>RM 400 - 600</span></li>
                <li class="list-group-item d-flex justify-content-between"><span>Transportasi</span><span>RM 100 - 200</span></li>
                <li class="list-group-item d-flex justify-content-between"><span>Lain-lain</span><span>RM 200 - 300</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Kehidupan --}}
    <div class="tab-pane fade" id="life" role="tabpanel">
      <div class="row g-4">
        <div class="col-md-6">
          <h4 class="fw-bold">Kehidupan Mahasiswa</h4>
          <div class="mb-3">
            <h6>Akomodasi</h6>
            <p class="text-muted">Pilihan asrama kampus, apartemen, atau rumah kos dengan fasilitas lengkap</p>
          </div>
          <div class="mb-3">
            <h6>Makanan</h6>
            <p class="text-muted">Beragam pilihan makanan halal, termasuk masakan Indonesia dan Asia</p>
          </div>
          <div class="mb-3">
            <h6>Transportasi</h6>
            <p class="text-muted">Sistem transportasi publik yang baik dengan tarif mahasiswa</p>
          </div>
        </div>
        <div class="col-md-6">
          <img src="/placeholder.svg" class="img-fluid rounded shadow" alt="Student Life">
        </div>
      </div>
    </div>

  </div>

  {{-- CTA --}}
  <div class="bg-danger-subtle text-center p-5 mt-5 rounded">
    <h3 class="fw-bold mb-3">Siap Memulai Perjalanan Anda?</h3>
    <p class="mb-4">Dapatkan panduan lengkap untuk memulai aplikasi ke universitas Malaysia</p>
    <a href="/application-guide" class="btn btn-danger btn-lg me-2">Panduan Aplikasi</a>
    <a href="/scholarship" class="btn btn-outline-dark btn-lg">Cari Beasiswa</a>
  </div>
</div>
@endsection
