
<?php if (isset($component)) { $__componentOriginalb81c38d6e1cfbda3172a0a8fc69c5cc4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb81c38d6e1cfbda3172a0a8fc69c5cc4 = $attributes; } ?>
<?php $component = App\View\Components\GradientLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('gradient-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GradientLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <!-- DASHBOARD ADMINISTRADOR -->
  <div class="w-full max-w-7xl mx-auto p-6 text-white">
    <header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
      <div>
        <h1 class="text-2xl font-bold">Bienvenido, <?php echo e(auth()->user()->usuario); ?></h1>
        <p class="text-blue-200">
          <?php if(auth()->user()->rol_usuario === 'admin'): ?>
            Panel de control - Administrador
          <?php else: ?>
            Panel de control - Capacitador
          <?php endif; ?>
        </p>
      </div>
      <div class="flex items-center gap-2">
        <?php if (isset($component)) { $__componentOriginal01b5eafd245309b6b7c07f6d1ba8372c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01b5eafd245309b6b7c07f6d1ba8372c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.welcome-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('welcome-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01b5eafd245309b6b7c07f6d1ba8372c)): ?>
<?php $attributes = $__attributesOriginal01b5eafd245309b6b7c07f6d1ba8372c; ?>
<?php unset($__attributesOriginal01b5eafd245309b6b7c07f6d1ba8372c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01b5eafd245309b6b7c07f6d1ba8372c)): ?>
<?php $component = $__componentOriginal01b5eafd245309b6b7c07f6d1ba8372c; ?>
<?php unset($__componentOriginal01b5eafd245309b6b7c07f6d1ba8372c); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal42cc716c1f3fcb07102c9ea618c90620 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42cc716c1f3fcb07102c9ea618c90620 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logout-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('logout-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42cc716c1f3fcb07102c9ea618c90620)): ?>
<?php $attributes = $__attributesOriginal42cc716c1f3fcb07102c9ea618c90620; ?>
<?php unset($__attributesOriginal42cc716c1f3fcb07102c9ea618c90620); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42cc716c1f3fcb07102c9ea618c90620)): ?>
<?php $component = $__componentOriginal42cc716c1f3fcb07102c9ea618c90620; ?>
<?php unset($__componentOriginal42cc716c1f3fcb07102c9ea618c90620); ?>
<?php endif; ?>
      </div>
    </header>

    <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      <!-- Card 1 - Gestión de Exámenes (Admin & Capacitador) -->
      <?php if (isset($component)) { $__componentOriginalbb45f589685055c28f5fc69e4ef2650b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-dashboard','data' => ['color' => 'blue','icon' => 'file-text','title' => 'Gestión de Exámenes','description' => 'Crear, editar y revisar exámenes para los empleados.','link' => '/gestion_examenes','linkLabel' => 'Ver exámenes →']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'blue','icon' => 'file-text','title' => 'Gestión de Exámenes','description' => 'Crear, editar y revisar exámenes para los empleados.','link' => '/gestion_examenes','linkLabel' => 'Ver exámenes →']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $attributes = $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $component = $__componentOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>

      <!-- Card 2 - Gestión de Usuarios (Admin only) -->
      <?php if(auth()->user()->rol_usuario === 'admin'): ?>
      <?php if (isset($component)) { $__componentOriginalbb45f589685055c28f5fc69e4ef2650b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-dashboard','data' => ['color' => 'green','icon' => 'users','title' => 'Gestión de Usuarios','description' => 'Administrar empleados registrados y sus permisos.','link' => '/gestion_usuarios','linkLabel' => 'Ver usuarios →']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'green','icon' => 'users','title' => 'Gestión de Usuarios','description' => 'Administrar empleados registrados y sus permisos.','link' => '/gestion_usuarios','linkLabel' => 'Ver usuarios →']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $attributes = $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $component = $__componentOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>
      <?php endif; ?>

      <!-- Card 3 - Gestión de Temas (Admin & Capacitador) -->
      <?php if (isset($component)) { $__componentOriginalbb45f589685055c28f5fc69e4ef2650b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-dashboard','data' => ['color' => 'red','icon' => 'book','title' => 'Gestión de Temas','description' => 'Crear, editar y revisar Temas/Cursos','link' => '/gestion_temas','linkLabel' => 'Ver Temas →']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'red','icon' => 'book','title' => 'Gestión de Temas','description' => 'Crear, editar y revisar Temas/Cursos','link' => '/gestion_temas','linkLabel' => 'Ver Temas →']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $attributes = $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $component = $__componentOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>
      
      <!-- Card 4 - Gestión de Puestos (Admin only) -->
      <?php if(auth()->user()->rol_usuario === 'admin'): ?>
      <?php if (isset($component)) { $__componentOriginalbb45f589685055c28f5fc69e4ef2650b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-dashboard','data' => ['color' => 'yellow','icon' => 'briefcase','title' => 'Gestión de Puestos','description' => 'Crear, editar, revisar y asignar Puestos, Departamentos y Direcciones','link' => '/gestion_puestos','linkLabel' => 'Ver Puestos →']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'yellow','icon' => 'briefcase','title' => 'Gestión de Puestos','description' => 'Crear, editar, revisar y asignar Puestos, Departamentos y Direcciones','link' => '/gestion_puestos','linkLabel' => 'Ver Puestos →']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $attributes = $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $component = $__componentOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>
      <?php endif; ?>

      <!-- Card 5 - Reportes y Estadísticas (Admin & Capacitador) -->
      <?php if (isset($component)) { $__componentOriginalbb45f589685055c28f5fc69e4ef2650b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-dashboard','data' => ['color' => 'purple','icon' => 'bar-chart-2','title' => 'Reticulas','description' => 'Generar reticulas por puesto y departamento.','link' => '/gestion_reticula','linkLabel' => 'Ver reticulas →']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'purple','icon' => 'bar-chart-2','title' => 'Reticulas','description' => 'Generar reticulas por puesto y departamento.','link' => '/gestion_reticula','linkLabel' => 'Ver reticulas →']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $attributes = $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $component = $__componentOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>

      <?php if (isset($component)) { $__componentOriginalbb45f589685055c28f5fc69e4ef2650b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-dashboard','data' => ['color' => 'blue','icon' => 'file-text','title' => 'Revision de Exámenes','description' => 'Revisar exámenes para los empleados.','link' => '/revisar_examenes','linkLabel' => 'Revisar exámenes →']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'blue','icon' => 'file-text','title' => 'Revision de Exámenes','description' => 'Revisar exámenes para los empleados.','link' => '/revisar_examenes','linkLabel' => 'Revisar exámenes →']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $attributes = $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__attributesOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b)): ?>
<?php $component = $__componentOriginalbb45f589685055c28f5fc69e4ef2650b; ?>
<?php unset($__componentOriginalbb45f589685055c28f5fc69e4ef2650b); ?>
<?php endif; ?>
    </div>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb81c38d6e1cfbda3172a0a8fc69c5cc4)): ?>
<?php $attributes = $__attributesOriginalb81c38d6e1cfbda3172a0a8fc69c5cc4; ?>
<?php unset($__attributesOriginalb81c38d6e1cfbda3172a0a8fc69c5cc4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb81c38d6e1cfbda3172a0a8fc69c5cc4)): ?>
<?php $component = $__componentOriginalb81c38d6e1cfbda3172a0a8fc69c5cc4; ?>
<?php unset($__componentOriginalb81c38d6e1cfbda3172a0a8fc69c5cc4); ?>
<?php endif; ?><?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/dashboard.blade.php ENDPATH**/ ?>