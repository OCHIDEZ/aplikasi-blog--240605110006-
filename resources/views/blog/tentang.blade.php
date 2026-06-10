@extends('layouts.public')

@section('title', 'Tentang Saya - Blog Kami')

@section('content')
<div class="row justify-content-center align-items-center py-5">
    
        <div class="col-lg-8">

        <div class="card card-custom p-5">
            <h2 class="fw-bold mb-4">Tentang Saya</h2>
            <hr>

            <p class="text-dark" style="line-height:1.8;">
                Assalamualaikum Wr. Wb.<br> Saya <strong>Mohammad Zaky Abdur Rosyid</strong>, mahasiswa Program Studi
                Informatika yang sedang menempuh pendidikan di semester 4.
                Website ini merupakan bagian dari pengembangan tugas akhir mata kuliah
                Pemrograman Web yang berfokus pada implementasi framework Laravel
                menggunakan konsep MVC (Model View Controller).
            </p>

            <p class="text-dark" style="line-height:1.8;">
                Melalui proyek Sistem Manajemen Blog (CMS) ini, saya mempelajari
                berbagai teknologi pengembangan web modern seperti Laravel,
                Eloquent ORM, Routing, Middleware, Authentication, Blade Template,
                serta pengelolaan database MySQL. Selain itu, proyek ini juga
                menjadi sarana untuk menerapkan konsep CRUD (Create, Read, Update,
                Delete) yang telah dipelajari selama perkuliahan.
            </p>

            <p class="text-dark" style="line-height:1.8;">
                Pada halaman publik ini, pengunjung dapat membaca artikel yang
                telah dipublikasikan berdasarkan kategori tertentu, melihat detail
                artikel, serta memperoleh informasi mengenai penulis dan topik
                yang dibahas. Fitur-fitur tersebut dikembangkan sebagai bagian dari
                pemenuhan tugas Ujian Akhir Semester (UAS).
            </p>

            <p class="text-dark" style="line-height:1.8;">
                Saya berharap website ini dapat menjadi bukti proses pembelajaran
                sekaligus portofolio pengembangan web yang dapat terus dikembangkan
                di masa mendatang. Terima kasih telah berkunjung.
            </p>

            <div class="mt-4">
                <a href="{{ route('home') }}" class="btn btn-readmore">
                    &larr; Kembali ke Beranda
                </a>
            </div>
        </div>

    </div>
</div>
@endsection