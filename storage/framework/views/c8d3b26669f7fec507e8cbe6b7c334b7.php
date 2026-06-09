
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
            <h1 class="text-3xl font-bold text-white drop-shadow-lg">Preguntas del Examen: <?php echo e($examen->nombre_examen); ?></h1>
            <span class="text-lg font-semibold text-blue-200 bg-blue-900/60 px-4 py-1 rounded-lg ml-4">
                Total puntos: <?php echo e($totalPuntos); ?>

            </span>
            <a href="<?php echo e(route('preguntas.create', $examen)); ?>" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">
                <i data-feather="plus" class="mr-2 w-5 h-5"></i> Crear nueva pregunta
            </a>
        </div>
        
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
        <div class="space-y-4">
            <?php $__empty_1 = true; $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white shadow rounded-xl p-6 border-l-4 border-blue-500">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    <?php if($pregunta->tipo === 'opcion_multiple'): ?> bg-blue-100 text-blue-800
                                    <?php elseif($pregunta->tipo === 'verdadero_falso'): ?> bg-green-100 text-green-800
                                    <?php else: ?> bg-purple-100 text-purple-800
                                    <?php endif; ?>">
                                    <?php echo e(ucfirst(str_replace('_', ' ', $pregunta->tipo))); ?>

                                </span>
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
                        </div>
                        
                        <div class="flex items-center gap-2 ml-4">
                            <a href="<?php echo e(route('preguntas.edit', [$examen, $pregunta])); ?>" 
                               class="inline-flex items-center px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition text-sm">
                                <i data-feather="edit" class="w-4 h-4 mr-1"></i>
                                Editar
                            </a>
                            
                            <form action="<?php echo e(route('preguntas.destroy', [$examen, $pregunta])); ?>" method="POST" class="inline" 
                                  onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta pregunta?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="inline-flex items-center px-3 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm">
                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="bg-white shadow rounded-xl p-8 text-center">
                    <div class="text-gray-500 mb-4">
                        <i data-feather="help-circle" class="w-16 h-16 mx-auto text-gray-300"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No hay preguntas registradas</h3>
                    <p class="text-gray-500 mb-4">Comienza creando la primera pregunta para este examen.</p>
                    <a href="<?php echo e(route('preguntas.create', $examen)); ?>" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">
                        <i data-feather="plus" class="mr-2 w-5 h-5"></i> Crear primera pregunta
                    </a>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Botón Volver -->
        <div class="mt-8">
            <a href="<?php echo e(route('examenes.show', $examen)); ?>" class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-xl hover:bg-gray-700 transition">
                <i data-feather="arrow-left" class="mr-2 w-5 h-5"></i> Volver al examen
            </a>
        </div>
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
<?php endif; ?> <?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/dashboard/preguntas/index.blade.php ENDPATH**/ ?>