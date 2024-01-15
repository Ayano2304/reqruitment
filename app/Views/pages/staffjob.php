<style>
    .img-card{
        width: 12px;
    }
    
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<br><br><br><br>

<h3 class="my-3 text-center">Lowongan Staff </h3 >
<div class="container d-flex gap-3 justify-content-center">
    <?php foreach ($staff as $data_staff) : ?>
        <div class="card py-5 px-3" style="width: 18rem;">
            <img src="<?= base_url('assets/img/logo.png'); ?>" class="card-img-top img-card" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $data_staff['job_title'] ?></h5>
                <p class="card-text desc"><?= $data_staff['description'] ?></p>
                <a href="/form/<?= $data_staff['id'];?>" class="btn btn-primary w-100">Lamar</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
