<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        .detail {
            background: rgba(255, 255, 255, 0.68);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .detail img {
            width: 150px;
        }
    </style>

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <div class="detail">
                <img src="<?= base_url('assets/img/ayano.jpg'); ?>" class="rounded-circle" alt="">
                <div class="value">
                    <p>Nama <?= $operator['nama']; ?></p>
                    <p>No Ktp <?= $operator['ktp']; ?></p>
                    <p>Alamat <?= $operator['alamat']; ?></p>
                    <p>Kota <?= $operator['kota']; ?></p>
                    <p>Provinsi <?= $operator['provinsi']; ?></p>
                    <p>Tempat Lahir <?= $operator['tempat_lahir']; ?></p>
                    <p>Tanggal Lahir <?= $operator['tgl_lahir']; ?></p>
                    <p>Jenis Kelamin <?= $operator['kelamin']; ?></p>
                    <p>Status Kawin <?= $operator['status_nikah']; ?></p>
                    <a href="https://wa.me/089605360021" target="_blank" class="btn btn-success">Hubungi</a>

                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>