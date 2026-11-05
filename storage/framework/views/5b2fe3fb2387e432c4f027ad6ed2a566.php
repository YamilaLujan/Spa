

<?php $__env->startSection('titulo', 'Reservar turno'); ?>

<?php $__env->startSection('contenido'); ?>

<section class="seccion formulario-contenedor">

    <p class="subtitulo">TU MOMENTO DE BIENESTAR</p>

    <h1>Reservá tu turno</h1>

    <p>Completá tus datos y elegí los servicios que querés disfrutar.</p>

    <?php if($errors->any()): ?>
        <div class="alerta error">
            Revisá los datos ingresados. Hay errores en el formulario.
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('turnos.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <label>Nombre completo</label>
        <input type="text" name="nombre_cliente"
               value="<?php echo e(old('nombre_cliente')); ?>">

        <?php $__errorArgs = ['nombre_cliente'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label>Email</label>
        <input type="email" name="email"
               value="<?php echo e(old('email')); ?>">

        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label>Teléfono</label>
        <input type="text" name="telefono"
               value="<?php echo e(old('telefono')); ?>">

        <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label>Fecha</label>
        <input type="date" name="fecha"
               min="<?php echo e(date('Y-m-d')); ?>"
               value="<?php echo e(old('fecha')); ?>">

        <?php $__errorArgs = ['fecha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label>Hora</label>
        <input type="time" name="hora"
               value="<?php echo e(old('hora')); ?>">

        <?php $__errorArgs = ['hora'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label>Cantidad de personas</label>
        <input type="number" name="cantidad_personas"
               min="1" max="10"
               value="<?php echo e(old('cantidad_personas', 1)); ?>">

        <?php $__errorArgs = ['cantidad_personas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label>Elegí tus servicios</label>

        <div class="servicios-opciones">

            <?php $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <label class="opcion">
                    <input
                        type="checkbox"
                        name="servicios[]"
                        value="<?php echo e($servicio->id); ?>"
                        <?php echo e(in_array($servicio->id, old('servicios', [])) ? 'checked' : ''); ?>

                    >

                    <?php echo e($servicio->nombre); ?> -
                    $<?php echo e(number_format($servicio->precio, 2, ',', '.')); ?>

                </label>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <?php $__errorArgs = ['servicios'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label>Observaciones</label>

        <textarea name="observaciones"><?php echo e(old('observaciones')); ?></textarea>

        <?php $__errorArgs = ['observaciones'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button type="submit" class="boton">
            Confirmar reserva
        </button>

    </form>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\spa\spa\resources\views/turnos/create.blade.php ENDPATH**/ ?>