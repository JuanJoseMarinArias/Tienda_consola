<h1>Carro De compras</h1>

<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Unidades</th>
            <th scope="col">Acciones</th>
        </tr>
        <?php
        foreach ($carrito as $indice => $elemento):
            $producto = $elemento['producto'];
            ?>
            <?php if($producto->stock > 0): ?>
                <tr>
                    <td><?php if ($producto->imagen != null): ?>
                            <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito"/>
                        <?php else: ?>
                            <img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito"/>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                    </td>
                    <td>
                        <?= $producto->precio ?>
                    </td>
                    <td>
                        <?= $elemento['unidades'] ?>
                        <div class="updown-unidades">
                            <a href="<?= base_url ?>carrito/up&index=<?= $indice ?>" class="button">+</a>
                            <a href="<?= base_url ?>carrito/down&index=<?= $indice ?>" class="button">-</a>
                        </div>
                    </td>
                    <td>
                        <a href="<?= base_url ?>carrito/delete&index=<?= $indice ?>" class="button button-carrito button-red">Quitar producto</a>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </thead>
    </table>
    <br/>

    <div class="delete-carrito">
        <a href="<?= base_url ?>carrito/delete_all" class="button button-delete button-red">Vaciar carrito</a>
        <a href="<?= base_url ?>pedido/hacer" class="button button-pedido">Hacer pedido</a>

    </div>
    <div class="total-carrito">
                <?php $stats = Utils::statsCarrito(); ?>
        <h3>Precio Total: <?= $stats['total'] ?>$</h3>
        
    </div>

<?php else: ?>
    <p>Carro Vacio :C</p>
<?php endif; ?>