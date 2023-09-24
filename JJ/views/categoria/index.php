<h1>Consultas De Categoria</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">
    Crear categoría
</a>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
    </tr>
    <?php while ($cat = $categorias->fetch_object()): ?>
        <tr>
            <td><?= $cat->id; ?></td>
            <td><?= $cat->nombre; ?></td>
        </tr>
    <?php endwhile; ?>
    </thead>
</table>
