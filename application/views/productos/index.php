<?php $this->load->view('layout/header') ?>

<div class="d-flex justify-content-end mb-4 pe-3">
    <a class="link-dark" href="<?= base_url('producto/create') ?>">
        <i class='bx bx-list-plus bx-md bx-fw'></i>
    </a>
</div>
<div class="table-responsive">
    <table class="table table-hover table-striped table-sm ">
        <thead class="table-dark ">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Precio</th>
                <th class="text-center" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto) : ?>
                <tr class="">
                    <td scope="row"><?= $producto['id'] ?></td>
                    <td><?= $producto['title'] ?></td>
                    <td><?= $producto['price'] ?></td>
                    <td class="text-center">
                        <button class="ver-producto btn" data-id="<?= $producto['id'] ?>">
                            <i class='bx-fw bx bx-show bx-sm'></i>
                        </button>
                        |<button class="editar-producto btn" data-id="<?= $producto['id'] ?>">
                            <i class='bx-fw bx bx-edit-alt bx-sm'></i>
                        </button>
                        | <button class="btn eliminar-producto" data-id="<?= $producto['id'] ?>"><i class='bx-fw bx bx-trash bx-sm'></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<?php $this->load->view('layout/footer') ?>