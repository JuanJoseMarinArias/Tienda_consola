<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Videoconsolas.com</title>
        <link rel="shortcut icon" href="<?=base_url?>assets/img/icono.png">
        <link rel="stylesheet" href="<?=base_url?>assets/css/stilos.css" />
        <link rel="stylesheet" href="<?=base_url?>assets/css/bootstrap.css" />
    </head>
    <body>
        <div id="container">
     


         
            <?php $categorias = Utils::showCategorias(); ?>
            <nav id="menu3">
                <ul>
                    <li>
                        <a href="<?=base_url?>">Inicio</a>
                    </li>
                    <?php while ($cat = $categorias->fetch_object()): ?>
                        <li>
                            <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </nav>

            <div id="content">