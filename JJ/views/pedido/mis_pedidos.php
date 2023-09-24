<?php if (isset($gestion)): ?>
    <h1>Consulta De Los Pedidos</h1>
<?php else: ?>
    <h1>Mis pedidos</h1>
<?php endif; ?>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">N° Pedido</th>
        <th scope="col">Coste</th>
        <th scope="col">Fecha</th>
        <th scope="col">Estado</th>
    </tr>
    <?php while ($ped = $pedidos->fetch_object()):
    ?>
    <tr>
        <td>
            <a href="<?=base_url?>pedido/detalle&id=<?=$ped->id?>"><?=$ped->id?></a>
        </td>
        <td>
            <?=$ped->coste?> $
        </td>
        <td>
            <?=$ped->fecha?>
        </td>
        <td>
            <?= Utils::showStatus($ped->estado) ?>
        </td>
    </tr>
    <?php endwhile; ?>
</thead>
</table>