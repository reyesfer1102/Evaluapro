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
      <!-- Contenido principal -->
      <main class="flex-1 p-10">
        <header class="flex justify-between items-center mb-10">
          <h2 class="text-3xl font-bold text-gray-800">
            Bienvenido, <?php echo e($usuario->usuario); ?>

          </h2>
        </header>

        <!-- Próximo Examen -->
        <section class="mb-8">
          <div
            class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-cyan-500"
          >
            <h3 class="text-xl font-semibold text-gray-800 mb-1">
              📅 Próximo examen
            </h3>
            <?php if($primerExamen): ?>
            <p class="text-gray-700">
              Título: <strong><?php echo e($primerExamen->nombre_examen); ?></strong>
            </p>
            <?php else: ?>
            <p class="text-gray-700">
              No tienes exámenes pendientes.
            </p>
            <?php endif; ?>
          </div>
        </section>

        <!-- Estadísticas -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div
          class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-green-500"
          >
          <h4 class="text-lg font-semibold text-green-700 mb-2">
            📁 Historial de exámenes
          </h4>
          <?php $__currentLoopData = $examenesRealizados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $examenRealizado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="list-disc list-inside text-gray-700">
             <li>
                <?php echo e($examenRealizado->examen->nombre_examen); ?> 
                <?php if($examenRealizado->calificacion): ?>
                    - Calificación: <?php echo e($examenRealizado->calificacion); ?>

                <?php endif; ?>
              </li>
            </ul>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>

        <!-- Perfil de Puestos -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
        <div
            class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-purple-500"
          >
            <h4 class="text-lg font-semibold text-purple-700 mb-2">
              🧩 Perfil de puesto actual
            </h4>
            <p class="text-gray-700">
              Nombre del puesto: <strong><?php echo e($infoPuesto->nombre_puesto); ?> </strong>
            </p>
            <p class="text-gray-600 mt-2">
              Descripción de puesto: <?php echo e($infoPuesto->descripcion_puesto ? $infoPuesto->descripcion_puesto : 'No hay descripcion de puesto'); ?> 
            </p>
            <p class="text-gray-600 mt-2">
              Descripcion de departamento: <?php echo e($infoPuesto->departamento->descripcion_departamento ? $infoPuesto->descripcion_puesto : 'No hay descripcion de departamento'); ?>

            </p>
            <p class="text-gray-500 mt-2">Departamento:<?php echo e($infoPuesto->departamento->nombre_departamento); ?></p>
          </div>
        </section>
      </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal22420923a32db135c994bb2339cfe9f5)): ?>
<?php $attributes = $__attributesOriginal22420923a32db135c994bb2339cfe9f5; ?>
<?php unset($__attributesOriginal22420923a32db135c994bb2339cfe9f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22420923a32db135c994bb2339cfe9f5)): ?>
<?php $component = $__componentOriginal22420923a32db135c994bb2339cfe9f5; ?>
<?php unset($__componentOriginal22420923a32db135c994bb2339cfe9f5); ?>
<?php endif; ?><?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/welcome.blade.php ENDPATH**/ ?>