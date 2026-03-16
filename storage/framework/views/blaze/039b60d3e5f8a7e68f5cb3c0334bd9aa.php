<?php
if (!function_exists('__039b60d3e5f8a7e68f5cb3c0334bd9aa')):
function __039b60d3e5f8a7e68f5cb3c0334bd9aa($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$__defaults = [
    'name' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute on the checkbox if it has been set
// manually, but not if it has been set from the wire:model attribute...
$showName = isset($name);

if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('flex size-[1.125rem] rounded-[.3rem] mt-px outline-offset-2')
    ;
?>

<?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/with-inline-field.blade.php', $__blaze->compiledPath.'/25956f91e5b5a9599438b1614d7b3aab.php'); ?>
<?php if (isset($__slots25956f91e5b5a9599438b1614d7b3aab)) $__slotsOriginal = $__slots25956f91e5b5a9599438b1614d7b3aab; ?>
<?php if (isset($__attrs25956f91e5b5a9599438b1614d7b3aab)) $__attrsOriginal = $__attrs25956f91e5b5a9599438b1614d7b3aab; ?>
<?php $__attrs25956f91e5b5a9599438b1614d7b3aab = ['attributes' => $attributes]; ?>
<?php $__slots25956f91e5b5a9599438b1614d7b3aab = []; ?>
<?php ob_start(); ?>
    <ui-checkbox <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> data-flux-control data-flux-checkbox>
        <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/checkbox/indicator.blade.php', $__blaze->compiledPath.'/f3a9d94feb4bdc8caab6177a2f28ba48.php'); ?>
<?php $__blaze->pushData([]); ?>
<?php __f3a9d94feb4bdc8caab6177a2f28ba48($__blaze, [], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
    </ui-checkbox>
<?php $__slots25956f91e5b5a9599438b1614d7b3aab['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushData($__attrs25956f91e5b5a9599438b1614d7b3aab); ?>
<?php $__blaze->pushSlots($__slots25956f91e5b5a9599438b1614d7b3aab); ?>
<?php __25956f91e5b5a9599438b1614d7b3aab($__blaze, $__attrs25956f91e5b5a9599438b1614d7b3aab, $__slots25956f91e5b5a9599438b1614d7b3aab, ['attributes'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slots25956f91e5b5a9599438b1614d7b3aab = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrs25956f91e5b5a9599438b1614d7b3aab = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/checkbox/variants/default.blade.php ENDPATH**/ ?>