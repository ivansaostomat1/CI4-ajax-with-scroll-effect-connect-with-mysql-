<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.min.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("css/style.css") ?>" />
    <script defer src="<?= base_url("js/app.js") ?>"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark hidden">
            <a class="navbar-brand" href="<?= site_url('/') ?>">
                <img src="https://media.istockphoto.com/id/492399595/id/vektor/kartun-serigala-menjilati-cakar.jpg?s=612x612&w=is&k=20&c=on8ITyiOGu4JcAmGa84Swjp9MulJdgbGKnmAsqA26k0=" alt="" width="40" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#index">Beranda</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#catalog">Katalog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#support">Dukungan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="index">
        <div class="container mt-5">
            <div class="jumbotron">
                <h1 class="display-4">Selamat Datang di Raccoon Car!</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php foreach ($mobils as $index => $mobil) : ?>
                            <?php if ($index < 5) : ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>"></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php foreach ($mobils as $index => $mobil) : ?>
                            <?php if ($index < 5) : ?>
                                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                    <div class="product-card">
                                        <img src="<?= base_url('uploads/' . $mobil['gambar']) ?>" alt="<?= $mobil['nama'] ?>" class="product-image">
                                        <h2><?= $mobil['brand'] ?></h2>
                                        <h6><?= $mobil['nama'] ?></h6>
                                        <p><?= $mobil['deskripsi'] ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <p class="lead hidden">Temukan produk-produk terbaik kami di sini.</p>
                <hr class="my-4 hidden">
                <p class="hidden">Selamat datang di Showroom Mobil Impian Anda! Temukan keindahan dan kecanggihan dalam setiap detail kendaraan yang kami tawarkan. Mari jelajahi koleksi mobil terbaru kami dan temukan kendaraan impian Anda untuk menemani setiap petualangan di jalan raya. Kami siap membantu Anda menemukan mobil yang sempurna sesuai dengan gaya hidup dan kebutuhan Anda. Selamat menemukan mobil impian Anda bersama kami!</p>
                <button class="btn" onclick="location.href='<?= site_url('catalog') ?>';" type="button">
                    <strong>LIHAT KATALOG</strong>
                    <div id="container-stars">
                        <div id="stars"></div>
                    </div>
                    <div id="glow">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container hidden">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="about-section">
                        <h2>Tentang Kami</h2>
                        <p>Kami adalah showroom mobil yang beroperasi sejak tahun 2024. Kami menawarkan berbagai macam mobil dengan harga yang bersaing dan kualitas yang terjamin. Setiap mobil yang kami tawarkan telah lulus inspeksi ketat untuk memastikan keamanan dan kualitasnya.</p>
                        <p>Kami berkomitmen untuk memberikan pelayanan terbaik kepada pelanggan kami. Dengan pengalaman kami dalam industri otomotif, kami siap membantu Anda menemukan mobil yang sesuai dengan kebutuhan dan budget Anda.</p>
                        <p>Jangan ragu untuk mengunjungi showroom kami dan jelajahi berbagai pilihan mobil yang kami sediakan. Tim kami akan dengan senang hati membantu Anda dalam proses pembelian mobil impian Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="catalog">
        <div class="container">
            <div class="row">
                <?php foreach ($mobils as $mobil) : ?>
                    <div class="col-md-4">
                        <div class="product-card">
                            <div class="isi hidden">
                                <img src="<?= base_url('uploads/' . $mobil['gambar']) ?>" alt="Product Image" class="product-image">
                                <h2><?= $mobil['nama'] ?></h2>
                                <h6><?= $mobil['brand'] ?></h6>
                                <p><?= $mobil['deskripsi'] ?></p>
                            </div>
                            <div class="btn-container hidden">
                                <button class="btn" type="button">
                                    <strong>ADD TO CART</strong>
                                    <div id="container-stars">
                                        <div id="stars"></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="support">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="support-section">
                    <h1>Dukungan</h1>
                    <p>Jika Anda memiliki pertanyaan atau butuh bantuan, silakan hubungi kami melalui formulir di bawah ini:</p>
                    <form class="support-form">
                        <div class="form-group hidden">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="form-group hidden">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                        </div>
                        <div class="form-group hidden">
                            <label for="message">Pesan:</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                <button class="btn hidden" type="button">
                    <strong   strong>KIRIM PESAN</strong>
                    <div id="container-stars">
                        <div id="stars"></div>
                        </div>
                        <a href="#faq" role="button"></a>
                        <div id="glow">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section id="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="faq-section hidden">
                    <h1>Pertanyaan yang Sering Diajukan</h1>
                    <div class="faq-question hidden">
                        <h3>Apa jenis mobil yang tersedia di showroom Anda?</h3>
                        <p class="faq-answer hidden">Kami menyediakan berbagai jenis mobil bekas, termasuk sedan, SUV, hatchback, dan lainnya. Anda dapat menemukan berbagai merek dan model yang berbeda.</p>
                    </div>
                    <div class="faq-question hidden">
                        <h3>Apakah mobil yang ditawarkan telah lulus inspeksi?</h3>
                        <p class="faq-answer hidden">Ya, setiap mobil yang kami tawarkan telah lulus inspeksi yang ketat untuk memastikan kualitasnya. Kami memastikan bahwa mobil-mobil kami aman dan layak untuk digunakan.</p>
                    </div>
                    <div class="faq-question hidden">
                        <h3>Bagaimana cara membeli mobil dari showroom Anda?</h3>
                        <p class="faq-answer hidden">Anda dapat mengunjungi showroom kami langsung untuk melihat mobil yang tersedia atau menghubungi kami untuk informasi lebih lanjut. Tim kami akan dengan senang hati membantu Anda dalam proses pembelian.</p>
                    </div>
                    <div class="faq-question hidden">
                        <h3>Apakah Anda menerima tukar tambah mobil?</h3>
                        <p class="faq-answer hidden">Ya, kami menerima tukar tambah mobil. Silakan hubungi kami untuk penilaian dan penawaran terbaik untuk mobil Anda.</p>
                    </div>
                    <!-- Tambahkan pertanyaan dan jawaban lainnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
