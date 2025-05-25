<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Jaya Prasasti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}" />
</head>
<body>
    <navbar class="navbar align-items-center justify-content-between flex-wrap px-4" style="position: fixed; width: 100%; top: 0; z-index: 1000; background-color: rgba(255, 255, 255, 0.9)">
        <div class="wrapper d-flex justify-content-between d-md-block">
            <h4 class="fw-semibold">Sinar Jaya Prasasti</h4>

            <div class="pesan-whatsapp bg-success p-2 text-white rounded d-flex align-items-center d-md-none" onclick="openWhatsapp()">
                <span class="px-1">
                    <img src="{{ asset('src/assets/icon/wa.png') }}" alt="wa" style="width: 1.2em;" />
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
            <span class="px-2"><img src="{{ asset('src/assets/icon/wa.png') }}" alt="wa" style="width: 1.2em;" /></span>Pesan Sekarang >
        </div>
    </navbar>
    
    <div class="min-vh-100 w-100 d-flex justify-content-center align-items-start" style="margin-top: 12vh;">
        <div class="card bg-white shadow p-4" style="width: 95%; max-width: 1200px;">
            <div class="d-flex ms-3 mb-2" style="gap: 57rem; padding-right: 1rem; margin-top: 3rem;">
                <h3 class="fw-semibold mb-4" style="text-decoration: underline;">
                    Blogs
                </h3>
                <span style="font-size: 0.85rem; color: gray; white-space: nowrap;">
                  <button type="button" class="btn btn-success rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#addData">
                      Tambah <i class="bi bi-plus-circle-dotted"></i>
                  </button>
                </span>
                </div>
                <!-- MODAL ADD DATA -->
                    <div class="modal fade" id="addData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Blog</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="mb-3">
                                      <input type="hidden" name="id">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Foto</label>
                                    <input type="file" class="form-control" name="thumbnail" accept="image/*" onchange="previewImage(event)" required>
                                    <img id="preview" src="" style="width: 8rem; height: 8rem; display: none;" alt="">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Blog" required>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" placeholder="Masukkan Dekripsi Blog" required></textarea>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                  <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                               </form>
                            </div>
                        </div>
                    </div>
            <div class="table-responsive" style="margin-top: 1.5rem;">
                <table class="table align-middle text-center">
                    <thead class="text-center">
                        <tr>
                            <th>No.</th>
                            <th>Thumbnail</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $blog->thumbnail) }}" style="width: 8rem; height: 8rem;" alt="">
                            </td>
                            <td>{{ $blog->judul }}</td>
                            <td>
                              <div style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                {{ $blog->deskripsi }}
                              </div>
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <button type="button" class="btn btn-sm btn-warning rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#updateData{{ $blog->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#deleteData{{ $blog->id }}">
                                        Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                            <!-- MODAL UPDATE -->
                            <div class="modal fade" id="updateData{{ $blog->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Blog</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                          <div class="modal-body">
                                            <div class="mb-3">
                                                <input type="hidden" name="id" value="{{ $blog->id }}">
                                            </div>
                                            <div class="mb-3">
                                              <label class="form-label">Foto</label>
                                              <input 
                                                type="file" 
                                                class="form-control" 
                                                name="thumbnail" 
                                                accept="image/*" 
                                                onchange="previewImage(event, 'preview{{ $blog->id }}')"
                                              >
                                              <img 
                                                id="preview{{ $blog->id }}" 
                                                src="{{ asset('storage/' .  $blog->thumbnail) }}" 
                                                class="mt-2" 
                                                style="max-width: 100%; height: auto;"
                                              >
                                            </div>
                                            <div class="mb-3">
                                              <label class="form-label">Judul</label>
                                              <input type="text" class="form-control" name="judul" value="{{ $blog->judul }}" required>
                                            </div>
                                            <div class="mb-3">
                                              <label class="form-label">Deskripsi</label>
                                              <textarea class="form-control" name="deskripsi" required>{{ $blog->deskripsi }}</textarea>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                          </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL DELETE -->
                            <div class="modal fade" id="deleteData{{ $blog->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <form action="{{ route('admin.destroy', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <input type="hidden" name="id" value="{{ $blog->id }}">
                                                <h5 class="text-center">Yakin Ingin Menghapus Data dengan <br> ID : {{ $blog->id }}</h5>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                          <button type="submit" class="btn btn-danger">Hapus</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                        @endforeach
                    </tbody>
                </table>
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
                        <img src="{{ asset('src/assets/icon/loc.png') }}" alt="loc">
                    </div>
                    <p>Jl. Raya Pati-Kayen, Blaru, Kec. Pati, Kabupaten Pati, Jawa Tengah 59114</p>
                </div>
                <div class="footer-info-item d-flex gap-2 align-items-center">
                    <div class="icon d-flex align-items-center p-3" style="background-color: #198754; border-radius:100%">
                        <img src="{{ asset('src/assets/icon/wa.png') }}" alt="loc">
                    </div>
                    <a href="https://wa.me/+6281325696614" class="text-white" style="text-decoration: none;">+62 813-2569-6614</a>
                </div>
                <div class="footer-info-item d-flex gap-2 align-items-center">
                    <div class="icon d-flex align-items-center p-3" style="background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); border-radius:100%">
                        <img src="{{ asset('src/assets/icon/insta.png') }}" alt="loc">
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
    function previewImage(event, previewId = 'preview') {
        const input = event.target;
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = "";
            preview.style.display = 'none';
        }
    }
</script>
</html>