<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'type' => 'submit',
    'icon' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'type' => 'submit',
    'icon' => null,
]); ?>
<?php foreach (array_filter(([
    'type' => 'submit',
    'icon' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<button <?php echo e($attributes->merge([
    'type' => $type,
    'class' => 'w-full flex items-center justify-center gap-2 bg-blue-600 text-white font-medium py-3 rounded-lg hover:bg-blue-700 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600'
])); ?>>
    <?php echo e($slot); ?>

    <?php if($icon): ?>
        <i data-feather="<?php echo e($icon); ?>" class="w-5 h-5"></i>
    <?php endif; ?>
</button>
<?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/components/primary-button.blade.php ENDPATH**/ ?>