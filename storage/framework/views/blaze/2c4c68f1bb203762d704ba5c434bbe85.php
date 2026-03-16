<?php
if (!function_exists('__2c4c68f1bb203762d704ba5c434bbe85')):
function __2c4c68f1bb203762d704ba5c434bbe85($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$__defaults = [
    'sticky' => false,
];
$sticky ??= $attributes['sticky'] ?? $__defaults['sticky']; unset($attributes['sticky']);
unset($__defaults);
?>

<?php
    $classes = Flux::classes()
        ->add($sticky ? 'sticky top-0 z-20' : '')
    ;
?>

<thead <?php echo e($attributes->class($classes)); ?> data-flux-columns>
    <tr <?php echo e(isset($tr) ? $tr->attributes : ''); ?>>
        <?php echo e($tr ?? $slot); ?>

    </tr>
</thead>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/table/columns.blade.php ENDPATH**/ ?>