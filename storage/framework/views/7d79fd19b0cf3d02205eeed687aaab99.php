<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['editUrl' => '#', 'showUrl' => '#', 'deleteUrl' => '#']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['editUrl' => '#', 'showUrl' => '#', 'deleteUrl' => '#']); ?>
<?php foreach (array_filter((['editUrl' => '#', 'showUrl' => '#', 'deleteUrl' => '#']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex items-center justify-center gap-3">
    <a href="<?php echo e($editUrl); ?>" class="text-blue-600 hover:underline">Editar</a>
    <a href="<?php echo e($showUrl); ?>" class="text-green-600 hover:underline">Ver</a>
    <form action="<?php echo e($deleteUrl); ?>" method="POST" class="inline" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este elemento?')">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="text-red-600 hover:underline bg-transparent border-none cursor-pointer">Eliminar</button>
    </form>
</div><?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/components/action-links.blade.php ENDPATH**/ ?>