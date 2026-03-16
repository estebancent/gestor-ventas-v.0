<?php
if (!function_exists('__b266b25a91491f232bf2367284b15ebd')):
function __b266b25a91491f232bf2367284b15ebd($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'class' => '-me-1',
    'square' => true,
    'size' => null,
]);
?>

<?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/9bc1220a6d92007ba8f44b21b280dc1a.php'); ?>
<?php if (isset($__slots9bc1220a6d92007ba8f44b21b280dc1a)) $__slotsOriginal = $__slots9bc1220a6d92007ba8f44b21b280dc1a; ?>
<?php if (isset($__attrs9bc1220a6d92007ba8f44b21b280dc1a)) $__attrsOriginal = $__attrs9bc1220a6d92007ba8f44b21b280dc1a; ?>
<?php $__attrs9bc1220a6d92007ba8f44b21b280dc1a = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','x-data' => 'fluxInputViewable','x-on:click' => 'toggle()','x-bind:data-viewable-open' => 'open','aria-label' => ''.e(__('Toggle password visibility')).'']; ?>
<?php $__slots9bc1220a6d92007ba8f44b21b280dc1a = []; ?>
<?php ob_start(); ?>
    <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye-slash.blade.php', $__blaze->compiledPath.'/68cfcf0fdbade6dcc804bd2cbbea3ac9.php'); ?>
<?php $__blaze->pushData(['variant' => 'micro','class' => 'hidden [[data-viewable-open]>&]:block']); ?>
<?php __68cfcf0fdbade6dcc804bd2cbbea3ac9($__blaze, ['variant' => 'micro','class' => 'hidden [[data-viewable-open]>&]:block'], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
    <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye.blade.php', $__blaze->compiledPath.'/a0634e967025353d50040b9c08717521.php'); ?>
<?php $__blaze->pushData(['variant' => 'micro','class' => 'block [[data-viewable-open]>&]:hidden']); ?>
<?php __a0634e967025353d50040b9c08717521($__blaze, ['variant' => 'micro','class' => 'block [[data-viewable-open]>&]:hidden'], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php $__slots9bc1220a6d92007ba8f44b21b280dc1a['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushData($__attrs9bc1220a6d92007ba8f44b21b280dc1a); ?>
<?php $__blaze->pushSlots($__slots9bc1220a6d92007ba8f44b21b280dc1a); ?>
<?php __9bc1220a6d92007ba8f44b21b280dc1a($__blaze, $__attrs9bc1220a6d92007ba8f44b21b280dc1a, $__slots9bc1220a6d92007ba8f44b21b280dc1a, ['attributes', 'size'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slots9bc1220a6d92007ba8f44b21b280dc1a = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrs9bc1220a6d92007ba8f44b21b280dc1a = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/input/viewable.blade.php ENDPATH**/ ?>