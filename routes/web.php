<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('about');
});

Route::get('/study', function () {
    return view('study');
});

Route::get('/panduan', function () {
    return view('panduan');
});

Route::get('/beasiswa', function () {
    $scholarships = [
        [
            'name' => 'Malaysia International Scholarship (MIS)',
            'provider' => 'Pemerintah Malaysia',
            'coverage' => '100% Biaya Kuliah + Tunjangan Hidup',
            'level' => 'S1, S2, S3',
            'deadline' => '31 Maret 2024',
            'requirements' => ['IPK min. 3.5', 'IELTS 6.5', 'Surat rekomendasi'],
            'type' => 'government',
        ],
        [
            'name' => 'ASEAN Scholarship',
            'provider' => 'Universitas Malaysia',
            'coverage' => '50-75% Biaya Kuliah',
            'level' => 'S1, S2',
            'deadline' => '30 April 2024',
            'requirements' => ['IPK min. 3.0', 'IELTS 6.0', 'Warga negara ASEAN'],
            'type' => 'university',
        ],
        [
            'name' => 'Islamic Development Bank Scholarship',
            'provider' => 'Islamic Development Bank',
            'coverage' => '100% Biaya Kuliah + Living Allowance',
            'level' => 'S2, S3',
            'deadline' => '15 Februari 2024',
            'requirements' => ['IPK min. 3.5', 'TOEFL 550', 'Muslim'],
            'type' => 'international',
        ],
        [
            'name' => 'Petronas Education Sponsorship',
            'provider' => 'Petronas',
            'coverage' => '100% Biaya Kuliah + Tunjangan',
            'level' => 'S1 (Teknik)',
            'deadline' => '28 Februari 2024',
            'requirements' => ['IPK min. 3.7', 'IELTS 7.0', 'Jurusan Teknik'],
            'type' => 'corporate',
        ],
    ];

    $applicationSteps = [
        'Riset beasiswa yang sesuai dengan profil Anda',
        'Siapkan semua dokumen yang diperlukan',
        'Isi formulir aplikasi dengan lengkap dan akurat',
        'Tulis essay/personal statement yang menarik',
        'Submit aplikasi sebelum deadline',
        'Follow up dan pantau status aplikasi',
    ];

    $tips = [
        [
            'title' => 'Mulai Persiapan Lebih Awal',
            'description' => 'Siapkan dokumen dan aplikasi minimal 6 bulan sebelum deadline',
        ],
        [
            'title' => 'Penuhi Semua Persyaratan',
            'description' => 'Pastikan IPK, skor bahasa, dan dokumen memenuhi kriteria minimum',
        ],
        [
            'title' => 'Tulis Essay yang Kuat',
            'description' => 'Buat personal statement yang menunjukkan motivasi dan potensi Anda',
        ],
        [
            'title' => 'Cari Referensi Berkualitas',
            'description' => 'Minta surat rekomendasi dari dosen atau atasan yang mengenal Anda baik',
        ],
    ];

    return view('beasiswa', compact('scholarships', 'applicationSteps', 'tips'));
});