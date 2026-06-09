
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
  <!-- DASHBOARD ADMINISTRADOR -->
  <div class="flex items-start justify-center min-h-screen pt-32">
      <div class="w-full max-w-7xl mx-auto p-6 text-white ">
    <header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
      <div>
        <h1 class="text-2xl font-bold">Gestion de Puestos, Departamentos y Direcciones</h1>
    </header>

    <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      <!-- Card 1 - Gestión de Exámenes (Admin & Capacitador) -->
      <?php if (isset($component)) { $__componentOriginalbb45f589685055c28f5fc69e4ef2650b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-dashboard','data' => ['color' => 'blue','icon' => 'briefcase','title' => 'Puestos','description' => 'Crear, editar y revisar puestos para los empleados.','link' => ''.e(route('puestos.index')).'','linkLabel' => 'Ver Puestos →']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'blue','icon' => 'briefcase','title' => 'Puestos','description' => 'Crear, editar y revisar puestos para los empleados.','link' => ''.e(route('puestos.index')).'','linkLabel' => 'Ver Puestos →']); ?>
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

      <!-- Card 5 - Reportes y Estadísticas (Admin & Capacitador) -->
      <?php if (isset($component)) { $__componentOriginalbb45f589685055c28f5fc69e4ef2650b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-dashboard','data' => ['color' => 'purple','icon' => 'octagon','title' => 'Departamentos','description' => 'Crear, editar y revisar departamentos para los empleados.','link' => ''.e(route('departamentos.index')).'','linkLabel' => 'Ver departamentos →']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'purple','icon' => 'octagon','title' => 'Departamentos','description' => 'Crear, editar y revisar departamentos para los empleados.','link' => ''.e(route('departamentos.index')).'','linkLabel' => 'Ver departamentos →']); ?>
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
        <!-- Card 5 - Reportes y Estadísticas (Admin & Capacitador) -->
        <?php if (isset($component)) { $__componentOriginalbb45f589685055c28f5fc69e4ef2650b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb45f589685055c28f5fc69e4ef2650b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-dashboard','data' => ['color' => 'red','icon' => 'trello','title' => 'Direcciones','description' => 'Crear, editar y revisar direcciones para los empleados.','link' => ''.e(route('direcciones.index')).'','linkLabel' => 'Ver direcciones →']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'red','icon' => 'trello','title' => 'Direcciones','description' => 'Crear, editar y revisar direcciones para los empleados.','link' => ''.e(route('direcciones.index')).'','linkLabel' => 'Ver direcciones →']); ?>
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
<?php endif; ?><?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/admin/dashboard-puestos.blade.php ENDPATH**/ ?>