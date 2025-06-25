@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<section class="py-5 bg-white">
  <div class="container">
    <h2 class="fw-bold mb-3 text-danger">Tentang Kami</h2>
    <h3 class="mb-3">Education Malaysia Indonesia</h3>
    <p>Platform resmi yang menghubungkan mahasiswa Indonesia dengan peluang pendidikan tinggi terbaik di Malaysia.</p>

    <section class="py-5 bg-white">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="card h-100 border-start border-4 border-danger shadow-sm p-4">
              <div class="d-flex align-items-start mb-3">
                <i class="bi bi-bullseye text-danger fs-1 me-3"></i>
                <div>
                  <h5 class="fw-bold mb-2">Misi Kami</h5>
                  <p class="mb-0">
                    Memfasilitasi akses pendidikan tinggi berkualitas di Malaysia bagi mahasiswa Indonesia melalui informasi yang akurat, panduan yang komprehensif, dan dukungan berkelanjutan sepanjang perjalanan pendidikan mereka.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card h-100 border-start border-4 border-warning shadow-sm p-4">
              <div class="d-flex align-items-start mb-3">
                <i class="bi bi-eye text-warning fs-1 me-3"></i>
                <div>
                  <h5 class="fw-bold mb-2">Visi Kami</h5>
                  <p class="mb-0">
                    Menjadi jembatan utama yang menghubungkan talenta muda Indonesia dengan pendidikan tinggi Malaysia, menciptakan generasi yang kompeten dan siap menghadapi tantangan global.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <h4 class="fw-bold mb-4 text-danger">Sejarah dan Komitmen Kami</h4>
    <p>Education Malaysia Indonesia (EMI) didirikan sebagai respons terhadap meningkatnya minat mahasiswa Indonesia untuk melanjutkan pendidikan tinggi di Malaysia. Dengan hubungan bilateral yang kuat antara kedua negara, kami hadir untuk memfasilitasi proses ini.</p>

    <p>Sejak didirikan, EMI telah membantu ribuan mahasiswa Indonesia mewujudkan impian pendidikan mereka di Malaysia. Kami bekerja sama dengan universitas-universitas terkemuka di Malaysia dan institusi pendukung untuk menyediakan layanan terbaik.</p>

    <p>Komitmen kami tidak hanya sebatas membantu proses aplikasi, tetapi juga memberikan dukungan berkelanjutan selama masa studi hingga alumni kembali berkontribusi untuk Indonesia.</p>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container text-center">
    <h3 class="fw-bold text-dark mb-5">Nilai-Nilai Kami</h3>
    <div class="row g-4 justify-content-center">
      <div class="col-6 col-md-3">
        <div class="card h-100 border rounded-4 p-4 shadow-sm">
          <i class="bi bi-people-fill text-danger fs-1 mb-3"></i>
          <h5 class="fw-bold">Kolaborasi</h5>
          <p class="text-muted small mb-0">Membangun kemitraan yang kuat dengan semua stakeholder</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card h-100 border rounded-4 p-4 shadow-sm">
          <i class="bi bi-globe2 text-danger fs-1 mb-3"></i>
          <h5 class="fw-bold">Integritas</h5>
          <p class="text-muted small mb-0">Memberikan informasi yang akurat dan transparan</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card h-100 border rounded-4 p-4 shadow-sm">
          <i class="bi bi-bullseye text-danger fs-1 mb-3"></i>
          <h5 class="fw-bold">Ekselen</h5>
          <p class="text-muted small mb-0">Berkomitmen pada kualitas layanan terbaik</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card h-100 border rounded-4 p-4 shadow-sm">
          <i class="bi bi-eye text-danger fs-1 mb-3"></i>
          <h5 class="fw-bold">Inovasi</h5>
          <p class="text-muted small mb-0">Terus berinovasi dalam memberikan solusi pendidikan</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <h4 class="fw-bold mb-4 text-danger">Tim Kami</h4>
    <div class="row g-4">
      @php
        $team = [
          ['nama' => 'Dr. Ahmad Rahman', 'jabatan' => 'Direktur Eksekutif', 'desc' => 'Berpengalaman 15 tahun dalam pendidikan internasional', 'foto' => 'ahmad.jpg'],
          ['nama' => 'Siti Nurhaliza', 'jabatan' => 'Manajer Program', 'desc' => 'Spesialis dalam program beasiswa dan aplikasi universitas', 'foto' => 'siti.jpg'],
          ['nama' => 'Budi Santoso', 'jabatan' => 'Koordinator Mahasiswa', 'desc' => 'Menangani dukungan mahasiswa dan jaringan alumni', 'foto' => 'budi.jpg']
        ];
      @endphp

      @foreach($team as $member)
        <div class="col-md-4">
          <div class="card h-100 p-3 border-0 shadow-sm text-center">
            <img src="{{ asset('images/team/' . $member['foto']) }}" class="img-fluid rounded-circle mb-3" alt="{{ $member['nama'] }}">
            <h6 class="fw-bold">{{ $member['nama'] }}</h6>
            <p class="text-muted mb-1">{{ $member['jabatan'] }}</p>
            <p class="small">{{ $member['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
