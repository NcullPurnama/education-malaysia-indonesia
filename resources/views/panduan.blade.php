@extends('layouts.app')

@section('content')
<div class="container py-5">
  {{-- Hero Section --}}
  <div class="text-center mb-5">
    <span class="badge bg-danger-subtle text-danger mb-3">Panduan Aplikasi</span>
    <h1 class="fw-bold display-5">Panduan Lengkap Aplikasi</h1>
    <p class="text-muted lead mx-auto" style="max-width: 700px;">
      Ikuti langkah-langkah berikut untuk memulai perjalanan pendidikan Anda di Malaysia
    </p>
  </div>

  {{-- Langkah-Langkah Aplikasi --}}
  <div class="mb-5">
    <h2 class="text-center fw-bold mb-4">Langkah-Langkah Aplikasi</h2>
    <div class="row g-4">
      @php
        $steps = [
          ["title" => "Persiapan Dokumen", "description" => "Siapkan semua dokumen yang diperlukan", "icon" => "bi-file-earmark-text", "details" => [
            "Ijazah dan transkrip nilai (legalisir)",
            "Sertifikat bahasa Inggris (IELTS/TOEFL)",
            "Paspor yang masih berlaku",
            "Pas foto terbaru",
            "Surat rekomendasi",
            "Personal statement/motivation letter"
          ]],
          ["title" => "Pilih Universitas & Program", "description" => "Tentukan universitas dan program studi yang sesuai", "icon" => "bi-mortarboard", "details" => [
            "Riset universitas dan ranking",
            "Periksa persyaratan program",
            "Bandingkan biaya kuliah",
            "Cek lokasi dan fasilitas",
            "Konsultasi dengan konselor EMI"
          ]],
          ["title" => "Submit Aplikasi", "description" => "Kirim aplikasi melalui portal resmi", "icon" => "bi-calendar-check", "details" => [
            "Isi formulir aplikasi online",
            "Upload semua dokumen",
            "Bayar biaya aplikasi",
            "Submit sebelum deadline",
            "Simpan bukti aplikasi"
          ]],
          ["title" => "Proses Visa", "description" => "Urus visa pelajar Malaysia", "icon" => "bi-airplane", "details" => [
            "Terima offer letter dari universitas",
            "Siapkan dokumen visa",
            "Submit aplikasi visa",
            "Bayar biaya visa",
            "Tunggu persetujuan"
          ]]
        ];
      @endphp
      @foreach($steps as $index => $step)
      <div class="col-md-3">
        <div class="card h-100">
          <div class="card-body text-center">
            <div class="bg-danger-subtle text-danger rounded-circle p-3 mb-3 d-inline-flex">
              <i class="bi {{ $step['icon'] }} fs-4"></i>
            </div>
            <span class="badge bg-secondary mb-2">Langkah {{ $index + 1 }}</span>
            <h5 class="card-title">{{ $step['title'] }}</h5>
            <p class="text-muted small">{{ $step['description'] }}</p>
            <ul class="text-start small">
              @foreach($step['details'] as $detail)
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>{{ $detail }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  {{-- Tabs Section --}}
  <ul class="nav nav-tabs mb-3" id="appGuideTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" type="button">Dokumen</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#timeline" type="button">Timeline</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="tips-tab" data-bs-toggle="tab" data-bs-target="#tips" type="button">Tips & Trik</button>
    </li>
  </ul>
  <div class="tab-content" id="appGuideTabContent">
    {{-- Dokumen Tab --}}
    <div class="tab-pane fade show active" id="documents" role="tabpanel">
      <div class="row g-4">
        @php
          $documents = [
            ["category" => "Dokumen Akademik", "items" => [
              "Ijazah SMA/Diploma/Sarjana (asli + fotokopi)",
              "Transkrip nilai (asli + fotokopi)",
              "Sertifikat bahasa Inggris (IELTS min. 6.0 atau TOEFL min. 550)",
              "Surat keterangan lulus (jika belum wisuda)"
            ]],
            ["category" => "Dokumen Pribadi", "items" => [
              "Paspor (berlaku min. 18 bulan)",
              "Pas foto berwarna ukuran paspor (8 lembar)",
              "Akta kelahiran",
              "Kartu keluarga"
            ]],
            ["category" => "Dokumen Pendukung", "items" => [
              "Surat rekomendasi dari guru/dosen (2 buah)",
              "Personal statement/motivation letter",
              "CV/Resume",
              "Portofolio (untuk program seni/desain)"
            ]],
            ["category" => "Dokumen Keuangan", "items" => [
              "Surat keterangan penghasilan orang tua",
              "Rekening koran 3 bulan terakhir",
              "Surat jaminan biaya pendidikan",
              "Bukti beasiswa (jika ada)"
            ]]
          ];
        @endphp
        @foreach($documents as $doc)
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-file-earmark-text text-danger me-2"></i>{{ $doc['category'] }}</h5>
              <ul class="list-unstyled mt-3">
                @foreach($doc['items'] as $item)
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>{{ $item }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Timeline Tab --}}
    <div class="tab-pane fade" id="timeline" role="tabpanel">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-calendar-event text-danger me-2"></i>Timeline Aplikasi (Intake September)</h5>
          <ul class="list-group list-group-flush mt-3">
            <li class="list-group-item d-flex justify-content-between"><strong>Januari - Maret</strong><span>Persiapan dokumen dan riset universitas</span></li>
            <li class="list-group-item d-flex justify-content-between"><strong>April - Mei</strong><span>Submit aplikasi untuk intake September</span></li>
            <li class="list-group-item d-flex justify-content-between"><strong>Juni - Juli</strong><span>Proses seleksi dan pengumuman hasil</span></li>
            <li class="list-group-item d-flex justify-content-between"><strong>Agustus</strong><span>Proses visa dan persiapan keberangkatan</span></li>
            <li class="list-group-item d-flex justify-content-between"><strong>September</strong><span>Mulai perkuliahan</span></li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Tips & Trik Tab --}}
    <div class="tab-pane fade" id="tips" role="tabpanel">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Tips Sukses Aplikasi</h5>
              <ul class="list-unstyled mt-3">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Mulai Persiapan Lebih Awal</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Personal Statement yang Kuat</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Skor Bahasa Inggris Memadai</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Kesalahan yang Harus Dihindari</h5>
              <ul class="list-unstyled mt-3">
                <li><i class="bi bi-x-circle-fill text-danger me-2"></i>Dokumen Tidak Lengkap</li>
                <li><i class="bi bi-x-circle-fill text-danger me-2"></i>Melewati Deadline</li>
                <li><i class="bi bi-x-circle-fill text-danger me-2"></i>Tidak Riset Universitas</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- CTA Section --}}
  <div class="bg-danger-subtle text-center p-5 mt-5 rounded">
    <h3 class="fw-bold mb-3">Butuh Bantuan Aplikasi?</h3>
    <p class="mb-4">Tim konselor kami siap membantu Anda dalam setiap langkah aplikasi</p>
    <a href="/contact" class="btn btn-danger me-2">Konsultasi Gratis</a>
    <a href="/student-registration" class="btn btn-outline-dark">Daftar Sekarang</a>
  </div>
</div>
@endsection
