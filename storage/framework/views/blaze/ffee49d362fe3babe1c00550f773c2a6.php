<?php
if (!function_exists('__ffee49d362fe3babe1c00550f773c2a6')):
function __ffee49d362fe3babe1c00550f773c2a6($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$attributes = $attributes->merge([
    'variant' => 'subtle',
    'class' => '-me-1 [[data-flux-input]:has(input:placeholder-shown)_&]:hidden [[data-flux-input]:has(input[disabled])_&]:hidden',
    'square' => true,
    'size' => null,
]);
?>

<?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/9bc1220a6d92007ba8f44b21b280dc1a.php'); ?>
<?php if (isset($__slots9bc1220a6d92007ba8f44b21b280dc1a)) $__slotsOriginal = $__slots9bc1220a6d92007ba8f44b21b280dc1a; ?>
<?php if (isset($__attrs9bc1220a6d92007ba8f44b21b280dc1a)) $__attrsOriginal = $__attrs9bc1220a6d92007ba8f44b21b280dc1a; ?>
<?php $__attrs9bc1220a6d92007ba8f44b21b280dc1a = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','x-data' => 'fluxInputClearable','x-on:click' => 'clear()','tabindex' => '-1','aria-label' => 'Clear input','data-flux-clear-button' => true]; ?>
<?php $__slots9bc1220a6d92007ba8f44b21b280dc1a = []; ?>
<?php ob_start(); ?>
    <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/x-mark.blade.php', $__blaze->compiledPath.'/ecfccc61e3487ef23481a48177187a71.php'); ?>
<?php $__blaze->pushData(['variant' => 'micro']); ?>
<?php __ecfccc61e3487ef23481a48177187a71($__blaze, ['variant' => 'micro'], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php $__slots9bc1220a6d92007ba8f44b21b280dc1a['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushData($__attrs9bc1220a6d92007ba8f44b21b280dc1a); ?>
<?php $__blaze->pushSlots($__slots9bc1220a6d92007ba8f44b21b280dc1a); ?>
<?php __9bc1220a6d92007ba8f44b21b280dc1a($__blaze, $__attrs9bc1220a6d92007ba8f44b21b280dc1a, $__slots9bc1220a6d92007ba8f44b21b280dc1a, ['attributes', 'size', 'data-flux-clear-button'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slots9bc1220a6d92007ba8f44b21b280dc1a = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrs9bc1220a6d92007ba8f44b21b280dc1a = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/input/clearable.blade.php ENDPATH**/ ?>