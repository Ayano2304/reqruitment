<?= $this->include('pages/header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/formulir.css'); ?>">
<br><br><br><br>
<div class="container d-flex justify-content-center">
    <div class="formulir py-4">
        <form method="post" action="/admin/admin_insert">
            <h3 class="text-center job-title">ADD NEW STAFF JOBS</h3>
            <hr>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='job_title' class="ms-4" for="">Jobs Title</label>
                </div>
                <div class="col-10">
                    <input id="job_title" name="job_title" type="text" autocomplete="off">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='deskripsi' class="ms-4" for="">Description</label>
                </div>
                <div class="col-10">
                    <input id="deskripsi" name="deskripsi" autocomplete="off" type="text">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='expired_date' class="ms-4" for="">Expired Apply</label>
                </div>
                <div class="col-10">
                    <input id="expired_data" name="tanggal" type="date">
                </div>
            </div>

            <button type="submit" class="btn btn-success">ADD</button>
        </form>
    </div>
</div>