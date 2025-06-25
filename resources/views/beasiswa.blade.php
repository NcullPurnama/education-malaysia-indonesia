<!-- resources/views/scholarship.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container py-5">
  <!-- Hero Section -->
  <div class="text-center mb-5">
    <span class="badge bg-warning text-dark mb-3">Program Beasiswa</span>
    <h1 class="fw-bold display-5">Beasiswa untuk Studi di Malaysia</h1>
    <p class="lead text-muted">Temukan berbagai program beasiswa yang tersedia untuk mahasiswa Indonesia yang ingin melanjutkan pendidikan di Malaysia</p>
  </div>

  <!-- Statistics -->
  <div class="row text-center mb-5">
    <div class="col-md-3">
      <h3 class="text-warning">50+</h3>
      <p class="text-muted">Program Beasiswa</p>
    </div>
    <div class="col-md-3">
      <h3 class="text-warning">RM 2M+</h3>
      <p class="text-muted">Total Dana Tersedia</p>
    </div>
    <div class="col-md-3">
      <h3 class="text-warning">1,000+</h3>
      <p class="text-muted">Penerima per Tahun</p>
    </div>
    <div class="col-md-3">
      <h3 class="text-warning">85%</h3>
      <p class="text-muted">Tingkat Keberhasilan</p>
    </div>
  </div>

  <!-- Tabs -->
  <ul class="nav nav-tabs mb-4" id="scholarshipTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="available-tab" data-bs-toggle="tab" data-bs-target="#available" type="button" role="tab">Beasiswa Tersedia</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="application-tab" data-bs-toggle="tab" data-bs-target="#application" type="button" role="tab">Cara Aplikasi</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="tips-tab" data-bs-toggle="tab" data-bs-target="#tips" type="button" role="tab">Tips Sukses</button>
    </li>
  </ul>

  <div class="tab-content" id="scholarshipTabsContent">
    <!-- Beasiswa Tersedia -->
    <div class="tab-pane fade show active" id="available" role="tabpanel">
      <div class="row">
        @foreach($scholarships as $scholarship)
        <div class="col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <h5 class="card-title">{{ $scholarship['name'] }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $scholarship['provider'] }}</h6>
                </div>
                <span class="badge 
                  @if($scholarship['type'] === 'government') bg-primary
                  @elseif($scholarship['type'] === 'university') bg-success
                  @elseif($scholarship['type'] === 'international') bg-purple text-white
                  @else bg-warning text-dark @endif">
                  {{ ucfirst($scholarship['type']) }}
                </span>
              </div>
              <p class="mt-3 mb-1"><strong>Cakupan:</strong> {{ $scholarship['coverage'] }}</p>
              <p class="mb-1"><strong>Tingkat:</strong> {{ $scholarship['level'] }}</p>
              <p class="mb-2"><strong>Deadline:</strong> {{ $scholarship['deadline'] }}</p>
              <p class="fw-bold mb-1">Persyaratan:</p>
              <ul>
                @foreach($scholarship['requirements'] as $req)
                <li>{{ $req }}</li>
                @endforeach
              </ul>
              <a href="#" class="btn btn-warning w-100 mt-3">Pelajari Lebih Lanjut</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <!-- Cara Aplikasi -->
    <div class="tab-pane fade" id="application" role="tabpanel">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-4">Langkah-Langkah Aplikasi Beasiswa</h4>
          <ol class="list-group list-group-numbered">
            @foreach($applicationSteps as $step)
            <li class="list-group-item">{{ $step }}</li>
            @endforeach
          </ol>
        </div>
      </div>
    </div>

    <!-- Tips Sukses -->
    <div class="tab-pane fade" id="tips" role="tabpanel">
      <div class="row">
        @foreach($tips as $tip)
        <div class="col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">{{ $tip['title'] }}</h5>
              <p class="card-text">{{ $tip['description'] }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- CTA Section -->
  <div class="bg-light p-5 text-center rounded mt-5">
    <h2 class="fw-bold mb-3">Siap Meraih Beasiswa Impian?</h2>
    <p class="lead mb-4">Konsultasikan rencana beasiswa Anda dengan tim konselor kami</p>
    <a href="/contact" class="btn btn-warning me-2">Konsultasi Beasiswa</a>
    <a href="/application-guide" class="btn btn-outline-warning">Panduan Aplikasi</a>
  </div>
</div>
@endsection