<?= $this->include('pages/header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/formulir.css'); ?>">
<br><br><br><br>
<div class="container d-flex justify-content-center">
    <div class="formulir py-4">
        <form method="post" action="<?= base_url('/admin/staff/update/' . $staff['id']); ?>">
        <input type="hidden" name="_method" value="PUT">
            <h3 class="text-center job-title">EDIT STAFF JOBS</h3>
            <hr>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='job_title' class="ms-4" for="">Jobs Title</label>
                </div>
                <div class="col-10">
                    <input id="job_title" value="<?= $staff['job_title']; ?>" name="job_title" type="text" autocomplete="off">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='deskripsi' class="ms-4" for="">Description</label>
                </div>
                <div class="col-10">
                    <input id="deskripsi" value="<?= $staff['description']; ?>" name="deskripsi" autocomplete="off" type="text">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for='expired_date' class="ms-4" for="">Expired Apply</label>
                </div>
                <div class="col-10">
                    <input id="expired_data" value="<?= $staff['expired_date']; ?>" name="tanggal" type="date">
                </div>
            </div>

            <button  type="submit" class="btn btn-success w-100">UBAH</button>
        </form>
    </div>
</div>