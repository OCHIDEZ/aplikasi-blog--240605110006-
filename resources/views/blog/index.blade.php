@extends('layouts.public')
@section('title', 'Beranda - Blog Kami')

@section('content')
<div class="row">
    <!-- Daftar Artikel -->
    <div class="col-lg-8">
        
        @forelse ($artikel as $item)
        <div class="card card-custom mb-4 overflow-hidden">
            <img src="{{ !empty($item->gambar) && file_exists(public_path('storage/gambar/' . $item->gambar)) 
                ? asset('storage/gambar/' . $item->gambar) 
                : asset('storage/gambar/nothing.jpg') }}" 
                class="card-img-top" alt="{{ $item->judul }}" style="height: 350px; object-fit: cover;">
            <div class="card-body p-4">
                <span class="badge badge-category mb-2">{{ $item->kategori->nama_kategori }}</span>
                <h3 class="fw-bold mb-2">{{ $item->judul }}</h3>
                <p class="text-muted small mb-3">
                    <img src="{{ asset('storage/foto/' . $item->penulis->foto) }}" alt="Avatar" class="rounded-circle me-2" width="24" height="24" style="object-fit: cover;">
                    {{ $item->penulis->nama_depan }} {{ $item->penulis->nama_belakang }} &nbsp;&bull;&nbsp; {{ $item->hari_tanggal }}
                </p>
                <p class="text-secondary">{{ Str::limit($item->isi, 150) }}</p>
                <a href="{{ route('artikel.detail', $item->id) }}" class="btn btn-readmore mt-2">Baca Selengkapnya &rarr;</a>
            </div>
        </div>
        @empty
        <div class="alert alert-info">Belum ada artikel yang dipublikasikan.</div>
        @endforelse
        
        <!-- Paginasi Bootstrap -->
        <div class="d-flex justify-content-center mt-4">
            {{ $artikel->links('pagination::bootstrap-5') }}
        </div>
    </div>

    <!-- Sidebar Kategori -->
    <div class="col-lg-4">
        <div class="card card-custom p-4 sticky-top" style="top: 20px;">
            <h5 class="fw-bold mb-4">Kategori Artikel</h5>
            <ul class="list-group list-group-flush">
                <a href="{{ route('home') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ !$kategori_id ? 'fw-bold text-success' : '' }}">
                    Semua Artikel
                </a>
                @foreach ($kategori as $kat)
                <a href="{{ route('home', ['kategori' => $kat->id]) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ $kategori_id == $kat->id ? 'fw-bold text-success' : '' }}">
                    {{ $kat->nama_kategori }}
                    <span class="badge bg-success rounded-pill">{{ $kat->artikel_count }}</span>
                </a>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection