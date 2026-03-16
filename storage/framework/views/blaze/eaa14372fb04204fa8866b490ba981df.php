<?php
if (!function_exists('__eaa14372fb04204fa8866b490ba981df')):
function __eaa14372fb04204fa8866b490ba981df($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'direction' => null,
    'sortable' => false,
    'sorted' => false,
    'align' => 'start',
    'sticky' => false,
];
$direction ??= $attributes['direction'] ?? $__defaults['direction']; unset($attributes['direction']);
$sortable ??= $attributes['sortable'] ?? $__defaults['sortable']; unset($attributes['sortable']);
$sorted ??= $attributes['sorted'] ?? $__defaults['sorted']; unset($attributes['sorted']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$sticky ??= $attributes['sticky'] ?? $__defaults['sticky']; unset($attributes['sticky']);
unset($__defaults);
?>

<?php
$classes = Flux::classes()
    ->add('py-3 px-3 first:ps-0 last:pe-0')
    ->add('text-start text-sm font-medium text-zinc-800 dark:text-white')
    ->add('border-b border-zinc-800/10 dark:border-white/20')
    ->add(match($align) {
        'center' => 'group/center-align',
        'end' => 'group/end-align',
        // Right is @deprecated but needed for backwards compatibility...
        'right' => 'group/end-align',
        default => '',
    })
    ->add($sortable ? 'group/sortable' : '')
    ->add($sticky ? [
        'z-10',
        'first:sticky first:left-0',
        'last:sticky last:right-0',
        'first:after:w-8 first:after:absolute first:after:inset-y-0 first:after:right-0 first:after:translate-x-full first:after:pointer-events-none',
        'last:after:w-8 last:after:absolute last:after:inset-y-0 last:after:left-0 last:after:-translate-x-full last:after:pointer-events-none',
        'in-data-scrolled-right:first:after:inset-shadow-[8px_0px_8px_-8px_rgba(0,0,0,0.05)]',
        'in-data-scrolled-left:last:after:inset-shadow-[-8px_0px_8px_-8px_rgba(0,0,0,0.05)]',
    ]: '')
    // If the last column is sortable, remove the right negative margin that the sortable applies to itself, as the
    // negative margin caused the last column to overflow the table creating an unnecessary horizontal scrollbar...
    ->add('**:data-flux-table-sortable:last:me-0')
    ;
?>

<th <?php echo e($attributes->class($classes)); ?> data-flux-column>
    <?php if ($sortable): ?>
        <div class="flex in-[.group\/center-align]:justify-center in-[.group\/end-align]:justify-end">
            <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/table/sortable.blade.php', $__blaze->compiledPath.'/c5e24d40bf0a7b20df475603e339fb97.php'); ?>
<?php if (isset($__slotsc5e24d40bf0a7b20df475603e339fb97)) $__slotsOriginal = $__slotsc5e24d40bf0a7b20df475603e339fb97; ?>
<?php if (isset($__attrsc5e24d40bf0a7b20df475603e339fb97)) $__attrsOriginal = $__attrsc5e24d40bf0a7b20df475603e339fb97; ?>
<?php $__attrsc5e24d40bf0a7b20df475603e339fb97 = ['sorted' => $sorted,'direction' => $direction]; ?>
<?php $__slotsc5e24d40bf0a7b20df475603e339fb97 = []; ?>
<?php ob_start(); ?>
                <div><?php echo e($slot); ?></div>
            <?php $__slotsc5e24d40bf0a7b20df475603e339fb97['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushData($__attrsc5e24d40bf0a7b20df475603e339fb97); ?>
<?php $__blaze->pushSlots($__slotsc5e24d40bf0a7b20df475603e339fb97); ?>
<?php __c5e24d40bf0a7b20df475603e339fb97($__blaze, $__attrsc5e24d40bf0a7b20df475603e339fb97, $__slotsc5e24d40bf0a7b20df475603e339fb97, ['sorted', 'direction'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotsc5e24d40bf0a7b20df475603e339fb97 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrsc5e24d40bf0a7b20df475603e339fb97 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
        </div>
    <?php else: ?>
        <div class="flex in-[.group\/center-align]:justify-center in-[.group\/end-align]:justify-end"><?php echo e($slot); ?></div>
    <?php endif; ?>
</th>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/table/column.blade.php ENDPATH**/ ?>