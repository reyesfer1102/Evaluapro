<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['href', 'active' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['href', 'active' => false]); ?>
<?php foreach (array_filter((['href', 'active' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<a href="<?php echo e($href); ?>"
   <?php echo e($attributes->merge(['class' =>
       'text-white hover:text-blue-300 px-3 py-2 rounded-md text-sm font-medium transition' .
       ($active ? ' font-semibold underline text-blue-700' : '')
   ])); ?>>
    <?php echo e($slot); ?>

</a>
<?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/components/a-navbar.blade.php ENDPATH**/ ?>