<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo e($title ?? config('app.name')); ?></title>

<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

<?php echo app('flux')->fluxAppearance(); ?>


<script>
document.documentElement.classList.toggle(
'dark',
window.matchMedia('(prefers-color-scheme: dark)').matches
);
</script>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


</head>

<body class="min-h-screen bg-white dark:bg-zinc-800 antialiased">

<?php echo e($slot); ?>


<?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


</body>
</html><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>