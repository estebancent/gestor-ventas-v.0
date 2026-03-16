<?php
if (!function_exists('__8f7268dd646480550085bf9ab9b8232f')):
function __8f7268dd646480550085bf9ab9b8232f($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
extract(Flux::forwardedAttributes($attributes, [
    'tooltipPosition',
    'tooltipKbd',
    'tooltip',
]));
?>

<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'top',
    'tooltipKbd' => null,
    'tooltip' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
unset($__defaults);
?>

<?php if ($tooltip): ?>
    <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/528f4adc37ca78afff1641a480b89fb0.php'); ?>
<?php if (isset($__slots528f4adc37ca78afff1641a480b89fb0)) $__slotsOriginal = $__slots528f4adc37ca78afff1641a480b89fb0; ?>
<?php if (isset($__attrs528f4adc37ca78afff1641a480b89fb0)) $__attrsOriginal = $__attrs528f4adc37ca78afff1641a480b89fb0; ?>
<?php $__attrs528f4adc37ca78afff1641a480b89fb0 = ['content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slots528f4adc37ca78afff1641a480b89fb0 = []; ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slots528f4adc37ca78afff1641a480b89fb0['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushData($__attrs528f4adc37ca78afff1641a480b89fb0); ?>
<?php $__blaze->pushSlots($__slots528f4adc37ca78afff1641a480b89fb0); ?>
<?php __528f4adc37ca78afff1641a480b89fb0($__blaze, $__attrs528f4adc37ca78afff1641a480b89fb0, $__slots528f4adc37ca78afff1641a480b89fb0, ['content', 'position', 'kbd'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slots528f4adc37ca78afff1641a480b89fb0 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrs528f4adc37ca78afff1641a480b89fb0 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>