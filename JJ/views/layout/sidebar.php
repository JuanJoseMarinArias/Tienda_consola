<!-- BARRA LATERAL -->
<aside id="lateral">
    
    <div id="carrito" class="block_aside">
        <h3>Info Carro de compras</h3>
        <ul>
            <?php $stats = Utils::statsCarrito(); ?>
            <h3>N De Productos: (<?= $stats['count'] ?>)</h3>
           <h3> Total A Pagar: <?= $stats['total'] ?>$</h3>
            <a href="<?=base_url?>carrito/index"><h3>Ver Carro</h3></a>
        </ul>
    </div>
    
    <div id="login" class="block_aside">
        
        <?php if (!isset($_SESSION['identity'])): ?>
        <h3>Iniciar Sesion</h3>
        <form action="<?=base_url?>usuario/login" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" />
            <label for="password">Contraseña</label>
            <input type="password" name="password" />
            <input type="submit" value="Enviar" />
        </form>
        <?php else: ?>
            <h3>Nombre De Usuario: <br><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
        <?php endif; ?>

        <ul >
            <?php if (isset($_SESSION['admin'])): ?>
               <h3>
               <a href="<?=base_url?>categoria/index">Consultar Las Categorias</a>
               </h3>
               <h3>
               <a href="<?=base_url?>producto/gestion"class="text-dark">Consultar Los Productos</a>
               </h3>
               <h3>
               <a href="<?=base_url?>pedido/gestion"class="text-dark">Consultar Los Pedidos</a>
               </h3>    
            <?php endif; ?>
            <?php if (isset($_SESSION['identity'])): ?>
                <h3><a href="<?=base_url?>pedido/mis_pedidos">Los Pedidos</a></h3>
                <h3><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></h3>
            <?php else: ?>
                <h3><a href="<?=base_url?>usuario/registro">Registrarse</a></h3>
            <?php endif; ?>
        </ul>
    </div>

</aside>

<!-- CONTENIDO CENTRAL -->
<div id="central">