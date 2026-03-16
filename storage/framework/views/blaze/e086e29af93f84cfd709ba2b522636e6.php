<?php
if (!function_exists('__e086e29af93f84cfd709ba2b522636e6')):
function __e086e29af93f84cfd709ba2b522636e6($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
<?php $__attrs9bc1220a6d92007ba8f44b21b280dc1a = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','x-data' => 'fluxInputCopyable','x-on:click' => 'copy()','x-bind:data-copyable-copied' => 'copied','aria-label' => ''.e(__('Copy to clipboard')).'']; ?>
<?php $__slots9bc1220a6d92007ba8f44b21b280dc1a = []; ?>
<?php ob_start(); ?>
    <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/clipboard-document-check.blade.php', $__blaze->compiledPath.'/761696696c866d3653a3e6118e69d103.php'); ?>
<?php $__blaze->pushData(['variant' => 'mini','class' => 'hidden [[data-copyable-copied]>&]:block']); ?>
<?php __761696696c866d3653a3e6118e69d103($__blaze, ['variant' => 'mini','class' => 'hidden [[data-copyable-copied]>&]:block'], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
    <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/clipboard-document.blade.php', $__blaze->compiledPath.'/d85fee81feeba5e478d56dbc074a980a.php'); ?>
<?php $__blaze->pushData(['variant' => 'mini','class' => 'block [[data-copyable-copied]>&]:hidden']); ?>
<?php __d85fee81feeba5e478d56dbc074a980a($__blaze, ['variant' => 'mini','class' => 'block [[data-copyable-copied]>&]:hidden'], [], [], isset($this) ? $this : null); ?>
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
} endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/input/copyable.blade.php ENDPATH**/ ?>