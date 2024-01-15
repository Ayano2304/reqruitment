<!doctype html>
<html lang="en">

<head>
    <title>PT METRO PEARL INDONESIA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <header>
        <nav style="position: fixed; top: 0">
            <input type="checkbox" id="check" />
            <label for="check" class="checkbtn">
                <i class="fas fa-bars menu-tiga"></i>
            </label>
            <a href="#" class="text-decoration-none ms-5">
                <img src="<?= base_url('assets/img/logo_2.png'); ?>" alt="logo_perusahaan" class="logo">
                <span class="text-white pt-name">PT METRO PEARL INDONESIA</span>
            </a>
            <ul id="list_nav" class="me-5">
                <span class="text-white fs-5">ADMIN PAGE</span>
                <li><a class="nav_link" href="/logout"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                        </svg>LOG OUT</a></li>
            </ul>
        </nav>
    </header>

    <!-- Bootstrap JavaScript Libraries -->
    <br><br><br><br><br>
    <div class="container mb-4">
        <h4>List Lowongan Kerja Staff</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jobs Name</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Expired At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($staff as $st_jbs) : ?>
                    <tr>
                        <th><?= $nomor++; ?></th>
                        <td><?= $st_jbs['job_title']; ?></td>
                        <td><?= $st_jbs['description']; ?></td>
                        <td><?= $st_jbs['expired_date']; ?></td>
                        <td>
                            <a href="<?= base_url('staff/edit/' . $st_jbs['id']); ?>" class="btn btn-warning w-100 mb-2">Edit</a>
                            <a href="<?= base_url('staff/delete/' . $st_jbs['id']); ?>" class="btn btn-danger w-100">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <a href="/admin/addJobs" class="btn btn-success w-100">Tambah Data</a>
    </div>
    <div class="container mb-4">
        <h4>List Lowongan Kerja Operator</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jobs Name</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Jumlah Pelamar</th>
                    <th scope="col">Expired At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($operator as $op_jbs) : ?>
                    <tr>
                        <th><?= $nomor++; ?></th>
                        <td><?= $op_jbs['job_title']; ?></td>
                        <td><?= $op_jbs['description']; ?></td>
                        <td></td>
                        <td><?= $op_jbs['expired_date']; ?></td>
                        <td>
                            <a href="<?= base_url('operator/edit/' . $op_jbs['id']); ?>" class="btn btn-warning w-100 mb-2">Edit</a>
                            <a href="<?= base_url('operator/delete/' . $op_jbs['id']); ?>" class="btn btn-danger w-100">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <a href="/admin/addJobsOP" class="btn btn-success w-100">Tambah Data</a>
    </div>
    <div class="container mb-4">
        <h4>List Pelamar Operator</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Status Nikah</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Posisi Yang Dilamar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($employe_1 as $ep_1) : ?>
                    <tr>
                        <th><?= $nomor++; ?></th>
                        <td><?= $ep_1['nama']; ?></td>
                        <td><?= $ep_1['tgl_lahir']; ?></td>
                        <td><?= $ep_1['provinsi']; ?></td>
                        <td><?= $ep_1['kelamin']; ?></td>
                        <td><?= $ep_1['status_nikah']; ?></td>
                        <td><?= $ep_1['kelamin']; ?></td>
                        <td><?= $ep_1['posisi']; ?></td>
                        <td>
                            <a href="<?= base_url('operator_staff/detail/' . $ep_1['id']); ?>" class="btn btn-primary w-100 mb-2">Detail</a>
                            <a href="<?= base_url('operator/delete/' . $ep_1['id']); ?>" class="btn btn-danger w-100">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <a href="/admin/addJobsOP" class="btn btn-success w-100">Tambah Data</a>
    </div>

    <p>Jumlah Pelamar Operator Sewing Saat Ini : <?= $sewing; ?></p>
    <p>Jumlah Pelamar Operator Sewing Saat Ini : <?= $cutting; ?></p>
    <p>Jumlah Pelamar Operator Sewing Saat Ini : <?= $assembling; ?></p>


</body>

</html>