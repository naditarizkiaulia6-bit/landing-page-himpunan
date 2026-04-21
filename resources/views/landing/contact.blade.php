<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }
        .hero {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .card {
            border-radius: 15px;
            border: none;
        }
        .contact-icon {
            font-size: 25px;
            color: #0d6efd;
        }
        .btn-custom {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            border: none;
        }
        .btn-custom:hover {
            opacity: 0.9;
        }
        .social a {
            font-size: 20px;
            margin: 0 10px;
            color: #0d6efd;
        }
    </style>
</head>
<body>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu dan menerima masukan dari kamu 🚀</p>
    </div>
</section>

<!-- CONTACT -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <!-- INFO KONTAK -->
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-4">Informasi</h4>

                    <p><i class="fas fa-map-marker-alt contact-icon"></i> Sumbawa, NTB</p>
                    <p><i class="fas fa-envelope contact-icon"></i> himpunan@email.com</p>
                    <p><i class="fas fa-phone contact-icon"></i> +62 812-3456-7890</p>

                    <hr>

                    <h6>Follow Us</h6>
                    <div class="social">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- FORM -->
            <div class="col-md-8">
                <div class="card p-4 shadow-sm">
                    <h4 class="mb-4">Kirim Pesan</h4>

                    <form method="POST" action="#">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="text" name="subjek" class="form-control" placeholder="Subjek">
                        </div>

                        <div class="mb-3">
                            <textarea name="pesan" rows="5" class="form-control" placeholder="Tulis pesan kamu..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-custom px-4">Kirim Pesan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MAP -->
<section>
    <iframe 
        src="https://www.google.com/maps?q=Sumbawa&output=embed"
        width="100%" height="300" style="border:0;" allowfullscreen="">
    </iframe>
</section>

<!-- FOOTER -->
<footer class="text-center py-4 bg-dark text-white">
    <p class="mb-0">© 2026 Himpunan Mahasiswa | All Rights Reserved</p>
</footer>

</body>
</html>
