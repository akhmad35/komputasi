<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoGarden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #39D97A; /* Warna navbar */
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .content-section {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }
        .text-section {
            width: 60%;
        }
        .image-section {
            width: 35%;
            display: flex;
            justify-content: space-between;
        }
        .our-services {
            margin-top: 50px;
        }
        .service-box {
            background-color: #b8f7c6;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            position: relative;
        }

        .subtitle {
            position: relative;
            padding-left: 40px;
        }
        .subtitle::before,
        .subtitle::after {
            content: '';
            width: 10px;
            height: 10px;
            background-color: #39D97A; /* Warna bulatan */
            border-radius: 50%;
            position: absolute;
            left: 0;
        }
        .subtitle::before {
            top: 5px;
        }
        .subtitle::after {
            top: 25px;
        }

        .feature-image {
            height: 150px;
            width: 48%; /* Ukuran gambar diatur 48% */
            background-color: #e1e1e1;
            text-align: center;
            line-height: 150px;
            color: black;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .download-btn {
            background-color: #00C851;
            color: white;
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 50px;
        }
        .download-btn:hover {
            background-color: #007E33;
        }

        /* Styling untuk bagian baru */
        .new-section {
            padding: 40px 0;
            background-color: #f8f9fa;
            text-align: center;
        }

        .why-go-garden {
            display: flex;
            align-items: flex-start; /* Mengatur teks di atas gambar */
        }

        .why-go-garden h2 {
            margin-right: 20px; /* Memberikan jarak antara teks dan gambar */
            text-align: left;
        }

        .why-go-garden img {
            max-width: 100%; /* Membuat gambar responsif */
            height: auto; /* Menjaga proporsi gambar */
            margin-bottom: 20px; /* Memberikan spasi bawah */
        }

        h2.text-success {
            font-size: 1.75rem;
            font-weight: 600;
        }
        h1.text-dark {
            font-size: 3rem;
            font-weight: 800;
        }
        p {
            font-size: 1.2rem;
            color: #5a5a5a;
        }
        h3 {
            font-size: 1.5rem;
            font-weight: 600;
        }
        h5 {
            font-size: 1.25rem;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="GoGarden Logo" style="height: 50px;">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <button class="btn download-btn ms-3">Download</button>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container content-section">
        <!-- Left Text Section -->
        <div class="text-section">
            <h2 class="text-success subtitle">Garden maintenance, job seekers, plantation solutions</h2>
            <h1 class="text-dark">Trusted Plantation Solutions</h1>
            <p>Garden maintenance, job seekers, plantation solutions</p>
            <h3 class="mt-5">Our Service</h3>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="service-box">
                        <h5 class="service-title">Garden Maintenance</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <h5 class="service-title">Job Seekers</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <h5 class="service-title">Plantation Solutions</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Image Section -->
        <div class="image-section">
            <div class="feature-image">Gambar 1</div>
            <div class="feature-image">Gambar 2</div>
        </div>
    </div>

    <!-- New Section -->
    <div class="new-section">
        <div class="container why-go-garden">
            <h2>Why GoGarden?</h2>
            <img src="path_to_your_image.jpg" alt="GoGarden" class="img-fluid"> <!-- Ganti dengan path gambar yang sesuai -->
            <div>
                <p>GoGarden adalah solusi terbaik untuk kebutuhan pemeliharaan kebun, pencarian pekerjaan, dan solusi perkebunan lainnya. Dengan aplikasi kami, pengguna dapat menemukan informasi yang dibutuhkan dengan mudah dan efisien.</p>
            </div>
        </div>

        <h2>APP Features</h2>
        <p>ehfbewdb... (masukkan detail fitur di sini)</p>
        <h2>How To Create An Order</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="path_to_your_image1.jpg" alt="Image 1" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="path_to_your_image2.jpg" alt="Image 2" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="path_to_your_image3.jpg" alt="Image 3" class="img-fluid">
            </div>
        </div>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024 GoGarden. All rights reserved.</p>
    </footer>

    <script>
        // Script untuk menambahkan efek scroll-triggered
        window.addEventListener('scroll', function() {
            const elements = document.querySelectorAll('.fade-in');
            const scrollTop = window.scrollY;

            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top + window.pageYOffset;
                const isVisible = scrollTop > elementTop - window.innerHeight + 100;

                if (isVisible) {
                    element.classList.add('scroll-visible');
                }
            });
        });
    </script>
</body>
</html>
