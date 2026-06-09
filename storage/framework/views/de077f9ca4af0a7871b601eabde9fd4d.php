
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
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-white drop-shadow-lg">Detalles del Tema</h1>
            <div class="flex items-center gap-3">
                <?php if(request()->query('reticula')): ?>
                <a href="<?php echo e(route('subReticulas.index', ['reticula' => request()->query('reticula')])); ?>"
                    class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-xl hover:bg-gray-700 transition">
                    <i data-feather="arrow-left" class="mr-2 w-5 h-5"></i> Volver a la Reticula
                </a>
                <?php endif; ?>

                <a href="<?php echo e(route('temas.edit', $tema->idTema)); ?>" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">
                    <i data-feather="edit" class="mr-2 w-5 h-5"></i> Editar
                </a>
                <a href="<?php echo e(route('temas.index')); ?>" class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-xl hover:bg-gray-700 transition">
                    <i data-feather="arrow-left" class="mr-2 w-5 h-5"></i> Volver
                </a>
            </div>
        </div>

        <div class="bg-white shadow rounded-xl p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Información Principal -->
                <div class="md:col-span-2">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4"><?php echo e($tema->nombre_tema); ?></h2>
                </div>

                <!-- Tema URL -->
                <div class="md:col-span-2">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Tema URL</h3>
                    <p class="text-gray-600"><?php echo e($tema->tema_url ? $tema->tema_url : 'Sin URL asignado'); ?></p>
                </div>

                <!-- Curso -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Curso</h3>
                    <p class="text-gray-600"><?php echo e($tema->curso->nombre_curso ? $tema->curso->nombre_curso : 'Sin Curso Asignado'); ?></p>
                </div>

                <!-- Puesto -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Puesto</h3>
                    <p class="text-gray-600 whitespace-pre-wrap"><?php echo e($tema->puesto->nombre_puesto); ?></p>
                </div>

                <!-- Departamento -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Departamento</h3>
                    <p class="text-gray-600 whitespace-pre-wrap"><?php echo e($tema->departamento->nombre_departamento); ?></p>
                </div>

                <!-- Información Adicional -->
                <div class="md:col-span-2">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Información Adicional</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-medium text-gray-700">ID del Tema</h4>
                            <p class="text-gray-600"><?php echo e($tema->idTema); ?></p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-medium text-gray-700">Descripcion</h4>
                            <p class="text-gray-600"><?php echo e($tema->descripcion_tema ?? 'No asignado'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Acciones -->
            <div class="flex items-center justify-end mt-8 gap-4 pt-6 border-t border-gray-200">
                <form action="<?php echo e(route('temas.destroy', $tema->idTema)); ?>" method="POST" class="inline" 
                    onsubmit="return confirm('¿Estás seguro de que quieres eliminar este tema?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-xl hover:bg-red-700 transition">
                        <i data-feather="trash-2" class="mr-2 w-5 h-5"></i> Eliminar Tema
                    </button>
                </form>
            </div>
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
<?php endif; ?> <?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/dashboard/temas/show.blade.php ENDPATH**/ ?>