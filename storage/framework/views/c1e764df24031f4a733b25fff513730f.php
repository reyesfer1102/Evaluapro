
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
            <h1 class="text-3xl font-bold text-black drop-shadow-lg">Preguntas del Examen: <?php echo e($examen->nombre_examen); ?></h1>
            <span class="text-lg font-semibold text-blue-200 bg-blue-900/60 px-4 py-1 rounded-lg ml-4">
                Total puntos: <?php echo e($totalPuntos); ?>

            </span>
        </div>
        

        <!-- Lista de Preguntas -->
        <form action="/respuesta_examen/<?php echo e($examen->idExamen); ?>" method="POST">
        <?php echo csrf_field(); ?>
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

                                    <div class="ml-auto text-right">
                                        <h4 class="text-sm font-medium text-gray-700 mb-1">Valor:</h4>
                                        <p class="text-sm text-green-600 font-medium"><?php echo e($pregunta->puntos); ?></p>
                                    </div>
                                </div>

                                
                                <h3 class="text-lg font-semibold text-gray-900 mb-2"><?php echo e($pregunta->texto); ?></h3>
                                <?php if($pregunta->imagen): ?>
                                    <div class="mt-3">
                                        <img src="<?php echo e(asset('storage/' . $pregunta->imagen)); ?>" alt="Imagen de la pregunta" class="w-48 mt-2 rounded-md">
                                    </div>
                                <?php endif; ?>
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
                                <br>
                                <!-- Respuesta -->
                                <div id="respuesta-container">
                                    <?php if (isset($component)) { $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'respuesta_'.e($pregunta->idPregunta).'','value' => 'Respuesta']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'respuesta_'.e($pregunta->idPregunta).'','value' => 'Respuesta']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $attributes = $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $component = $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
                                    <?php if($pregunta->tipo === 'opcion_multiple'): ?>
                                        <?php $__currentLoopData = ['A','B','C','D']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label class="inline-flex items-center mr-4">
                                            <input type="radio"
                                                name="respuestas[<?php echo e($pregunta->idPregunta); ?>]"
                                                value="<?php echo e($opc); ?>"
                                                <?php echo e(old('respuestas.'.$pregunta->idPregunta) === $opc ? 'checked' : ''); ?>>
                                            <span class="ml-1"><?php echo e($opc); ?>) <?php echo e($opciones[$opc] ?? ''); ?></span>
                                        </label>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php elseif($pregunta->tipo === 'verdadero_falso'): ?>
                                        <?php $__currentLoopData = ['Verdadero','Falso']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label class="inline-flex items-center mr-4">
                                            <input type="radio"
                                                name="respuestas[<?php echo e($pregunta->idPregunta); ?>]"
                                                value="<?php echo e($opc); ?>"
                                                <?php echo e(old('respuestas.'.$pregunta->idPregunta) === $opc ? 'checked' : ''); ?>>
                                            <span class="ml-1"><?php echo e($opc); ?> <?php echo e($opciones[$opc] ?? ''); ?></span>
                                        </label>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'respuesta_'.e($pregunta->idPregunta).'','name' => 'respuestas['.e($pregunta->idPregunta).']','type' => 'text','class' => 'mt-1 block w-full','value' => ''.e(old('respuesta.$pregunta->idPregunta')).'','placeholder' => 'Escribe la respuesta correcta...','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'respuesta_'.e($pregunta->idPregunta).'','name' => 'respuestas['.e($pregunta->idPregunta).']','type' => 'text','class' => 'mt-1 block w-full','value' => ''.e(old('respuesta.$pregunta->idPregunta')).'','placeholder' => 'Escribe la respuesta correcta...','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $attributes = $__attributesOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__attributesOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
                                    <p class="mt-2 text-sm text-gray-600">
                                        <span id="respuesta-hint">Para opción múltiple, escribe la letra (A, B, C, D). Para verdadero/falso, escribe "Verdadero" o "Falso".</span>
                                    </p>
                                    <?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('respuestas<?php echo e($pregunta->idPregunta); ?>'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('respuestas{{ $pregunta->idPregunta }}')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="bg-white shadow rounded-xl p-8 text-center">
                        <div class="text-gray-500 mb-4">
                            <i data-feather="help-circle" class="w-16 h-16 mx-auto text-gray-300"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">No hay preguntas registradas</h3>
                    </div>
                <?php endif; ?>
            </div>
            <!-- Botón Enviar -->
            <div class="mt-8 text-right">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-gray-700 transition">
                    <i data-feather="arrow-right" class="mr-2 w-5 h-5"></i> Enviar
                </button>
            </div>
        </form>    
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
<?php endif; ?> <?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/generales/examen.blade.php ENDPATH**/ ?>