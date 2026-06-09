
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['variant' => 'filled']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['variant' => 'filled']); ?>
<?php foreach (array_filter((['variant' => 'filled']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form method="POST" action="<?php echo e(route('logout')); ?>">
  <?php echo csrf_field(); ?>
  <button
    type="submit"
    class="flex items-center gap-2 dark:text-red-400 dark:hover:text-red-600
    <?php echo e($variant === 'filled'
      ? 'bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg'
      : 'text-red-600 hover:text-red-700  font-medium text-sm px-3 py-2 rounded-md'); ?>"
  >
    <i data-feather="log-out" class="w-4 h-4"></i>
    Cerrar Sesión
  </button>
</form>
<?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/components/logout-button.blade.php ENDPATH**/ ?>