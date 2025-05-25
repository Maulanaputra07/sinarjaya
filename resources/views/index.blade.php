<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Jaya Prasasti</title>
    @vite(['resources/js/app.js'])
    {{-- <link rel="stylesheet" href="./src/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/style.css"> --}}
</head>
<body>
    <navbar class="navbar align-items-center justify-content-between flex-wrap px-4">
        <div class="wrapper d-flex justify-content-between d-md-block">
            <h4 class="fw-semibold">Sinar Jaya Prasasti</h4>

            <div class="pesan-whatsapp bg-success p-2 text-white rounded d-flex align-items-center d-md-none" onclick="openWhatsapp()">
                <span class="px-1">
                    <img src="{{ asset('images/icon/wa.png')}}" alt="wa" style="width: 1.2em;" />
                </span>
                Pesan Sekarang
            </div>
        </div>
        <div class="link d-none d-md-flex">
            <a class="p-2" href="#">Beranda</a>
            <a class="p-2" href="#produk">Produk</a>
        </div>

        <div class="pesan-whatsapp bg-success p-2 text-white rounded d-none d-md-block" style="cursor: pointer;" onclick="openWhatsapp()">
            <span class="px-2"><img src="{{ asset('images/icon/wa.png')}}" alt="wa" style="width: 1.2em;" /></span>Pesan Sekarang >
        </div>
    </navbar>
    <div class="content">
        <div class="vh-100">
            <div class="d-flex w-100 align-items-center position-relative" style="min-height: 90vh; background-color: var(--maincolor);">
                <div class="h-100">
                    <div class="card-title ms-5 px-5 py-3 position-relative d-flex flex-column justify-content-center">
                        <p class="title fw-bold pb-3 lh-1" style="z-index: 2;">Sinar Jaya Prasasti</p>
                        <p class="desc fs-5">Cari tempat untuk pembuatan beragam prasasti dan batu nisan? <b><u>Sinar Jaya Prasasti</u></b> tempatnya!</p>
                    </div>
                    <div class="img-title position-absolute end-0 top-0 d-flex">
                        <div class="d-flex flex-column w-100 h-100">
                            <div class="d-flex w-100" style="height: 50%;">
                                <div class="h-100" style="aspect-ratio: 1;">
                                    <img src="{{ asset('images/img1.jpg')}}" class="img-fluid w-100 h-100" style="object-fit: cover;" />
                                </div>
                                <div class="flex-grow-1 h-100">
                                    <img src="{{ asset('images/img2.jpg')}}" class="img-fluid w-100 h-100" style="object-fit: cover;" />
                                </div>
                            </div>
                            <div class="d-flex w-100" style="height: 50%;">
                                <div class="flex-grow-1 h-100">
                                    <img src="{{ asset('images/img3.jpg')}}" class="img-fluid w-100 h-100" style="object-fit: cover;" />
                                </div>
                                <div class="h-100" style="aspect-ratio: 1;">
                                    <img src="{{ asset('images/img4.jpg')}}" class="img-fluid w-100 h-100" style="object-fit: cover;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="min-vh-100 w-100 pb-5 pt-3 mb-5" id="produk">
            <p class="title-produk text-center fw-semibold pb-5" style="text-decoration: underline;">Produk Yang Kami Sediakan</p>
            <div class="produk-parent d-flex flex-column px-4 align-items-center justify-content-center " style="gap: 5em;">
                <div class="flex-produk-parent">
                    <div class="jenis-produk">
                        <div class="img-jenis-produk">
                            <img src="{{ asset('images/thumbnailPatok.jpeg') }}" alt="patok">
                        </div>
                        <div class="text-jenis-produk">
                            <p class="fs-3 fw-bold">PATOK/NISAN</p>
                            <p>Berbagai jenis patok dan nisan makam dengan kualitas terbaik dan ketahanan tinggi.</p>
                        </div>
                    </div>
                    <div class="jenis-produk">
                        <div class="img-jenis-produk">
                            <img src="{{ asset('images/thumbnailPrasasti.jpeg') }}" alt="prasasti">
                        </div>
                        <div class="text-jenis-produk">
                            <p class="fs-3 fw-bold">PRASASTI</p>
                            <p>Prasasti peresmian proyek, monumen, sekolah, kantor, dan sebagainya.</p>
                        </div>
                    </div>
                </div>
                <div class="flex-produk-parent">
                    <div class="jenis-produk">
                        <div class="img-jenis-produk">
                            <img src="{{ asset('images/thumbnailKijing.jpeg') }}" alt="kijing">
                        </div>
                        <div class="text-jenis-produk">
                            <p class="fs-3 fw-bold">KIJING</p>
                            <p>Kijing makam dengan beragam model dan material berkualitas.</p>
                        </div>
                    </div>
                    <div class="jenis-produk">
                        <div class="img-jenis-produk">
                            <img src="{{ asset('images/thumbnailKepalaKijing.jpeg') }}" alt="kijing">
                        </div>
                        <div class="text-jenis-produk">
                            <p class="fs-3 fw-bold">KEPALA KIJING</p>
                            <p>Kepala Kijing sebagai penanda utama dan identitas makam.</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="d-flex justify-content-center py-3 my-3">
                    <a href="/sinarjaya/pages/product.php" class="px-4 py-3 fw-semibold rounded text-center text-black" style="text-decoration: none; font-size: 1rem; background-color: var(--maincolor);">Jelajahi Produk</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer w-100 d-flex flex-column justify-content-between mt-5" style="min-height: 60vh;">
        <div class="main-footer d-flex justify-content-between align-items-center p-5">
            <div class="footer-info d-flex flex-column gap-2 px-5">
                <h2 class="footer-info-heading text-center py-3" style="text-decoration: underline;">
                    Hubungi Kami
                </h2>
                <div class="footer-info-item d-flex gap-2 align-items-center">
                    <div class="icon d-flex align-items-center p-3">
                        <img src="{{ asset('images/icon/loc.png')}}" alt="loc">
                    </div>
                    <p>Jl. Raya Pati-Kayen, Blaru, Kec. Pati, Kabupaten Pati, Jawa Tengah 59114</p>
                </div>
                <div class="footer-info-item d-flex gap-2 align-items-center">
                    <div class="icon d-flex align-items-center p-3" style="background-color: #198754; border-radius:100%">
                        <img src="{{ asset('images/icon/wa.png')}}" alt="loc">
                    </div>
                    <a href="https://wa.me/+6281325696614" class="text-white" style="text-decoration: none;">+62 813-2569-6614</a>
                </div>
                <div class="footer-info-item d-flex gap-2 align-items-center">
                    <div class="icon d-flex align-items-center p-3" style="background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); border-radius:100%">
                        <img src="{{ asset('images/icon/insta.png')}}" alt="loc">
                    </div>
                    <a href="https://www.instagram.com/sunartosinarjaya?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white" style="text-decoration: none;">@sunartosinarjaya</a>
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
</body>
<script>
    function openWhatsapp(){
        const nomor = "6281325696614"
        const url = `https://wa.me/${nomor}`
        window.open(url, '_blank')
    }
</script>
</html>
