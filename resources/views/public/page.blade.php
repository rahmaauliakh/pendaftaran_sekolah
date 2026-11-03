@extends('layouts.public')

@section('content')
@php
    $pageHeadings = [
        'tentang' => 'Tentang Sekolah',
        'program' => 'Program Sekolah',
        'fasilitas' => 'Fasilitas Sekolah',
    ];
    $pageDescriptions = [
        'tentang' => 'Mengenal lingkungan belajar yang mendampingi siswa berkembang dalam pengetahuan, karakter, kreativitas, dan potensi diri.',
        'program' => 'Beragam pengalaman belajar dan kegiatan untuk mendukung minat, keterampilan, kerja sama, dan karakter siswa.',
        'fasilitas' => 'Lingkungan sekolah dan ruang pendukung untuk membantu kegiatan belajar berlangsung dengan nyaman.',
    ];
    $programItems = [
        [
            'image' => 'images/gallery/wordwall.png',
            'alt' => 'Siswa mengerjakan permainan edukatif Wordwall di kelas',
            'category' => 'Pembelajaran',
            'title' => 'Pembelajaran Interaktif dengan Wordwall',
            'description' => 'Media Wordwall digunakan untuk menghadirkan permainan edukatif, kuis, dan aktivitas interaktif. Kegiatan ini membantu siswa mengasah pengetahuan dalam suasana belajar yang menyenangkan.',
        ],
        [
            'image' => 'images/gallery/english-3.png',
            'alt' => 'Siswa tampil dalam English Singing Contest 2026',
            'category' => 'Bahasa Inggris',
            'title' => 'English Learning Activities',
            'description' => 'Pembelajaran bahasa Inggris mendorong kemampuan komunikasi, keterampilan berbicara, pemahaman kosakata, dan penggunaan bahasa dalam kehidupan sehari-hari melalui kegiatan aktif dan menyenangkan.',
        ],
        [
            'image' => 'images/gallery/futsal.png',
            'alt' => 'Siswa berlatih futsal di lapangan sekolah',
            'category' => 'Ekstrakurikuler',
            'title' => 'Ekstrakurikuler Futsal',
            'description' => 'Latihan futsal menjadi wadah untuk mengembangkan bakat olahraga sekaligus melatih kemampuan bermain, kerja sama tim, kedisiplinan, sportivitas, dan semangat kompetitif.',
        ],
        [
            'image' => 'images/gallery/seni-1.png',
            'alt' => 'Lembar ilustrasi karakter dengan beragam ekspresi',
            'category' => 'Seni dan Kreativitas',
            'title' => 'Kreativitas dan Karya Seni Siswa',
            'description' => 'Kegiatan seni memberi ruang bagi siswa untuk mengekspresikan kreativitas, mengembangkan imajinasi, dan membangun rasa percaya diri serta apresiasi terhadap seni.',
        ],
        [
            'image' => 'images/gallery/kebersamaan.png',
            'alt' => 'Siswa belajar dan beraktivitas bersama di kelas',
            'category' => 'Kegiatan Sekolah',
            'title' => 'Kegiatan dan Kebersamaan Siswa',
            'description' => 'Kegiatan bersama mendukung interaksi, kebersamaan, kreativitas, dan perkembangan karakter dalam lingkungan belajar yang positif dan ramah.',
        ],
    ];
    $facilityItems = [
        ['title' => 'Ruang Kelas', 'description' => 'Ruang untuk kegiatan belajar, berdiskusi, dan berinteraksi bersama di sekolah.'],
        ['title' => 'Laboratorium Komputer', 'description' => 'Mendukung pengenalan teknologi dan kegiatan pembelajaran berbasis digital.'],
        ['title' => 'Perpustakaan', 'description' => 'Ruang pendukung untuk membaca, mencari referensi, dan membangun kebiasaan belajar mandiri.'],
        ['title' => 'Lapangan Olahraga', 'description' => 'Area untuk kegiatan olahraga dan latihan ekstrakurikuler, termasuk futsal.'],
        ['title' => 'Ruang Kegiatan', 'description' => 'Ruang pendukung untuk kegiatan siswa, program bahasa, dan aktivitas kreatif.'],
        ['title' => 'Fasilitas Pendukung', 'description' => 'Bagian dari lingkungan sekolah yang membantu kegiatan belajar sehari-hari berlangsung lebih nyaman.'],
    ];
@endphp

<section class="pagehead">
    <p class="eyebrow">SMP BUDI LUHUR</p>
    <h1>{{ $pageHeadings[$page] ?? ucfirst($page) }}</h1>
    <p>{{ $pageDescriptions[$page] ?? 'Informasi ini menggunakan konten yang mudah disesuaikan setelah data resmi sekolah tersedia.' }}</p>
</section>

<section class="page-content">
    @if ($page === 'tentang')
        <div class="profile-page-grid">
            <div class="profile-photo-frame">
                <img src="{{ asset('images/gallery/kebersamaan.png') }}" alt="Siswa belajar dan beraktivitas bersama di kelas" data-fallback-image loading="lazy" decoding="async">
                <span class="page-image-fallback">Foto kegiatan siswa</span>
            </div>
            <div>
                <p class="eyebrow">PROFIL SEKOLAH</p>
                <h2>Mendampingi siswa bertumbuh secara utuh.</h2>
                <p>SMP Budi Luhur hadir sebagai lingkungan pendidikan yang mengembangkan pengetahuan, keterampilan, dan budi pekerti secara seimbang. Siswa didorong untuk belajar, berinteraksi, dan mengenali potensi dirinya.</p>
                <p>Kegiatan sekolah memberi ruang untuk pembelajaran aktif, kebersamaan, kreativitas, serta pengembangan minat di bidang olahraga dan bahasa.</p>
            </div>
        </div>

        <div class="grid three profile-values">
            <article><p class="eyebrow">PEMBELAJARAN</p><h3>Belajar dengan aktif</h3><p>Permainan edukatif, kuis, dan aktivitas interaktif membantu membangun suasana belajar yang menyenangkan.</p></article>
            <article><p class="eyebrow">KARAKTER</p><h3>Tumbuh bersama</h3><p>Kegiatan bersama melatih interaksi, kerja sama, kedisiplinan, dan sikap saling menghargai.</p></article>
            <article><p class="eyebrow">POTENSI</p><h3>Ruang untuk berkembang</h3><p>Olahraga, bahasa Inggris, dan seni memberi kesempatan bagi siswa untuk mengenali serta mengembangkan minatnya.</p></article>
        </div>
    @elseif ($page === 'program')
        <h2>Belajar melalui pengalaman yang beragam</h2>
        <p class="page-lead">Program pembelajaran dan kegiatan siswa mendukung perkembangan akademik, komunikasi, kreativitas, kerja sama, dan karakter.</p>
        <div class="program-grid">
            @foreach ($programItems as $program)
                <article class="program-card">
                    <div class="program-photo-frame">
                        <img src="{{ asset($program['image']) }}" alt="{{ $program['alt'] }}" data-fallback-image loading="lazy" decoding="async">
                        <span class="page-image-fallback">Foto kegiatan belum dapat dimuat</span>
                    </div>
                    <div class="program-card-copy">
                        <p class="gallery-category">{{ $program['category'] }}</p>
                        <h3>{{ $program['title'] }}</h3>
                        <p>{{ $program['description'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    @elseif ($page === 'fasilitas')
        <h2>Lingkungan belajar yang mendukung kegiatan siswa</h2>
        <p class="page-lead">Fasilitas sekolah menjadi bagian dari suasana belajar yang kondusif, aman, dan nyaman. Foto berikut menampilkan lingkungan dan bangunan sekolah.</p>
        <article class="facility-highlight">
            <div class="facility-photo-wrap">
                <img src="{{ asset('images/gallery/fasilitas.png') }}" alt="Bangunan dan lingkungan sekolah" data-fallback-image loading="lazy" decoding="async">
                <span class="facility-image-fallback">Foto fasilitas sekolah</span>
            </div>
            <div>
                <p class="eyebrow">LINGKUNGAN SEKOLAH</p>
                <h3>Ruang untuk belajar dan beraktivitas</h3>
                <p>Lingkungan sekolah dirancang untuk mendukung kegiatan belajar mengajar serta memberikan kenyamanan bagi siswa. Fasilitas sekolah membantu menciptakan suasana pendidikan yang kondusif dan menyenangkan.</p>
            </div>
        </article>
        <div class="grid three facility-grid">
            @foreach ($facilityItems as $facility)
                <article><div class="thumb">{{ $facility['title'] }}</div><h3>{{ $facility['title'] }}</h3><p>{{ $facility['description'] }}</p></article>
            @endforeach
        </div>
    @elseif ($page === 'faq')
        <h2>Pertanyaan yang Sering Diajukan</h2>
        @foreach (['Bagaimana cara mendaftar?' => 'Isi formulir online dan unggah dokumen persyaratan.', 'Apa saja persyaratannya?' => 'Persyaratan terperinci dapat diperbarui panitia PPDB.', 'Bagaimana mengetahui status?' => 'Masukkan nomor pendaftaran pada menu Cek Status.'] as $q => $a)
            <details><summary>{{ $q }}</summary><p>{{ $a }}</p></details>
        @endforeach
    @elseif ($page === 'kontak')
        <h2>Informasi {{ ucfirst($page) }}</h2>
        <div class="grid three">
            <article>
                <h3>Lokasi</h3>
                <p>Titik lokasi yang Anda berikan mengarah ke area STIKes Budi Luhur.</p>
                <a class="button" target="_blank" rel="noopener" href="https://www.bing.com/maps/search?q=STIKes+Budi+Luhur&amp;cp=-6.905698%7E107.519295&amp;lvl=11">Buka Bing Maps</a>
            </article>
            <article><h3>Kontak PPDB</h3><p>Telepon, WhatsApp, dan email: [ISI DATA RESMI SEKOLAH]</p></article>
        </div>
    @endif
</section>
@endsection

