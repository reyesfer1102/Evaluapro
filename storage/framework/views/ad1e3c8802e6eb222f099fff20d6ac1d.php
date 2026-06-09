<?php if (isset($component)) { $__componentOriginal0de143e5b61900e6d7b990ac144ae3fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb = $attributes; } ?>
<?php $component = App\View\Components\DashboardLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DashboardLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-black drop-shadow-lg">Preguntas del Examen: <?php echo e($examen->nombre_examen); ?></h1>
            <span class="text-lg font-semibold text-yellow-200 bg-blue-900/60 px-4 py-1 rounded-lg ml-4">
                Total puntos: <?php echo e($totalPuntos); ?>

            </span>
            <!-- Botón Volver -->
            <div class="mt-8">
                <a href="<?php echo e(route('revisar_usuario_examen', ['usuario' => $usuario])); ?>" 
                class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-xl hover:bg-gray-700 transition">
                    <i data-feather="arrow-left" class="mr-2 w-5 h-5"></i> Volver al examen
                </a>
            </div>
        </div>
        <?php if($examenRealizado && !$examenRealizado->calificacion): ?>
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-6 rounded">
                <p><strong>Este examen aún está pendiente de calificación.</strong></p>
                <p>Algunas respuestas abiertas no han sido evaluadas todavía.</p>
            </div>
        <?php else: ?>
            <span class="text-lg font-semibold text-black-200 bg-blue-900/60 px-4 py-1 rounded-lg ml-4">
                Calificacion del usuario: <?php echo e($examenRealizado->calificacion); ?>

            </span>
        <?php endif; ?>

        <?php if (isset($component)) { $__componentOriginala5e77f3594f8b6318da2dcd4db70cfc8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5e77f3594f8b6318da2dcd4db70cfc8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.success-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('success-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5e77f3594f8b6318da2dcd4db70cfc8)): ?>
<?php $attributes = $__attributesOriginala5e77f3594f8b6318da2dcd4db70cfc8; ?>
<?php unset($__attributesOriginala5e77f3594f8b6318da2dcd4db70cfc8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5e77f3594f8b6318da2dcd4db70cfc8)): ?>
<?php $component = $__componentOriginala5e77f3594f8b6318da2dcd4db70cfc8; ?>
<?php unset($__componentOriginala5e77f3594f8b6318da2dcd4db70cfc8); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal292f56c7d55035d9ce06be27ba7a6275 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal292f56c7d55035d9ce06be27ba7a6275 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.error-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal292f56c7d55035d9ce06be27ba7a6275)): ?>
<?php $attributes = $__attributesOriginal292f56c7d55035d9ce06be27ba7a6275; ?>
<?php unset($__attributesOriginal292f56c7d55035d9ce06be27ba7a6275); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal292f56c7d55035d9ce06be27ba7a6275)): ?>
<?php $component = $__componentOriginal292f56c7d55035d9ce06be27ba7a6275; ?>
<?php unset($__componentOriginal292f56c7d55035d9ce06be27ba7a6275); ?>
<?php endif; ?>

        <!-- Lista de Preguntas -->
        <form action="<?php echo e(route('examen_realizado.update', ['usuario' => $usuario, 'examen' =>$examenRealizado->examen_id])); ?>" method="POST">        
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
              
        <div class="space-y-4">
                <?php $__empty_1 = true; $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white shadow rounded-xl p-6 border-l-4 border-blue-500">
                    <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-3">
                                <?php
                                    $colorClass = 'bg-purple-100 text-purple-800';
                                    if ($pregunta->tipo === 'opcion_multiple') {
                                        $colorClass = 'bg-blue-100 text-blue-800';
                                    } elseif ($pregunta->tipo === 'verdadero_falso') {
                                        $colorClass = 'bg-green-100 text-green-800';
                                    }
                                ?>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium <?php echo e($colorClass); ?>">
                                    <span class="text-sm text-gray-500">Pregunta #<?php echo e($loop->iteration); ?></span>
                                </div>
                                
                                <h3 class="text-lg font-semibold text-gray-900 mb-2"><?php echo e($pregunta->texto); ?></h3>
                                
                                <?php
                                    $opciones = json_decode($pregunta->opciones, true);
                                ?>

                                <?php if(is_array($opciones)): ?>
                                    <ul class="list-disc pl-5 space-y-1 text-sm text-gray-700">
                                        <?php $__currentLoopData = $opciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clave => $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><strong><?php echo e($clave); ?>)</strong> <?php echo e($valor); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php else: ?>
                                    <div class="text-sm text-gray-600">
                                        <?php echo nl2br(e($pregunta->opciones)); ?>

                                    </div>
                                <?php endif; ?>
                                
                                <?php if($pregunta->tipo !== 'abierta'): ?>
                                <div class="mt-3">
                                    <h4 class="text-sm font-medium text-gray-700 mb-1">Respuesta correcta:</h4>
                                    <p class="text-sm text-green-600 font-medium"><?php echo e($pregunta->respuesta_correcta); ?></p>
                                </div>
                                <?php endif; ?>

                                <?php if($pregunta->imagen): ?>
                                    <div class="mt-3">
                                        <img src="<?php echo e(asset('storage/' . $pregunta->imagen)); ?>" alt="Imagen de la pregunta" class="w-48 mt-2 rounded-md">
                                    </div>
                                <?php endif; ?>

                                <div class="mt-3">
                                    <h4 class="text-sm font-medium text-gray-700 mb-1">Valor:</h4>
                                    <p class="text-sm text-green-600 font-medium"><?php echo e($pregunta->puntos); ?></p>
                                </div>

                                <?php
                                    $respuesta = $respuestasUsuario->firstWhere('pregunta_id', $pregunta->idPregunta);
                                    $esAbierta = $pregunta->tipo === 'abierta';
                                    $noCalificada = is_null($examenRealizado->calificacion) && is_null($examenRealizado->usuarioCalificador);                                
                                ?>

                                <div class="mt-3">
                                    <h4 class="text-sm font-medium text-gray-700 mb-1">Respuesta Usuario:</h4>
                                    <p class="text-sm text-black-600 font-medium">
                                        <?php echo e($respuesta->respuesta ?? 'Sin respuesta'); ?>

                                    </p>

                                    <?php if($respuesta): ?>
                                        <?php if(!is_null($respuesta->correcta)): ?>
                                            <?php if($respuesta->correcta == 1): ?>
                                                <p class="text-sm text-green-600 font-medium">Correcta</p>
                                            <?php elseif($noCalificada): ?>
                                                <p class="text-sm text-yellow-600 font-medium">Aún no calificada</p>
                                            <?php else: ?>
                                                <p class="text-sm text-red-600 font-medium">Incorrecta</p>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <p class="text-sm text-yellow-600 font-medium">Aún no calificada</p>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <p class="text-sm text-gray-600 font-medium">Sin respuesta</p>
                                    <?php endif; ?>

                                    <?php if($esAbierta && $noCalificada && $respuesta): ?>
                                        <div class="mt-2">
                                            <label for="calificacion_<?php echo e($pregunta->idPregunta); ?>" class="block text-sm font-medium text-gray-700">Califica (0 a <?php echo e($pregunta->puntos); ?>):</label>
                                            <input type="number" name="calificaciones[<?php echo e($respuesta->id); ?>]" id="calificacion_<?php echo e($pregunta->idPregunta); ?>"
                                                class="mt-1 block w-24 px-2 py-1 border border-gray-300 rounded-md shadow-sm focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm"
                                                min="0" max="<?php echo e($pregunta->puntos); ?>" step="0.5" required>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="text-gray-500 text-center py-8">
                        No hay preguntas para este examen.
                    </div>
                    <?php endif; ?>
                    <div class="mt-6">
                        <?php if (isset($component)) { $__componentOriginald411d1792bd6cc877d687758b753742c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald411d1792bd6cc877d687758b753742c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => ['icon' => 'save']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'save']); ?>
                            Guardar Calificacion
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $attributes = $__attributesOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__attributesOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $component = $__componentOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__componentOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
                    </div>
                </div>
            </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb)): ?>
<?php $attributes = $__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb; ?>
<?php unset($__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0de143e5b61900e6d7b990ac144ae3fb)): ?>
<?php $component = $__componentOriginal0de143e5b61900e6d7b990ac144ae3fb; ?>
<?php unset($__componentOriginal0de143e5b61900e6d7b990ac144ae3fb); ?>
<?php endif; ?> <?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/dashboard/revisar/infoExamen.blade.php ENDPATH**/ ?>