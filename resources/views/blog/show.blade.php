@extends('layouts.public')
@section('title', $artikel->judul . ' - Blog Kami')

@section('content')
<nav aria-label="breadcrumb" class="mb-4">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-success text-decoration-none">Beranda</a></li>
    <li class="breadcrumb-item"><a href="{{ route('home', ['kategori' => $artikel->id_kategori]) }}" class="text-success text-decoration-none">{{ $artikel->kategori->nama_kategori }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $artikel->judul }}</li>
  </ol>
</nav>

<div class="row">
    <div class="col-lg-8">
        <div class="card card-custom p-4 mb-4">
            <img src="{{ !empty($artikel->gambar) && file_exists(public_path('storage/gambar/' . $artikel->gambar)) 
    ? asset('storage/gambar/' . $artikel->gambar) 
    : asset('storage/gambar/nothing.jpg') }}" 
    class="img-fluid rounded mb-4" alt="{{ $artikel->judul }}" style="width: 100%; max-height: 450px; object-fit: cover;">
            
            <div class="mb-2">
                <span class="badge badge-category">{{ $artikel->kategori->nama_kategori }}</span>
            </div>
            <h1 class="fw-bold mb-3">{{ $artikel->judul }}</h1>
            
            <div class="d-flex align-items-center text-muted mb-4 pb-3 border-bottom">
                <img src="{{ asset('storage/foto/' . $artikel->penulis->foto) }}" alt="Avatar" class="rounded-circle me-3" width="45" height="45" style="object-fit: cover;">
                <div>
                    <div class="fw-bold text-dark">{{ $artikel->penulis->nama_depan }} {{ $artikel->penulis->nama_belakang }}</div>
                    <div class="small">{{ $artikel->hari_tanggal }}</div>
                </div>
            </div>

            <div class="article-content text-dark" style="line-height: 1.8; font-size: 1.05rem;">
                {!! nl2br(e($artikel->isi)) !!}
            </div>
            
            <div class="mt-5 pt-3 border-top">
                <a href="{{ route('home') }}" class="btn btn-outline-secondary rounded-pill px-4">&larr; Kembali ke Beranda</a>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card card-custom p-4 sticky-top" style="top: 20px;">
            <h5 class="fw-bold mb-4">Artikel Terkait</h5>
            
            @forelse ($artikel_terkait as $terkait)
            <div class="d-flex mb-3">
                <img src="{{ !empty($terkait->gambar) && file_exists(public_path('storage/gambar/' . $terkait->gambar)) 
    ? asset('storage/gambar/' . $terkait->gambar) 
    : asset('storage/gambar/nothing.jpg') }}" 
    class="rounded me-3" alt="{{ $terkait->judul }}" style="width: 70px; height: 50px; object-fit: cover;">
                <div>
                    <a href="{{ route('artikel.detail', $terkait->id) }}" class="text-dark text-decoration-none fw-bold d-block" style="font-size: 0.95rem; line-height: 1.3;">
                        {{ Str::limit($terkait->judul, 45) }}
                    </a>
                    <span class="small text-muted">{{ $terkait->hari_tanggal }}</span>
                </div>
            </div>
            @empty
            <p class="text-muted small">Belum ada artikel terkait di kategori ini.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection