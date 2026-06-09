<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name', 'EvaluaPro')); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
    .gradient-bg {
      background: linear-gradient(135deg, #1e3a8a 0%, #000000 50%, #1e40af 100%);
    }
  </style>
</head>
<body class="gradient-bg from-blue-50 to-cyan-100 min-h-screen font-sans">
    <?php if (isset($component)) { $__componentOriginalda50506b030c31e8789486928b425ab5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda50506b030c31e8789486928b425ab5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-dashboard','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda50506b030c31e8789486928b425ab5)): ?>
<?php $attributes = $__attributesOriginalda50506b030c31e8789486928b425ab5; ?>
<?php unset($__attributesOriginalda50506b030c31e8789486928b425ab5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda50506b030c31e8789486928b425ab5)): ?>
<?php $component = $__componentOriginalda50506b030c31e8789486928b425ab5; ?>
<?php unset($__componentOriginalda50506b030c31e8789486928b425ab5); ?>
<?php endif; ?>
    <?php echo e($slot); ?>


    <script>
      feather.replace();
      function togglePasswordVisibility(inputId, button) {
        const input = document.getElementById(inputId);
        const isVisible = input.type === 'text';
        
        input.type = isVisible ? 'password' : 'text';
        button.innerHTML = `<i data-feather="${isVisible ? 'eye' : 'eye-off'}" class="w-5 h-5"></i>`;
        feather.replace();
      }
    </script>
</body>
</html>

<?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>