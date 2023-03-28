</div>
</main>
<footer class="w-100  bg-black text-light position-absolute bottom-0 start-0 py-3">
    <h6 class="text-center">Challenge Dante Iturri</h6>
</footer>
<script>
    $(document).ready(function() {
        $('.ver-producto').click(function() {
            const id = $(this).data('id');
            const siteUrl = $(location).attr('href');
            // Redireccionar a la página de edición del producto
            window.location.href = siteUrl + 'producto/show/' + id;
        });
        // Acción al hacer click en botón "Editar"
        $('.editar-producto').click(function() {
            const id = $(this).data('id');
            const siteUrl = $(location).attr('href');
            // Redireccionar a la página de edición del producto
            window.location.href = siteUrl + 'producto/edit/' + id;
        });

        $('.eliminar-producto').click(function() {
            const id = $(this).data('id');
            const siteUrl = $(location).attr('href');
            if (confirm('¿Está seguro que desea eliminar este producto?')) {
                // Hacer petición AJAX para eliminar el producto
                $.ajax({
                    url: siteUrl + '/producto/delete/' + id,
                    method: 'POST',
                    success: function() {
                        // Recargar la página
                        location.reload();
                    },
                    error: function() {
                        alert('Error al eliminar el producto');
                    }
                });
            }
        });
    });
</script>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</body>

</html>