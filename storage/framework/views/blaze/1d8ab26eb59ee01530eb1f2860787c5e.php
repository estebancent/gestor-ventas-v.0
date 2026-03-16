<?php
if (!function_exists('__1d8ab26eb59ee01530eb1f2860787c5e')):
function __1d8ab26eb59ee01530eb1f2860787c5e($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'variant' => null,
];
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
unset($__defaults);
?>

<?php
$classes = Flux::classes()
    ->add('flex flex-col')
    ->add('overflow-visible min-h-auto')
    ;
?>

<nav <?php echo e($attributes->class($classes)); ?> data-flux-navlist>
    <?php echo e($slot); ?>

</nav>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/index.blade.php ENDPATH**/ ?>