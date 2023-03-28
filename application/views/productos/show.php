<?php $this->load->view('layout/header') ?>
<div class="container-fluid ">

    <div class="row justify-content-center ">
        <div class="w-50">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-outline-dark float-right" href="<?= base_url('/'); ?>">
                        View All Projects
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?= $producto['title'] ?></h4>
                    <p class="card-text">$<?= $producto['price'] ?></p>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->load->view('layout/footer') ?>