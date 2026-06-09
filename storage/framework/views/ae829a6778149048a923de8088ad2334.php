<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EvaluaPro - Plataforma de Exámenes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  </head>
  <body class="bg-gradient-to-br from-blue-50 to-cyan-100 min-h-screen font-sans" >
    <div class="flex min-h-screen">
      <?php if (isset($component)) { $__componentOriginal506859910635f6cb96a4dfa15c5aae2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal506859910635f6cb96a4dfa15c5aae2c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lateral-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('lateral-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal506859910635f6cb96a4dfa15c5aae2c)): ?>
<?php $attributes = $__attributesOriginal506859910635f6cb96a4dfa15c5aae2c; ?>
<?php unset($__attributesOriginal506859910635f6cb96a4dfa15c5aae2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal506859910635f6cb96a4dfa15c5aae2c)): ?>
<?php $component = $__componentOriginal506859910635f6cb96a4dfa15c5aae2c; ?>
<?php unset($__componentOriginal506859910635f6cb96a4dfa15c5aae2c); ?>
<?php endif; ?>
        <?php echo e($slot); ?>

    </div>
    <script>
      feather.replace();
    </script>
  </body>
  </html><?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/layouts/welcome.blade.php ENDPATH**/ ?>