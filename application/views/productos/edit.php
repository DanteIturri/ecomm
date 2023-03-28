<?php $this->load->view('layout/header') ?>
<div class="container-fluid ">
    <form action="<?= base_url("productos/update/{$producto['id']}") ?>" method="post">
        <div class="row justify-content-center ">
            <div class="w-50">
                <div class="mb-3 input-group-sm ">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?= $producto['title'] ?>" placeholder="Pone un Titulo">

                </div>
                <div class="mb-3 input-group-sm ">
                    <label for="price" class="form-label">Precio</label>
                    <input type="text" name="price" id="price" class="form-control" value="<?= $producto['price'] ?>" placeholder="dale un precio">
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" name="" id="" class="btn btn-outline-dark btn-sm">CREAR</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $this->load->view('layout/footer') ?>