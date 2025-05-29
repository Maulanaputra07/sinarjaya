<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sinar Jaya Prasasti - {{ $blog->title }}</title>
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}" />
</head>
<style>
    .description-blog figure.attachment {
        text-align: center;
        margin: 2rem auto;
        max-width: 80%;
    }

    .description-blog figure.attachment img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        height: auto;
    }
</style>
<body>
    <!-- Navbar -->
    <nav class="navbar align-items-center justify-content-between flex-wrap px-4" style="position: fixed; width: 100%; top: 0; z-index: 1000; background-color: rgba(255, 255, 255, 0.9)">
        <div class="wrapper d-flex justify-content-between d-md-block">
            <h4 class="fw-semibold">Sinar Jaya Prasasti</h4>

            <div class="pesan-whatsapp bg-success p-2 text-white rounded d-flex align-items-center d-md-none" onclick="openWhatsapp()">
                <span class="px-1">
                    <img src="{{ asset('images/icon/wa.png') }}" alt="wa" style="width: 1.2em;" />
                </span>
                Pesan Sekarang
            </div>
        </div>
        <div class="link d-none d-md-flex">
            <a class="p-2 fw-semibold nav-menu" href="/#">Beranda</a>
            <a class="p-2 fw-semibold nav-menu" href="/#produk">Produk</a>
            <a class="p-2 fw-semibold nav-menu" href="/#blog">Blog</a>
        </div>

        <div class="pesan-whatsapp bg-success p-2 text-white rounded d-none d-md-block" style="cursor: pointer;" onclick="openWhatsapp()">
            <span class="px-2"><img src="{{ asset('images/icon/wa.png') }}" alt="wa" style="width: 1.2em;" /></span>Pesan Sekarang &gt;
        </div>
    </nav>

    <main class="container-fluid px-3 px-md-5" style="margin-top: 100px;">
        <div class="w-100">
            <img src="{{ asset('storage/' . $blog->thumbnail) }}"
                 alt="Thumbnail"
                 class="img-fluid w-100 mb-4"
                 style="max-height: 600px; object-fit: cover; border-radius: 10px;">
        </div>
        <div class="w-100 mb-5 px-2 px-md-0">
            <h1 class="fw-bold mb-3 fs-4 fs-md-1">{{ $blog->title }}</h1>
            <p class="text-muted mb-4 fs-6 fs-md-5">Dipublikasikan pada {{$blog->created_at->format('d F Y')}}</p>
            <div class="fs-6 fs-md-5 lh-lg description-blog" style="text-align: justify;">
                {!! $blog->text !!}
            </div>
            <button class="btn btn-sm btn-outline-warning rounded-pill px-3 mt-3">{{ $blog->tags}}</button>
        </div>
    </main>

    <div class="footer w-100 d-flex flex-column justify-content-between mt-5" style="min-height: 60vh;">
        <div class="main-footer d-flex justify-content-between align-items-center p-5">
            <div class="footer-info d-flex flex-column gap-2 px-5">
                <h2 class="footer-info-heading text-center py-3" style="text-decoration: underline;">
                    Hubungi Kami
                </h2>
                <div class="footer-info-item d-flex gap-2 align-items-center">
                    <div class="icon d-flex align-items-center p-3">
                        <img src="{{ asset('images/icon/loc.png') }}" alt="loc">
                    </div>
                    <p>Jl. Raya Pati-Kayen, Blaru, Kec. Pati, Kabupaten Pati, Jawa Tengah 59114</p>
                </div>
                <div class="footer-info-item d-flex gap-2 align-items-center">
                    <div class="icon d-flex align-items-center p-3" style="background-color: #198754; border-radius:100%">
                        <img src="{{ asset('images/icon/wa.png') }}" alt="wa">
                    </div>
                    <a href="https://wa.me/+6281325696614" class="text-white" style="text-decoration: none;">+62 813-2569-6614</a>
                </div>
                <div class="footer-info-item d-flex gap-2 align-items-center">
                    <div class="icon d-flex align-items-center p-3" style="background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); border-radius:100%">
                        <img src="{{ asset('images/icon/insta.png') }}" alt="insta">
                    </div>
                    <a href="https://www.instagram.com/sunartosinarjaya" class="text-white" style="text-decoration: none;">@sunartosinarjaya</a>
                </div>
            </div>

            <div class="footer-map">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1653.4324256796801!2d111.03901419222417!3d-6.764109102796583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70d25ddfc0cd49%3A0xff24705d3ecc1ff3!2sSinar%20Jaya%20Prasasti!5e1!3m2!1sid!2sid!4v1747669343316!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="cp-footer w-100 align-self-end px-5 py-2 fw-semibold">
            &copy;2025 Sinar Jaya Prasasti
        </div>
    </div>

    <script>
        function openWhatsapp(){
            const nomor = "6281325696614";
            const url = `https://wa.me/${nomor}`;
            window.open(url, '_blank');
        }
    </script>
</body>
</html>
