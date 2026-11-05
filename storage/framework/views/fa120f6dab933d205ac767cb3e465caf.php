

<?php $__env->startSection('titulo', 'Inicio'); ?>

<?php $__env->startSection('contenido'); ?>

<section class="hero">
    <div class="hero-contenido">
        <p class="subtitulo">ÉLÉA WELLNESS & SPA</p>

        <h1>Un momento para vos.<br>Una experiencia de bienestar.</h1>

        <p>
            Descubrí un espacio de relajación, cuidado y armonía.
            Regalate el tiempo que merecés.
        </p>

        <a href="<?php echo e(route('turnos.create')); ?>" class="boton">
            Reservar mi turno
        </a>
    </div>
</section>

<section class="seccion">
    <h2>Bienvenidos a ÉLÉA</h2>

    <p>
        Somos un espacio dedicado al bienestar integral.
        Ofrecemos tratamientos faciales, corporales y masajes
        pensados para renovar tu energía y cuidar de vos.
    </p>

    <a href="<?php echo e(route('servicios')); ?>" class="boton-secundario">
        Conocer servicios
    </a>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\spa\spa\resources\views/paginas/inicio.blade.php ENDPATH**/ ?>