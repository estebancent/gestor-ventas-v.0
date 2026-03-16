<?php # [BlazeFolded]:{flux::button}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::link}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/link.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::link}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/link.blade.php}:{1772508755} ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Autenticación'); ?> | <?php echo e(config('app.name', 'Tienda')); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo app('flux')->fluxAppearance(); ?>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="min-h-full antialiased bg-zinc-50 dark:bg-zinc-950 relative selection:bg-indigo-100">
    
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-[10%] -left-[10%] w-[70%] h-[40%] rounded-full bg-indigo-500/5 blur-[100px]"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[70%] h-[40%] rounded-full bg-blue-500/5 blur-[100px]"></div>
    </div>

    <div class="relative z-10 min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        
        <div class="absolute top-4 left-4">
            <?php ob_start(); ?><a href="/" data-flux-button="data-flux-button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none justify-center h-8 text-sm rounded-md px-3 inline-flex  bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white      !text-zinc-500" wire:navigate="">
        <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd"/>
</svg>

                
                    
            
            <span><?php ob_start(); ?>
                <span class="hidden sm:inline">Volver</span>
            <?php echo trim(ob_get_clean()); ?></span>
    </a>
<?php echo ltrim(ob_get_clean()); ?>
        </div>

        <main class="w-full max-w-md mx-auto px-4">
            <div class="mb-8 text-center">
                <a href="/" wire:navigate class="inline-flex flex-col items-center gap-3 group">
                    <div class="p-3 bg-indigo-600 rounded-2xl shadow-lg group-hover:scale-105 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <span class="text-xl font-black tracking-tighter text-zinc-900 dark:text-white uppercase italic">
                        <?php echo e(config('app.name', 'Tienda')); ?>

                    </span>
                </a>
            </div>

            <?php echo e($slot); ?>


            <footer class="mt-8 text-center space-y-4">
                <div class="flex justify-center gap-4">
                    <?php ob_start(); ?><a class="inline font-medium underline-offset-[6px] hover:decoration-current underline [[data-color]&gt;&amp;]:text-inherit [[data-color]&gt;&amp;]:decoration-current/20 dark:[[data-color]&gt;&amp;]:decoration-current/50 [[data-color]&gt;&amp;]:hover:decoration-current text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] text-[10px] uppercase tracking-widest !text-zinc-400" href="#" data-flux-link ><?php ob_start(); ?>Privacidad<?php echo trim(ob_get_clean()); ?></a><?php echo ltrim(ob_get_clean()); ?>
                    <?php ob_start(); ?><a class="inline font-medium underline-offset-[6px] hover:decoration-current underline [[data-color]&gt;&amp;]:text-inherit [[data-color]&gt;&amp;]:decoration-current/20 dark:[[data-color]&gt;&amp;]:decoration-current/50 [[data-color]&gt;&amp;]:hover:decoration-current text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] text-[10px] uppercase tracking-widest !text-zinc-400" href="#" data-flux-link ><?php ob_start(); ?>Ayuda<?php echo trim(ob_get_clean()); ?></a><?php echo ltrim(ob_get_clean()); ?>
                </div>
                <p class="text-[10px] text-zinc-400 dark:text-zinc-500 font-bold uppercase tracking-[0.2em]">
                    &copy; <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>

                </p>
            </footer>
        </main>
    </div>

    <?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

</body>
</html><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\resources\views/layouts/auth.blade.php ENDPATH**/ ?>