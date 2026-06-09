<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['color', 'icon', 'title', 'description', 'link', 'linkLabel']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['color', 'icon', 'title', 'description', 'link', 'linkLabel']); ?>
<?php foreach (array_filter((['color', 'icon', 'title', 'description', 'link', 'linkLabel']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $borderColor = 'border-' . $color . '-500';
    $iconBg = 'bg-' . $color . '-100';
    $iconColor = 'text-' . $color . '-600';
    $linkColor = 'text-' . $color . '-600';
?>

<div class="bg-white p-5 rounded-xl shadow-md card-hover border-l-4 <?php echo e($borderColor); ?>">
    <div class="flex items-center gap-3 mb-3">
        <div class="<?php echo e($iconBg); ?> p-2 rounded-lg">
            <i data-feather="<?php echo e($icon); ?>" class="<?php echo e($iconColor); ?> w-5 h-5"></i>
        </div>
        <h2 class="font-bold text-lg text-gray-800"><?php echo e($title); ?></h2>
    </div>
    <p class="text-gray-600 text-sm"><?php echo e($description); ?></p>
    <a href="<?php echo e($link); ?>" class="mt-4 <?php echo e($linkColor); ?> text-sm font-medium hover:underline inline-block">
        <?php echo e($linkLabel); ?>

    </a>
</div>
<?php /**PATH C:\Users\evaa2\OneDrive\Escritorio\EvaluaPro\evaluaPro\resources\views/components/card-dashboard.blade.php ENDPATH**/ ?>