<nav class="bg-gradient-to-r from-blue-900 via-black to-blue-900 shadow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <div class="flex items-center space-x-8">
        <a href="<?php echo e(url('/dashboard')); ?>" class="flex items-center text-xl font-bold text-white">
          Dashboard
        </a>
        <?php if (isset($component)) { $__componentOriginal7997664dd13d4c7b16a13811685d2ce4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.a-navbar','data' => ['href' => ''.e(url('/gestion_examenes')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('a-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(url('/gestion_examenes')).'']); ?>Ver Examenes <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $attributes = $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $component = $__componentOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
        <?php if(auth()->user()->rol_usuario === 'admin'): ?>
        <?php if (isset($component)) { $__componentOriginal7997664dd13d4c7b16a13811685d2ce4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.a-navbar','data' => ['href' => ''.e(url('/gestion_usuarios')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('a-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(url('/gestion_usuarios')).'']); ?>Ver Usuarios <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $attributes = $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $component = $__componentOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal7997664dd13d4c7b16a13811685d2ce4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.a-navbar','data' => ['href' => ''.e(url('/gestion_temas')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('a-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(url('/gestion_temas')).'']); ?>Ver Temas <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $attributes = $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $component = $__componentOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
        <?php if(auth()->user()->rol_usuario === 'admin'): ?>
        <?php if (isset($component)) { $__componentOriginal7997664dd13d4c7b16a13811685d2ce4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.a-navbar','data' => ['href' => ''.e(url('/gestion_puestos')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('a-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(url('/gestion_puestos')).'']); ?>Ver Puestos <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $attributes = $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $component = $__componentOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal7997664dd13d4c7b16a13811685d2ce4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.a-navbar','data' => ['href' => ''.e(url('/gestion_reticula')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('a-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(url('/gestion_reticula')).'']); ?>Ver Reticulas <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $attributes = $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $component = $__componentOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal7997664dd13d4c7b16a13811685d2ce4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.a-navbar','data' => ['href' => ''.e(url('/revisar_examenes')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('a-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(url('/revisar_examenes')).'']); ?>Revisar Examenes <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $attributes = $__attributesOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__attributesOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4)): ?>
<?php $component = $__componentOriginal7997664dd13d4c7b16a13811685d2ce4; ?>
<?php unset($__componentOriginal7997664dd13d4c7b16a13811685d2ce4); ?>
<?php endif; ?>
      </div>
      <div class="flex items-center">
        <?php if (isset($component)) { $__componentOriginal01b5eafd245309b6b7c07f6d1ba8372c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01b5eafd245309b6b7c07f6d1ba8372c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.welcome-button','data' => ['variant' => 'minimalist']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('welcome-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'minimalist']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logout-button','data' => ['variant' => 'minimalist']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('logout-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'minimalist']); ?>
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
    </div>
  </div>
</nav><?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/components/navbar-dashboard.blade.php ENDPATH**/ ?>