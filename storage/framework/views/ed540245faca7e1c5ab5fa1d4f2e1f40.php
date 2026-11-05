<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('titulo'); ?> | ÉLÉA Wellness & Spa</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<header>
    <div class="contenedor encabezado">
        <a href="<?php echo e(route('inicio')); ?>" class="logo">
            ÉLÉA <span>WELLNESS & SPA</span>
        </a>

        <nav>
            <a href="<?php echo e(route('inicio')); ?>">Inicio</a>
            <a href="<?php echo e(route('servicios')); ?>">Servicios</a>
            <a href="<?php echo e(route('turnos.create')); ?>">Reservar</a>
            <a href="<?php echo e(route('turnos.index')); ?>">Turnos</a>
            <a href="<?php echo e(route('contacto')); ?>">Contacto</a>
        </nav>
    </div>
</header>

<main>
    <?php echo $__env->yieldContent('contenido'); ?>
</main>

<footer>
    <p>ÉLÉA Wellness & Spa © 2026</p>
    <p>Un espacio para conectar con tu bienestar.</p>
</footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\spa\spa\resources\views/layouts/app.blade.php ENDPATH**/ ?>