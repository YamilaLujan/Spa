

<?php $__env->startSection('titulo', 'Turnos'); ?>

<?php $__env->startSection('contenido'); ?>

<section class="seccion">

    <p class="subtitulo">GESTIÓN DE RESERVAS</p>

    <h1>Turnos registrados</h1>

    <a href="<?php echo e(route('turnos.create')); ?>" class="boton">
        Nuevo turno
    </a>

    <?php if(session('success')): ?>
        <div class="alerta exito">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="tabla-contenedor">

        <table>
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Email</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Personas</th>
                    <th>Servicios</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $turnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr>
                        <td><?php echo e($turno->nombre_cliente); ?></td>
                        <td><?php echo e($turno->email); ?></td>
                        <td><?php echo e($turno->fecha->format('d/m/Y')); ?></td>
                        <td><?php echo e(substr($turno->hora, 0, 5)); ?></td>
                        <td><?php echo e($turno->cantidad_personas); ?></td>

                        <td>
                            <?php $__currentLoopData = $turno->servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="etiqueta">
                                    <?php echo e($servicio->nombre); ?>

                                </span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>

                        <td>
                            <form action="<?php echo e(route('turnos.destroy', $turno)); ?>"
                                  method="POST"
                                  onsubmit="return confirm('¿Querés cancelar este turno?')">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button type="submit" class="boton-eliminar">
                                    Cancelar
                                </button>

                            </form>
                        </td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>
                        <td colspan="7">No hay turnos registrados.</td>
                    </tr>

                <?php endif; ?>

            </tbody>
        </table>

    </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\spa\spa\resources\views/turnos/index.blade.php ENDPATH**/ ?>