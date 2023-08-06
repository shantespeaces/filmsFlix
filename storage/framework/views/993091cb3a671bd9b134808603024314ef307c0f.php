<?php $attributes = $attributes->exceptProps(['titre']); ?>
<?php foreach (array_filter((['titre']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <title><?php echo e($titre); ?> </title>
</head>

<body>
    <?php echo e($slot); ?>

</body>

</html>
<?php /**PATH C:\Cadriciel_laravel\cadw_tp1_NICOLAIDES_shante\cadw_tp1_films\resources\views/components/layout.blade.php ENDPATH**/ ?>