@extends('layouts.public')

@section('content')
@php
    $galleryItems = [
        [
            'image' => 'images/gallery/futsal.png',
            'source' => 'https://github.com/user-attachments/assets/31d1eca8-e956-4352-89f5-d5565dc092f5',
            'category' => 'Ekstrakurikuler',
            'title' => 'Ekstrakurikuler Futsal',
            'description' => 'Kegiatan ekstrakurikuler futsal menjadi wadah bagi siswa untuk mengembangkan bakat dan minat di bidang olahraga. Melalui latihan rutin, siswa belajar meningkatkan kemampuan bermain, kerja sama tim, kedisiplinan, sportivitas, dan semangat kompetitif.',
            'alt' => 'Siswa berlatih futsal di lapangan sekolah',
        ],
        [
            'image' => 'images/gallery/wordwall.png',
            'source' => 'https://github.com/user-attachments/assets/b5a7b80d-62b3-4d8c-936f-0da4fb731aaf',
            'category' => 'Pembelajaran',
            'title' => 'Pembelajaran Interaktif dengan Wordwall',
            'description' => 'Kegiatan pembelajaran yang memanfaatkan media interaktif Wordwall untuk menciptakan suasana belajar yang menyenangkan. Siswa dapat mengasah pengetahuan melalui permainan edukatif, kuis, dan berbagai aktivitas interaktif.',
            'alt' => 'Siswa mengerjakan permainan edukatif Wordwall di kelas',
        ],
        [
            'image' => 'images/gallery/english-1.png',
            'source' => 'https://github.com/user-attachments/assets/2cd42988-57ea-47ee-ba4f-1ac796e01a7d',
            'category' => 'Bahasa Inggris',
            'title' => 'English Learning Activities',
            'description' => 'Kegiatan pembelajaran bahasa Inggris dirancang untuk meningkatkan kemampuan komunikasi siswa, khususnya dalam keterampilan berbicara, memahami kosakata, dan menggunakan bahasa Inggris dalam kehidupan sehari-hari. Kegiatan dilaksanakan melalui pembelajaran yang aktif, interaktif, dan menyenangkan.',
            'alt' => 'Siswa mengikuti kegiatan English Festival 2026',
        ],
        [
            'image' => 'images/gallery/english-2.png',
            'source' => 'https://github.com/user-attachments/assets/cdc323c3-3e2b-44cc-b832-3bc001751a69',
            'category' => 'Bahasa Inggris',
            'title' => 'English Learning Activities',
            'description' => 'Kegiatan pembelajaran bahasa Inggris dirancang untuk meningkatkan kemampuan komunikasi siswa, khususnya dalam keterampilan berbicara, memahami kosakata, dan menggunakan bahasa Inggris dalam kehidupan sehari-hari. Kegiatan dilaksanakan melalui pembelajaran yang aktif, interaktif, dan menyenangkan.',
            'alt' => 'Siswa berbicara dalam kegiatan English Festival 2026',
        ],
        [
            'image' => 'images/gallery/english-3.png',
            'source' => 'https://github.com/user-attachments/assets/79fd4ac1-a8f4-44c9-904e-aa44dae415dd',
            'category' => 'Bahasa Inggris',
            'title' => 'English Learning Activities',
            'description' => 'Kegiatan pembelajaran bahasa Inggris dirancang untuk meningkatkan kemampuan komunikasi siswa, khususnya dalam keterampilan berbicara, memahami kosakata, dan menggunakan bahasa Inggris dalam kehidupan sehari-hari. Kegiatan dilaksanakan melalui pembelajaran yang aktif, interaktif, dan menyenangkan.',
            'alt' => 'Siswa tampil dalam English Singing Contest 2026',
        ],
        [
            'image' => 'images/gallery/kebersamaan.png',
            'source' => 'https://github.com/user-attachments/assets/9592a8c7-4c77-4901-859f-0c87530b4f52',
            'category' => 'Kegiatan Sekolah',
            'title' => 'Kegiatan dan Kebersamaan Siswa',
            'description' => 'Berbagai kegiatan sekolah yang mendukung interaksi, kebersamaan, kreativitas, dan perkembangan karakter siswa. Sekolah berupaya menciptakan lingkungan belajar yang positif, ramah, dan mendukung potensi setiap anak.',
            'alt' => 'Siswa belajar dan beraktivitas bersama di kelas',
        ],
        [
            'image' => 'images/gallery/seni-1.png',
            'source' => 'https://github.com/user-attachments/assets/06454005-dbf2-4bd3-807b-bdf3400f036f',
            'category' => 'Seni',
            'title' => 'Kreativitas dan Karya Seni Siswa',
            'description' => 'Melalui kegiatan ekstrakurikuler seni, siswa diberikan kesempatan untuk mengekspresikan kreativitas, mengembangkan imajinasi, serta menghasilkan karya seni sesuai minat dan bakat masing-masing. Kegiatan ini menjadi sarana untuk menumbuhkan rasa percaya diri dan apresiasi terhadap seni.',
            'alt' => 'Lembar ilustrasi karakter dengan beragam ekspresi',
        ],
        [
            'image' => 'images/gallery/seni-2.png',
            'source' => 'https://github.com/user-attachments/assets/62ac8218-7a65-4e20-85c8-71af302fd674',
            'category' => 'Seni',
            'title' => 'Kreativitas dan Karya Seni Siswa',
            'description' => 'Melalui kegiatan ekstrakurikuler seni, siswa diberikan kesempatan untuk mengekspresikan kreativitas, mengembangkan imajinasi, serta menghasilkan karya seni sesuai minat dan bakat masing-masing. Kegiatan ini menjadi sarana untuk menumbuhkan rasa percaya diri dan apresiasi terhadap seni.',
            'alt' => 'Lembar desain karakter yang menampilkan ilustrasi, pose, dan detail visual',
        ],
        [
            'image' => 'images/gallery/fasilitas.png',
            'source' => 'https://github.com/user-attachments/assets/5d1678f0-c076-4c88-851b-75c71db30546',
            'category' => 'Fasilitas',
            'title' => 'Lingkungan dan Fasilitas Sekolah',
            'description' => 'Lingkungan sekolah dirancang untuk mendukung kegiatan belajar mengajar serta memberikan kenyamanan bagi siswa. Fasilitas sekolah menjadi bagian penting dalam menciptakan suasana pendidikan yang kondusif, aman, dan menyenangkan.',
            'alt' => 'Bangunan dan area lingkungan sekolah',
        ],
    ];
@endphp

<section class="hero">
    <div>
        <p class="eyebrow">PENERIMAAN PESERTA DIDIK BARU</p>
        <h1>Mulai Langkah Besarmu Bersama SMP Budi Luhur</h1>
        <p>Temukan lingkungan belajar yang mendukung prestasi, karakter, kreativitas, dan potensi terbaik setiap siswa.</p>
        <a class="button" href="/daftar">Daftar Sekarang</a>
        <a class="textlink" href="/ppdb">Pelajari PPDB &rarr;</a>
    </div>
    <div class="heroart">
        <strong>SMP<br>BUDI LUHUR</strong>
        <small>Ruang bertumbuh, belajar, dan berprestasi.</small>
    </div>
</section>

<section>
    <p class="eyebrow">PPDB 2026/2027</p>
    <h2>Penerimaan Peserta Didik Baru</h2>
    <div class="grid four">
        <article><small>Tahun Ajaran</small><h3>{{ $setting->academic_year }}</h3></article>
        <article><small>Pendaftaran</small><h3>{{ $setting->registration_start->format('d M') }} &ndash; {{ $setting->registration_end->format('d M Y') }}</h3></article>
        <article><small>Kuota</small><h3>{{ $setting->quota }} Siswa</h3></article>
        <article><small>Status</small><h3 class="green">{{ $setting->status === 'open' ? 'Pendaftaran Dibuka' : 'Pendaftaran Ditutup' }}</h3></article>
    </div>
</section>

<section class="soft">
    <p class="eyebrow">PILIHAN TEPAT</p>
    <h2>Mengapa Memilih SMP Budi Luhur?</h2>
    <div class="grid three">
        @foreach (['Pendidikan Berkualitas', 'Pengembangan Karakter', 'Lingkungan Positif', 'Teknologi Pembelajaran', 'Pengembangan Potensi', 'Prestasi'] as $h)
            <article><i>&#10022;</i><h3>{{ $h }}</h3><p>Pembelajaran yang mendukung perkembangan akademik, karakter, dan potensi siswa.</p></article>
        @endforeach
    </div>
</section>

<section class="about">
    <div class="about-photo-wrap">
        <img class="about-photo-image" src="{{ asset('images/gallery/fasilitas.png') }}" alt="Bangunan dan lingkungan SMP Budi Luhur" loading="lazy" decoding="async">
        <span class="about-photo-label">Lingkungan sekolah</span>
    </div>
    <div>
        <p class="eyebrow">TENTANG SEKOLAH</p>
        <h2>Mendampingi setiap siswa bertumbuh utuh.</h2>
        <p>SMP Budi Luhur hadir sebagai lingkungan pendidikan yang mengembangkan pengetahuan, keterampilan, dan budi pekerti secara seimbang.</p>
        <a class="textlink" href="/tentang">Selengkapnya &rarr;</a>
    </div>
</section>

<section class="gallery-section" id="galeri">
    <div class="gallery-heading">
        <p class="eyebrow">CERITA DI SEKOLAH</p>
        <h2>Galeri Kegiatan &amp; Lingkungan Sekolah</h2>
        <p>Dokumentasi pembelajaran, kegiatan siswa, ekstrakurikuler, dan lingkungan SMP Budi Luhur.</p>
    </div>
    <div class="gallery-grid">
        @foreach ($galleryItems as $item)
            <article class="gallery-card" data-gallery-item data-title="{{ $item['title'] }}" data-description="{{ $item['description'] }}" style="--card-index: {{ $loop->index }}">
                <button class="gallery-image-button" type="button" data-gallery-open aria-label="Perbesar foto: {{ $item['title'] }}">
                    <span class="gallery-image-frame">
                        <img class="gallery-image" src="{{ asset($item['image']) }}" alt="{{ $item['alt'] }}" data-source="{{ $item['source'] }}" loading="lazy" decoding="async">
                        <span class="gallery-image-fallback">Foto belum dapat dimuat</span>
                        <span class="gallery-zoom-icon" aria-hidden="true">+</span>
                    </span>
                </button>
                <div class="gallery-card-copy">
                    <p class="gallery-category">{{ $item['category'] }}</p>
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>

<dialog class="gallery-lightbox" data-gallery-lightbox aria-label="Tampilan foto galeri">
    <button class="gallery-lightbox-close" type="button" data-gallery-close aria-label="Tutup foto">&times;</button>
    <div class="gallery-lightbox-content">
        <div class="gallery-lightbox-image-frame">
            <img data-gallery-lightbox-image src="" alt="">
        </div>
        <div class="gallery-lightbox-copy">
            <p class="eyebrow">GALERI SEKOLAH</p>
            <h2 data-gallery-lightbox-title></h2>
            <p data-gallery-lightbox-description></p>
        </div>
    </div>
</dialog>
@endsection

