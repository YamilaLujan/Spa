

<?php $__env->startSection('titulo', 'Servicios'); ?>

<?php $__env->startSection('contenido'); ?>

<section class="seccion">
    <p class="subtitulo">NUESTRAS EXPERIENCIAS</p>
    <h1>Servicios</h1>

    <div class="tarjetas">

        <?php $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <article class="tarjeta">
                <span class="categoria">
                    <?php echo e($servicio->categoria); ?>

                </span>

                <h3><?php echo e($servicio->nombre); ?></h3>

                <p><?php echo e($servicio->descripcion); ?></p>

                <strong>
                    $<?php echo e(number_format($servicio->precio, 2, ',', '.')); ?>

                </strong>

                <a href="<?php echo e(route('turnos.create')); ?>" class="boton">
                    Reservar
                </a>
            </article>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\spa\spa\resources\views/paginas/servicios.blade.php ENDPATH**/ ?>