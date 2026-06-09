
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

<a
  href="<?php echo e(url('/welcome')); ?>"
  class="flex items-center gap-2 px-5 py-2 rounded-lg font-semibold text-white transition-all duration-300 ease-in-out
    <?php echo e($variant === 'filled'
      ? 'bg-gradient-to-r from-blue-900 via-black to-blue-800 hover:-translate-y-1 hover:shadow-lg'
      : 'text-blue-100 hover:text-white'); ?>"
>
  <i data-feather="home" class="w-5 h-5"></i>
  Página principal
</a>
<?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/components/welcome-button.blade.php ENDPATH**/ ?>