<?php
if (!function_exists('__4214f80c1e9fb2cfc0b7689639a5f12f')):
function __4214f80c1e9fb2cfc0b7689639a5f12f($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/9bc1220a6d92007ba8f44b21b280dc1a.php'); ?>
<?php $__blaze->pushData(['attributes' => $attributes->class('shrink-0'),'variant' => 'subtle','square' => true,'x-data' => true,'x-on:click' => '$dispatch(\'flux-sidebar-toggle\')','aria-label' => ''.e(__('Toggle sidebar')).'','data-flux-sidebar-toggle' => true]); ?>
<?php __9bc1220a6d92007ba8f44b21b280dc1a($__blaze, ['attributes' => $attributes->class('shrink-0'),'variant' => 'subtle','square' => true,'x-data' => true,'x-on:click' => '$dispatch(\'flux-sidebar-toggle\')','aria-label' => ''.e(__('Toggle sidebar')).'','data-flux-sidebar-toggle' => true], [], ['attributes', 'square', 'x-data', 'data-flux-sidebar-toggle'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/toggle.blade.php ENDPATH**/ ?>