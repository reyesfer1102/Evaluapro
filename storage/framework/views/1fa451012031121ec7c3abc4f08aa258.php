<aside class="w-64 bg-white shadow-xl p-6 flex flex-col justify-between">
  <div>
    <a href="/welcome" class="text-2xl font-bold text-cyan-600 mb-8 block">📘 EvaluaPro</a>
    <nav class="space-y-4">
      <?php if(auth()->user()->rol_usuario !== 'usuario'): ?>
      <a href="/dashboard" class="flex items-center text-gray-700 hover:text-cyan-600 transition">
        <i data-feather="home" class="mr-2"></i> Dashboard
      </a>
      <?php endif; ?>
      <a href="/reticula_usuario" class="flex items-center text-gray-700 hover:text-cyan-600 transition">
        <i data-feather="trello" class="mr-2"></i> Reticula
      </a>
      <a href="/resultados_usuario" class="flex items-center text-gray-700 hover:text-cyan-600 transition">
        <i data-feather="bar-chart-2" class="mr-2"></i> Resultados
      </a>
    </nav>
    <br>
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
  <div class="text-sm text-gray-400">&copy; <?php echo e(date('Y')); ?> EvaluaPro</div>
</aside>
<?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/components/lateral-menu.blade.php ENDPATH**/ ?>