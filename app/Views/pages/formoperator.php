<?= $this->include('pages/header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/formulir.css'); ?>">
<br><br><br><br>
<div class="container d-flex justify-content-center">
    <div class="formulir py-4">
        <form method="post" action="<?= base_url('add_employe'); ?>">
            <h3 class="text-center job-title">REGISTRASION FORM <br> (<?php echo $operator['job_title']; ?>)</h3>
            <hr>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='ktp' class="ms-4" for="">No KTP</label>
                </div>
                <div class="col-10">
                    <input id="ktp" name="ktp" type="number">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='nama' class="ms-4" for="">Nama Lengkap</label>
                </div>
                <div class="col-10">
                    <input id="nama" name="nama" type="text">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='alamat' class="ms-4" for="">Alamat Sesuai KTP</label>
                </div>
                <div class="col-10">
                    <input id="alamat" name='alamat' type="text">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='kab' class="ms-4" for="">Kota/Kab</label>
                </div>
                <div class="col-10">
                    <input id="kab" name="kabupaten"  type="text">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='provinsi' class="ms-4" for="">Provinsi</label>
                </div>
                <div class="col-10">
                    <input id="provinsi" name="provinsi" type="text">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='tempatlahir' class="ms-4" for="">Tempat Lahir</label>
                </div>
                <div class="col-10">
                    <input id="tempatlahir" name="tempat_lahir" type="text">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='ttl' class="ms-4" for="">Tanggal Lahir</label>
                </div>
                <div class="col-10">
                    <input id="ttl" name="ttl" type="date">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='kelamin' class="ms-4" for="">Jenis Kelamin</label>
                </div>
                <div class="col-10">
                    <select id="kelamin" class="form-select" name="kelamin">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='pernikahan' class="ms-4" for="">Status Pernikahan</label>
                </div>
                <div class="col-10">
                    <select name="pernikahan" id='pernikahan' class="form-select" aria-label="Default select example">
                        <option value="Lajang">Belum Menikah</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Duda">Duda</option>
                        <option value="Janda">Janda</option>
                    </select>
                </div>

                <input type="text" name="posisi" value="<?php echo $operator['job_title']; ?>">
            </div>
            <!-- <div class="row mb-4">
                <div class="col-2">
                    <label for='ktp' class="ms-4" for="">No KTP</label>
                </div>
                <div class="col-10">
                    <input id="ktp" type="number">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='ktp' class="ms-4" for="">No KTP</label>
                </div>
                <div class="col-10">
                    <input id="ktp" type="number">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='ktp' class="ms-4" for="">No KTP</label>
                </div>
                <div class="col-10">
                    <input id="ktp" type="number">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='ktp' class="ms-4" for="">No KTP</label>
                </div>
                <div class="col-10">
                    <input id="ktp" type="number">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='ktp' class="ms-4" for="">No KTP</label>
                </div>
                <div class="col-10">
                    <input id="ktp" type="number">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='ktp' class="ms-4" for="">No KTP</label>
                </div>
                <div class="col-10">
                    <input id="ktp" type="number">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='ktp' class="ms-4" for="">No KTP</label>
                </div>
                <div class="col-10">
                    <input id="ktp" type="number">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='ktp' class="ms-4" for="">No KTP</label>
                </div>
                <div class="col-10">
                    <input id="ktp" type="number">
                </div>
            </div> -->

            <button type="submit" class="btn btn-success w-100">Submit</button>
        </form>
    </div>
</div>