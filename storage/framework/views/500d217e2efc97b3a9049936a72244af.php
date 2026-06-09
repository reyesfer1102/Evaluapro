
<?php if (isset($component)) { $__componentOriginal22420923a32db135c994bb2339cfe9f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22420923a32db135c994bb2339cfe9f5 = $attributes; } ?>
<?php $component = App\View\Components\WelcomeLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('welcome-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\WelcomeLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
        <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-black drop-shadow-lg">
            Temas de la Reticula:
            <?php echo e($reticula?->nombre_reticula ?? 'No hay Reticula disponible'); ?>

        </h1>           
        <!-- Puesto -->
        <?php if($reticula): ?>
            <div>
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Puesto</h3>
                <p class="text-gray-600"><?php echo e($reticula->puesto->nombrePuesto ?? 'Sin puesto asignado'); ?></p>
            </div>

            <br>
            
            <!-- Departamento -->
            <div>
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Departamento</h3>
                <p class="text-gray-600"><?php echo e($reticula->departamento->nombreDepartamento ?? 'Sin departamento asignado'); ?></p>
            </div>
        <?php endif; ?>
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
                        <?php if($item->tipo === 'examen'): ?>
                            <?php if(!in_array($item->id, $examenesRealizados)): ?>
                                <div>
                                    <a href="<?php echo e($item->link); ?>" class="inline-flex items-center text-sm text-blue-600 hover:underline">
                                        Contestar Examen →
                                    </a>
                                </div>
                            <?php else: ?>
                                <div class="text-sm text-gray-500 italic">
                                    Examen ya contestado
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                        <div>
                            <a href="<?php echo e($item->link); ?>" class="inline-flex items-center text-sm text-blue-600 hover:underline">
                                URL →
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="bg-white shadow rounded-xl p-8 text-center">
                    <div class="text-gray-500 mb-4">
                        <i data-feather="help-circle" class="w-16 h-16 mx-auto text-gray-300"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No hay Reticula para este Puesto y/o Departamento</h3>
            <?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal22420923a32db135c994bb2339cfe9f5)): ?>
<?php $attributes = $__attributesOriginal22420923a32db135c994bb2339cfe9f5; ?>
<?php unset($__attributesOriginal22420923a32db135c994bb2339cfe9f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22420923a32db135c994bb2339cfe9f5)): ?>
<?php $component = $__componentOriginal22420923a32db135c994bb2339cfe9f5; ?>
<?php unset($__componentOriginal22420923a32db135c994bb2339cfe9f5); ?>
<?php endif; ?><?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/generales/reticulas.blade.php ENDPATH**/ ?>