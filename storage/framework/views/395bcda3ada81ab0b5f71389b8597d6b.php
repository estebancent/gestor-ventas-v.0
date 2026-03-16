<?php # [BlazeFolded]:{flux::sidebar.toggle}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/toggle.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::brand}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/brand.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::navlist}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/index.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::spacer}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/spacer.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::navlist}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/index.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::sidebar}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/index.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::sidebar.toggle}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/toggle.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::spacer}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/spacer.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::brand}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/brand.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::header}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/header.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::main}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/main.blade.php}:{1772508755} ?>
<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    
    <?php ob_start(); ?><?php $__blaze->pushData(['sticky' => '1', 'stashable' => '1', 'class' => 'bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700']); $__env->pushConsumableComponentData(['sticky' => '1', 'stashable' => '1', 'class' => 'bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700']); ?><ui-sidebar-toggle class="z-20 fixed inset-0 bg-black/10 hidden data-flux-sidebar-on-mobile:not-data-flux-sidebar-collapsed-mobile:block" data-flux-sidebar-backdrop></ui-sidebar-toggle>

<ui-sidebar
    class="[grid-area:sidebar] z-1 flex flex-col gap-4 [:where(&amp;)]:w-64 p-4 data-flux-sidebar-collapsed-desktop:w-14 data-flux-sidebar-collapsed-desktop:px-2 data-flux-sidebar-collapsed-desktop:cursor-e-resize rtl:data-flux-sidebar-collapsed-desktop:cursor-w-resize max-lg:data-flux-sidebar-cloak:hidden data-flux-sidebar-on-mobile:data-flux-sidebar-collapsed-mobile:-translate-x-full data-flux-sidebar-on-mobile:data-flux-sidebar-collapsed-mobile:rtl:translate-x-full z-20! data-flux-sidebar-on-mobile:start-0! data-flux-sidebar-on-mobile:fixed! data-flux-sidebar-on-mobile:top-0! data-flux-sidebar-on-mobile:min-h-dvh! data-flux-sidebar-on-mobile:max-h-dvh! max-h-dvh overflow-y-auto overscroll-contain bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700" x-init="$el.classList.add(&#039;transition-transform&#039;)"
     collapsible="mobile"      stashable      sticky     x-data
    data-flux-sidebar-cloak
    data-flux-sidebar
>
    <?php ob_start(); ?>
        <?php ob_start(); ?><button type="button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none justify-center h-10 text-sm rounded-lg w-10 inline-flex  bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-500 hover:text-zinc-800 dark:text-zinc-400 dark:hover:text-white      shrink-0 lg:hidden" data-flux-button="data-flux-button" x-data="" x-on:click="$dispatch('flux-sidebar-toggle')" aria-label="Toggle sidebar" data-flux-sidebar-toggle="data-flux-sidebar-toggle">
        <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z"/>
</svg>
    </button>
<?php echo ltrim(ob_get_clean()); ?>

        <?php ob_start(); ?><a href="/dashboard" class="h-10 flex items-center me-4 gap-2 px-2" data-flux-brand>
                    <div class="flex items-center justify-center h-6 rounded-sm overflow-hidden shrink-0">
                                    <img src="https://fluxui.dev/img/demo/logo.png" alt="" class="h-6" />
                            </div>
        
        <div class="text-sm font-medium truncate [:where(&amp;)]:text-zinc-800 dark:[:where(&amp;)]:text-zinc-100">Gestor Ventas</div>
    </a>
<?php echo ltrim(ob_get_clean()); ?>

        <?php ob_start(); ?><?php $__blaze->pushData(['variant' => 'outline']); $__env->pushConsumableComponentData(['variant' => 'outline']); ?><nav class="flex flex-col overflow-visible min-h-auto" data-flux-navlist>
    <?php ob_start(); ?>
            <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/da9ae238b21a5788fd8c79fb340abf19.php'); ?>
<?php if (isset($__slotsda9ae238b21a5788fd8c79fb340abf19)) $__slotsOriginal = $__slotsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php if (isset($__attrsda9ae238b21a5788fd8c79fb340abf19)) $__attrsOriginal = $__attrsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php $__attrsda9ae238b21a5788fd8c79fb340abf19 = ['icon' => 'home','href' => '/dashboard','wire:navigate' => true]; ?>
<?php $__slotsda9ae238b21a5788fd8c79fb340abf19 = []; ?>
<?php ob_start(); ?>Inicio<?php $__slotsda9ae238b21a5788fd8c79fb340abf19['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushData($__attrsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php $__blaze->pushSlots($__slotsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php _da9ae238b21a5788fd8c79fb340abf19($__blaze, $__attrsda9ae238b21a5788fd8c79fb340abf19, $__slotsda9ae238b21a5788fd8c79fb340abf19, ['wire:navigate'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotsda9ae238b21a5788fd8c79fb340abf19 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrsda9ae238b21a5788fd8c79fb340abf19 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>

            <?php if (isset($component)) { $__componentOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navlist.group','data' => ['label' => 'Inventario','class' => 'mt-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navlist.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Inventario','class' => 'mt-4']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/da9ae238b21a5788fd8c79fb340abf19.php'); ?>
<?php if (isset($__slotsda9ae238b21a5788fd8c79fb340abf19)) $__slotsOriginal = $__slotsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php if (isset($__attrsda9ae238b21a5788fd8c79fb340abf19)) $__attrsOriginal = $__attrsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php $__attrsda9ae238b21a5788fd8c79fb340abf19 = ['icon' => 'shopping-bag','href' => route('admin.products.index'),'current' => request()->routeIs('admin.products.*'),'wire:navigate' => true]; ?>
<?php $__slotsda9ae238b21a5788fd8c79fb340abf19 = []; ?>
<?php ob_start(); ?>Productos<?php $__slotsda9ae238b21a5788fd8c79fb340abf19['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushData($__attrsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php $__blaze->pushSlots($__slotsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php _da9ae238b21a5788fd8c79fb340abf19($__blaze, $__attrsda9ae238b21a5788fd8c79fb340abf19, $__slotsda9ae238b21a5788fd8c79fb340abf19, ['href', 'current', 'wire:navigate'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotsda9ae238b21a5788fd8c79fb340abf19 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrsda9ae238b21a5788fd8c79fb340abf19 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
                <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/da9ae238b21a5788fd8c79fb340abf19.php'); ?>
<?php if (isset($__slotsda9ae238b21a5788fd8c79fb340abf19)) $__slotsOriginal = $__slotsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php if (isset($__attrsda9ae238b21a5788fd8c79fb340abf19)) $__attrsOriginal = $__attrsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php $__attrsda9ae238b21a5788fd8c79fb340abf19 = ['icon' => 'tag','href' => route('admin.categories.index'),'current' => request()->routeIs('admin.categories.*'),'wire:navigate' => true]; ?>
<?php $__slotsda9ae238b21a5788fd8c79fb340abf19 = []; ?>
<?php ob_start(); ?>Categorías<?php $__slotsda9ae238b21a5788fd8c79fb340abf19['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushData($__attrsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php $__blaze->pushSlots($__slotsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php _da9ae238b21a5788fd8c79fb340abf19($__blaze, $__attrsda9ae238b21a5788fd8c79fb340abf19, $__slotsda9ae238b21a5788fd8c79fb340abf19, ['href', 'current', 'wire:navigate'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotsda9ae238b21a5788fd8c79fb340abf19 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrsda9ae238b21a5788fd8c79fb340abf19 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
                <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/da9ae238b21a5788fd8c79fb340abf19.php'); ?>
<?php if (isset($__slotsda9ae238b21a5788fd8c79fb340abf19)) $__slotsOriginal = $__slotsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php if (isset($__attrsda9ae238b21a5788fd8c79fb340abf19)) $__attrsOriginal = $__attrsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php $__attrsda9ae238b21a5788fd8c79fb340abf19 = ['icon' => 'bookmark','href' => route('admin.brands.index'),'current' => request()->routeIs('admin.brands.*'),'wire:navigate' => true]; ?>
<?php $__slotsda9ae238b21a5788fd8c79fb340abf19 = []; ?>
<?php ob_start(); ?>Marcas<?php $__slotsda9ae238b21a5788fd8c79fb340abf19['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushData($__attrsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php $__blaze->pushSlots($__slotsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php _da9ae238b21a5788fd8c79fb340abf19($__blaze, $__attrsda9ae238b21a5788fd8c79fb340abf19, $__slotsda9ae238b21a5788fd8c79fb340abf19, ['href', 'current', 'wire:navigate'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotsda9ae238b21a5788fd8c79fb340abf19 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrsda9ae238b21a5788fd8c79fb340abf19 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4)): ?>
<?php $attributes = $__attributesOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4; ?>
<?php unset($__attributesOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4)): ?>
<?php $component = $__componentOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4; ?>
<?php unset($__componentOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navlist.group','data' => ['label' => 'Operaciones','class' => 'mt-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navlist.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Operaciones','class' => 'mt-4']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/da9ae238b21a5788fd8c79fb340abf19.php'); ?>
<?php if (isset($__slotsda9ae238b21a5788fd8c79fb340abf19)) $__slotsOriginal = $__slotsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php if (isset($__attrsda9ae238b21a5788fd8c79fb340abf19)) $__attrsOriginal = $__attrsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php $__attrsda9ae238b21a5788fd8c79fb340abf19 = ['icon' => 'currency-dollar','href' => '/sales','wire:navigate' => true]; ?>
<?php $__slotsda9ae238b21a5788fd8c79fb340abf19 = []; ?>
<?php ob_start(); ?>Ventas<?php $__slotsda9ae238b21a5788fd8c79fb340abf19['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushData($__attrsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php $__blaze->pushSlots($__slotsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php _da9ae238b21a5788fd8c79fb340abf19($__blaze, $__attrsda9ae238b21a5788fd8c79fb340abf19, $__slotsda9ae238b21a5788fd8c79fb340abf19, ['wire:navigate'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotsda9ae238b21a5788fd8c79fb340abf19 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrsda9ae238b21a5788fd8c79fb340abf19 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
               
                <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/da9ae238b21a5788fd8c79fb340abf19.php'); ?>
<?php if (isset($__slotsda9ae238b21a5788fd8c79fb340abf19)) $__slotsOriginal = $__slotsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php if (isset($__attrsda9ae238b21a5788fd8c79fb340abf19)) $__attrsOriginal = $__attrsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php $__attrsda9ae238b21a5788fd8c79fb340abf19 = ['icon' => 'users','href' => route('admin.users.index'),'current' => request()->routeIs('admin.users.*'),'wire:navigate' => true]; ?>
<?php $__slotsda9ae238b21a5788fd8c79fb340abf19 = []; ?>
<?php ob_start(); ?>
                    Usuarios
                <?php $__slotsda9ae238b21a5788fd8c79fb340abf19['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushData($__attrsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php $__blaze->pushSlots($__slotsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php _da9ae238b21a5788fd8c79fb340abf19($__blaze, $__attrsda9ae238b21a5788fd8c79fb340abf19, $__slotsda9ae238b21a5788fd8c79fb340abf19, ['href', 'current', 'wire:navigate'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotsda9ae238b21a5788fd8c79fb340abf19 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrsda9ae238b21a5788fd8c79fb340abf19 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4)): ?>
<?php $attributes = $__attributesOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4; ?>
<?php unset($__attributesOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4)): ?>
<?php $component = $__componentOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4; ?>
<?php unset($__componentOriginal8b1fe5c87f0876e7c101dbc6fe82a9a4); ?>
<?php endif; ?>
        <?php echo trim(ob_get_clean()); ?>

</nav>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>

        <?php ob_start(); ?><div class="flex-1" data-flux-spacer></div>
<?php echo ltrim(ob_get_clean()); ?>

        <?php ob_start(); ?><?php $__blaze->pushData(['variant' => 'outline']); $__env->pushConsumableComponentData(['variant' => 'outline']); ?><nav class="flex flex-col overflow-visible min-h-auto" data-flux-navlist>
    <?php ob_start(); ?>
            <form method="POST" action="<?php echo e(route('logout')); ?>" class="w-full">
                <?php echo csrf_field(); ?>
                <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/da9ae238b21a5788fd8c79fb340abf19.php'); ?>
<?php if (isset($__slotsda9ae238b21a5788fd8c79fb340abf19)) $__slotsOriginal = $__slotsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php if (isset($__attrsda9ae238b21a5788fd8c79fb340abf19)) $__attrsOriginal = $__attrsda9ae238b21a5788fd8c79fb340abf19; ?>
<?php $__attrsda9ae238b21a5788fd8c79fb340abf19 = ['as' => 'button','type' => 'submit','icon' => 'arrow-right-start-on-rectangle']; ?>
<?php $__slotsda9ae238b21a5788fd8c79fb340abf19 = []; ?>
<?php ob_start(); ?>
                    Cerrar Sesión
                <?php $__slotsda9ae238b21a5788fd8c79fb340abf19['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushData($__attrsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php $__blaze->pushSlots($__slotsda9ae238b21a5788fd8c79fb340abf19); ?>
<?php _da9ae238b21a5788fd8c79fb340abf19($__blaze, $__attrsda9ae238b21a5788fd8c79fb340abf19, $__slotsda9ae238b21a5788fd8c79fb340abf19, [], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotsda9ae238b21a5788fd8c79fb340abf19 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrsda9ae238b21a5788fd8c79fb340abf19 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
            </form>
        <?php echo trim(ob_get_clean()); ?>

</nav>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>
    <?php echo trim(ob_get_clean()); ?>

</ui-sidebar>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>

    
    <?php ob_start(); ?><header class="[grid-area:header] z-10 min-h-14 flex items-center px-6 lg:px-8 lg:hidden bg-white dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700" data-flux-header>
            <?php ob_start(); ?>
        <?php ob_start(); ?><button type="button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none justify-center h-10 text-sm rounded-lg w-10 inline-flex -ms-2.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-500 hover:text-zinc-800 dark:text-zinc-400 dark:hover:text-white      shrink-0" data-flux-button="data-flux-button" x-data="" x-on:click="$dispatch('flux-sidebar-toggle')" aria-label="Toggle sidebar" data-flux-sidebar-toggle="data-flux-sidebar-toggle">
        <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"/>
</svg>
    </button>
<?php echo ltrim(ob_get_clean()); ?>
        <?php ob_start(); ?><div class="flex-1" data-flux-spacer></div>
<?php echo ltrim(ob_get_clean()); ?>
        <?php ob_start(); ?><a href="/dashboard" class="h-10 flex items-center me-4 gap-2" data-flux-brand>
                    <div class="flex items-center justify-center h-6 rounded-sm overflow-hidden shrink-0">
                                    <img src="https://fluxui.dev/img/demo/logo.png" alt="" class="h-6" />
                            </div>
        
        <div class="text-sm font-medium truncate [:where(&amp;)]:text-zinc-800 dark:[:where(&amp;)]:text-zinc-100">GV</div>
    </a>
<?php echo ltrim(ob_get_clean()); ?>
    <?php echo trim(ob_get_clean()); ?>

    </header>
<?php echo ltrim(ob_get_clean()); ?>

    
    <?php ob_start(); ?><div class="[grid-area:main] p-6 lg:p-8 [[data-flux-container]_&amp;]:px-0" data-flux-main>
    <?php ob_start(); ?>
        <div class="mx-auto w-full max-w-7xl">
            <?php echo e($slot); ?>

        </div>
    <?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\resources\views/components/layouts/admin.blade.php ENDPATH**/ ?>