<?php # [BlazeFolded]:{flux::link}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/link.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::checkbox}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/checkbox/index.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::button}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::link}:{D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/link.blade.php}:{1772508755} ?>
<?php if (isset($component)) { $__componentOriginal08b8a564843783787e0bee3357e24f38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08b8a564843783787e0bee3357e24f38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::auth','data' => ['title' => __('Log in')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Log in'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="w-full bg-white dark:bg-zinc-900 shadow-xl rounded-2xl border border-zinc-200 dark:border-zinc-800 overflow-hidden">
        <div class="px-6 py-8">
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-white"><?php echo e(__('Bienvenido')); ?></h2>
                <p class="text-xs text-zinc-500 mt-1"><?php echo e(__('Ingresa para continuar')); ?></p>
            </div>

            <form method="POST" action="<?php echo e(route('login.store')); ?>" class="space-y-4">
                <?php echo csrf_field(); ?>
                <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/input/index.blade.php', $__blaze->compiledPath.'/971a085dac352a1d946907fe37aece21.php'); ?>
<?php $__blaze->pushData(['name' => 'email','label' => __('Correo'),'type' => 'email','required' => true,'autofocus' => true,'placeholder' => 'email@ejemplo.com']); ?>
<?php _971a085dac352a1d946907fe37aece21($__blaze, ['name' => 'email','label' => __('Correo'),'type' => 'email','required' => true,'autofocus' => true,'placeholder' => 'email@ejemplo.com'], [], ['label', 'required', 'autofocus'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
                
                <div class="space-y-1">
                    <div class="flex justify-between px-1">
                        <label class="text-sm font-medium"><?php echo e(__('Contraseña')); ?></label>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Route::has('password.request')): ?>
                            <?php ob_start(); ?><a class="inline font-medium underline-offset-[6px] hover:decoration-current underline [[data-color]&gt;&amp;]:text-inherit [[data-color]&gt;&amp;]:decoration-current/20 dark:[[data-color]&gt;&amp;]:decoration-current/50 [[data-color]&gt;&amp;]:hover:decoration-current text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] text-[11px] font-semibold !text-indigo-600" <?php if (($__blazeAttr = route('password.request')) !== false && !is_null($__blazeAttr)): ?>href="<?php echo e($__blazeAttr === true ? 'href' : $__blazeAttr); ?>"<?php endif; unset($__blazeAttr); ?> wire:navigate="" data-flux-link ><?php ob_start(); ?><?php echo e(__('¿Olvidaste la clave?')); ?><?php echo trim(ob_get_clean()); ?></a><?php echo ltrim(ob_get_clean()); ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/input/index.blade.php', $__blaze->compiledPath.'/971a085dac352a1d946907fe37aece21.php'); ?>
<?php $__blaze->pushData(['name' => 'password','type' => 'password','required' => true,'viewable' => true]); ?>
<?php _971a085dac352a1d946907fe37aece21($__blaze, ['name' => 'password','type' => 'password','required' => true,'viewable' => true], [], ['required', 'viewable'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
                </div>

                <?php ob_start(); ?><ui-field class="min-w-0 [&amp;:not(:has([data-flux-field])):has([data-flux-control][disabled])&gt;[data-flux-label]]:opacity-50 [&amp;:has(&gt;[data-flux-radio-group][disabled])&gt;[data-flux-label]]:opacity-50 [&amp;:has(&gt;[data-flux-checkbox-group][disabled])&gt;[data-flux-label]]:opacity-50 grid gap-x-3 gap-y-1.5 has-[[data-flux-label]~[data-flux-control]]:grid-cols-[1fr_auto] has-[[data-flux-control]~[data-flux-label]]:grid-cols-[auto_1fr] [&amp;&gt;[data-flux-control]~[data-flux-description]]:row-start-2 [&amp;&gt;[data-flux-control]~[data-flux-description]]:col-start-2 [&amp;&gt;[data-flux-control]~[data-flux-error]]:col-span-2 [&amp;&gt;[data-flux-control]~[data-flux-error]]:mt-1 [&amp;&gt;[data-flux-label]~[data-flux-control]]:row-start-1 [&amp;&gt;[data-flux-label]~[data-flux-control]]:col-start-2" data-flux-field>
    <ui-checkbox class="flex size-[1.125rem] rounded-[.3rem] mt-px outline-offset-2 text-xs" <?php if (($__blazeAttr = __('Recordarme')) !== false && !is_null($__blazeAttr)): ?>label="<?php echo e($__blazeAttr === true ? 'label' : $__blazeAttr); ?>"<?php endif; unset($__blazeAttr); ?>  name="remember"  data-flux-control data-flux-checkbox>
        <div class="shrink-0 size-[1.125rem] rounded-[.3rem] flex justify-center items-center text-sm text-zinc-700 dark:text-zinc-800 shadow-xs [ui-checkbox[disabled]_&amp;]:opacity-75 [ui-checkbox[data-checked][disabled]_&amp;]:opacity-50 [ui-checkbox[disabled]_&amp;]:shadow-none [ui-checkbox[data-checked]_&amp;]:shadow-none [ui-checkbox[data-indeterminate]_&amp;]:shadow-none [ui-checkbox[data-checked]:not([data-indeterminate])_&amp;&gt;svg:first-child]:block [ui-checkbox[data-indeterminate]_&amp;&gt;svg:last-child]:block border border-zinc-300 dark:border-white/10 [ui-checkbox[disabled]_&amp;]:border-zinc-200 dark:[ui-checkbox[disabled]_&amp;]:border-white/5 [ui-checkbox[data-checked]_&amp;]:border-transparent [ui-checkbox[data-indeterminate]_&amp;]:border-transparent [ui-checkbox[disabled][data-checked]_&amp;]:border-transparent [ui-checkbox[disabled][data-indeterminate]_&amp;]:border-transparent [print-color-adjust:exact] bg-white dark:bg-white/10 [ui-checkbox[data-checked]_&amp;]:bg-[var(--color-accent)] hover:[ui-checkbox[data-checked]_&amp;]:bg-(--color-accent) focus:[ui-checkbox[data-checked]_&amp;]:bg-(--color-accent) [ui-checkbox[data-indeterminate]_&amp;]:bg-[var(--color-accent)] hover:[ui-checkbox[data-indeterminate]_&amp;]:bg-(--color-accent) focus:[ui-checkbox[data-indeterminate]_&amp;]:bg-(--color-accent)" data-flux-checkbox-indicator>
    <svg class="shrink-0 [:where(&amp;)]:size-4 hidden text-[var(--color-accent-foreground)]" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd"/>
</svg>

            <svg class="shrink-0 [:where(&amp;)]:size-4 hidden text-[var(--color-accent-foreground)]" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z"/>
</svg>

        </div>
    </ui-checkbox>

                    <ui-label class="inline-flex items-center text-sm font-medium  [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white [&amp;:has([data-flux-label-trailing])]:flex" data-flux-label>
    <?php echo e(__('Recordarme')); ?>


    
    
    </ui-label>
        
        
        <div role="alert" aria-live="polite" aria-atomic="true" class="mt-3 text-sm font-medium text-red-500 dark:text-red-400 hidden" data-flux-error>
    </div>
</ui-field>

<?php echo ltrim(ob_get_clean()); ?>

                <?php ob_start(); ?><button type="submit" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none justify-center h-10 text-sm rounded-lg ps-4 pe-4 inline-flex  bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)] text-[var(--color-accent-foreground)] border border-black/10 dark:border-0 shadow-[inset_0px_1px_--theme(--color-white/.2)] [[data-flux-button-group]_&amp;]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-[1px] dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-s-[1px] [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[color-mix(in_srgb,var(--color-accent-foreground),transparent_85%)] *:transition-opacity [&amp;[disabled]&gt;:not([data-flux-loading-indicator])]:opacity-0 [&amp;[disabled]&gt;[data-flux-loading-indicator]]:opacity-100 [&amp;[disabled]]:pointer-events-none  w-full !py-2.5 !bg-indigo-600 hover:!bg-indigo-700" data-flux-button="data-flux-button" data-flux-group-target="data-flux-group-target">
        <div class="absolute inset-0 flex items-center justify-center opacity-0" data-flux-loading-indicator>
                <svg class="shrink-0 [:where(&amp;)]:size-4 animate-spin" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" data-slot="icon">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
                    </div>
        
        
                    
            
            <span><?php ob_start(); ?>
                    <?php echo e(__('Entrar')); ?>

                <?php echo trim(ob_get_clean()); ?></span>
    </button>
<?php echo ltrim(ob_get_clean()); ?>
            </form>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Route::has('register')): ?>
                <div class="mt-6 pt-4 border-t border-zinc-100 dark:border-zinc-800 text-center">
                    <p class="text-xs text-zinc-500">
                        <?php echo e(__('¿No tienes cuenta?')); ?>

                        <?php ob_start(); ?><a class="inline font-medium underline-offset-[6px] hover:decoration-current underline [[data-color]&gt;&amp;]:text-inherit [[data-color]&gt;&amp;]:decoration-current/20 dark:[[data-color]&gt;&amp;]:decoration-current/50 [[data-color]&gt;&amp;]:hover:decoration-current text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] font-bold !text-indigo-600" <?php if (($__blazeAttr = route('register')) !== false && !is_null($__blazeAttr)): ?>href="<?php echo e($__blazeAttr === true ? 'href' : $__blazeAttr); ?>"<?php endif; unset($__blazeAttr); ?> wire:navigate="" data-flux-link ><?php ob_start(); ?><?php echo e(__('Regístrate')); ?><?php echo trim(ob_get_clean()); ?></a><?php echo ltrim(ob_get_clean()); ?>
                    </p>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08b8a564843783787e0bee3357e24f38)): ?>
<?php $attributes = $__attributesOriginal08b8a564843783787e0bee3357e24f38; ?>
<?php unset($__attributesOriginal08b8a564843783787e0bee3357e24f38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08b8a564843783787e0bee3357e24f38)): ?>
<?php $component = $__componentOriginal08b8a564843783787e0bee3357e24f38; ?>
<?php unset($__componentOriginal08b8a564843783787e0bee3357e24f38); ?>
<?php endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\resources\views/pages/auth/login.blade.php ENDPATH**/ ?>