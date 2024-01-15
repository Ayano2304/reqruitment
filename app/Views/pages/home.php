<section class="home" id="home">
    <div class="container-fluid">
        <div class="hero ">

            <div class="text-white me-5 text-center data-text">
                <h3>Welcome</h3>
                <p>To Protect And Develop Bussines For The Survival Off All Parties Involve</p>
                <a href="#visimisi" class="btn btn-primary">Get Started</a>
            </div>

        </div>
    </div>
</section>

<section class="visimisi" id="visimisi">
    <h4>Our Vision & Mission</h4>
    <div class="row mt-5">
        <div class="col d-flex mt-3 justify-content-xl-end justify-content-center">
            <div class="kotak">
                <q>To Be a world Class Footwear Manufacturing Company in Terms of Quality of Product & Human Resources</q>
            </div>
        </div>
        <div class="col d-flex mt-3 justify-content-center justify-content-xl-start">
            <div class="kotak">
                <q>To Protect & Grow the Business For Sustainable Living Of All Interrelated Stakeholders</q>
            </div>
        </div>
    </div>

    <h4 class="mt-5">Value</h4>
    <div class="container mt-5">
        <div class="values">
            <div class="kotak_values">
                <h5>Always</h5>
                <p>Listening And Understanding First</p>
            </div>

            <div class="kotak_values">
                <h5>Take Ownership</h5>
                <p>In Everything</p>
            </div>

            <div class="kotak_values">
                <h5>Deliver</h5>
                <p>Amazing Services</p>
            </div>
            <div class="kotak_values">
                <h5>Commit</h5>
                <p>To Continuous Improvement</p>
            </div>
            <div class="kotak_values">
                <h5>Embrace</h5>
                <p>Creativity And Innovation</p>
            </div>
            <div class="kotak_values">
                <h5>Build</h5>
                <p>A Positive Team Enviroment</p>
            </div>
            <div class="kotak_values">
                <h5>Make</h5>
                <p>Good Things Happened</p>
            </div>
        </div>
    </div>

</section>

<section class="activity">
    <h4 class="text-center mt-5">Activity</h4>
    <div id="carouselExampleIndicators" class="carousel slide mt-5">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/kegiatan_new.jpg'); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/kegiatan_new2.jpg'); ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon slide-btn" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon slide-btn" aria-hidden="true"></span>
            <span class="visually-hidden bg-danger">Next</span>
        </button>
    </div>
</section>

<section class="job" id="job">
    <h4 class="text-center section-title">Job Vacansies</h4>

    <div class="container mt-5">
        <div class="d-flex gap-5 justify-content-center">
            <div class="pekerjaan">
                <div class="list-job py-5">
                    <h4 class="job-title">Staff</h4>
                    <svg class="mt-4" xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 24">
                        <path d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v4h5v-2h2v2h6v-2h2v2h5V8c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 11h-2v-2H9v2H7v-2H2v6c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-6h-5v2z"></path>
                    </svg>
                    <a href="<?php echo base_url('/staffjobs'); ?>" class="btn btn-primary">Lihat Pekerjaan</a>
                </div>
            </div>
            <div class="pekerjaan">
                <div class="list-job py-5">
                    <h4 class="job-title">Operator Produksi</h4>
                    <svg class="mt-4" xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 24">
                        <path d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v4h5v-2h2v2h6v-2h2v2h5V8c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 11h-2v-2H9v2H7v-2H2v6c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-6h-5v2z"></path>
                    </svg>
                    <a href="<?php echo base_url('/operatorjobs'); ?>" class="btn btn-primary">Lihat Pekerjaan</a>
                </div>
            </div>


        </div>
    </div>
</section>