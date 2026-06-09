
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
            <h1 class="text-3xl font-bold text-white drop-shadow-lg">Temas de la Reticula: <?php echo e($reticula->nombre_reticula); ?></h1>

            <a href="<?php echo e(route('subReticulas.create', $reticula)); ?>" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">
                <i data-feather="plus" class="mr-2 w-5 h-5"></i> Añadir nuevo tema
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

        <?php
            $badge = [
                'tema'   => 'bg-purple-100 text-purple-800',
                'examen' => 'bg-blue-100 text-blue-800',
                'curso'  => 'bg-green-100 text-green-800',
            ];
        ?>

        <div class="space-y-4">
            <?php $__empty_1 = true; $__currentLoopData = $subReticulas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white shadow rounded-xl p-6 border-l-4 border-blue-500">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium <?php echo e($badge[$item->tipo] ?? 'bg-gray-100 text-gray-800'); ?>">
                                    <?php echo e(ucfirst($item->tipo)); ?>

                                </span>
                                <span class="text-sm text-gray-500">Orden #<?php echo e($loop->iteration); ?></span>
                            </div>

                            <h3 class="text-lg font-semibold text-gray-900 mb-2"><?php echo e($item->titulo); ?></h3>
                            <?php if(!empty($item->detalle)): ?>
                                <p class="text-sm text-gray-600 mb-2"><?php echo e($item->detalle); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="flex items-center gap-2 ml-4">
                            <?php if(isset($item->edit_link)): ?>
                                <a href="<?php echo e($item->edit_link); ?>"
                                class="inline-flex items-center px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition text-sm">
                                    <i data-feather="edit" class="w-4 h-4 mr-1"></i> Editar
                                </a>
                            <?php endif; ?>

                            <a href="<?php echo e($item->link); ?>" class="inline-flex items-center text-sm text-blue-600 hover:underline">
                                Ver detalle →
                            </a>

                            <?php if(isset($item->delete_link)): ?>
                                <form action="<?php echo e($item->delete_link); ?>" method="POST" class="inline"
                                    onsubmit="return confirm('¿Estás seguro de que quieres eliminar este elemento?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="inline-flex items-center px-3 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm">
                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Eliminar
                                    </button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="bg-white shadow rounded-xl p-8 text-center">
                    <div class="text-gray-500 mb-4">
                        <i data-feather="help-circle" class="w-16 h-16 mx-auto text-gray-300"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No hay elementos registrados</h3>
                    <p class="text-gray-500 mb-4">Comienza añadiendo el primer elemento para esta retícula.</p>
                    <a href="<?php echo e(route('subReticulas.create', $reticula)); ?>" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">
                        <i data-feather="plus" class="mr-2 w-5 h-5"></i> Añadir primero
                    </a>
                </div>
            <?php endif; ?>
        </div>

        
        <!-- Botón Volver -->
        <div class="mt-8">
            <a href="<?php echo e(route('reticulas.show', $reticula)); ?>" class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-xl hover:bg-gray-700 transition">
                <i data-feather="arrow-left" class="mr-2 w-5 h-5"></i> Volver al reticula
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
<?php endif; ?> <?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/dashboard/subReticulas/index.blade.php ENDPATH**/ ?>