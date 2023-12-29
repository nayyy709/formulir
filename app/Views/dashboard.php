<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Formulir</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">



    <!-- Bootstrap core CSS -->
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


</head>

<body>
    <?= $this->renderSection('content') ?>


    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>



    <div class="container mt-5" style="margin: auto;">
        <h1 class="text-center mt-3">FORMULIR</h1>
        <h5 class="text-center mb-4">RSUD dr. M. YUNUS</h5>
        <img class="mx-auto d-block" src="<?= base_url('uploads/gambar.jpg') ?>" alt="" width="70px">

        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <div class="col-xl-4 col-md-12 mb-4">
                    <div class="card border border-5 border-success border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a class="card-title" style="text-decoration:none" href="<?= base_url('pasien/halaman') ?>">Tambah Data Formulir</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <div class="col-xl-4 col-md-12 mb-4">
                    <div class="card border border-5 border-success border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a class="card-title" style="text-decoration:none" href="<?= base_url('pasien/halamandata') ?>">Data Formulir</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>






</body>


</html>