<?php
if (!function_exists('__f18709513b814ce6fd6fe5edc4f847ff')):
function __f18709513b814ce6fd6fe5edc4f847ff($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/fd12a97005ce6dddf0320c1b5f085baa.php'); ?>
<?php if (isset($__slotsfd12a97005ce6dddf0320c1b5f085baa)) $__slotsOriginal = $__slotsfd12a97005ce6dddf0320c1b5f085baa; ?>
<?php if (isset($__attrsfd12a97005ce6dddf0320c1b5f085baa)) $__attrsOriginal = $__attrsfd12a97005ce6dddf0320c1b5f085baa; ?>
<?php $__attrsfd12a97005ce6dddf0320c1b5f085baa = ['attributes' => $fieldAttributes]; ?>
<?php $__slotsfd12a97005ce6dddf0320c1b5f085baa = []; ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/8f81587d357cea14a73bbab83867df22.php'); ?>
<?php if (isset($__slots8f81587d357cea14a73bbab83867df22)) $__slotsOriginal = $__slots8f81587d357cea14a73bbab83867df22; ?>
<?php if (isset($__attrs8f81587d357cea14a73bbab83867df22)) $__attrsOriginal = $__attrs8f81587d357cea14a73bbab83867df22; ?>
<?php $__attrs8f81587d357cea14a73bbab83867df22 = ['attributes' => $labelAttributes]; ?>
<?php $__slots8f81587d357cea14a73bbab83867df22 = []; ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slots8f81587d357cea14a73bbab83867df22['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushData($__attrs8f81587d357cea14a73bbab83867df22); ?>
<?php $__blaze->pushSlots($__slots8f81587d357cea14a73bbab83867df22); ?>
<?php __8f81587d357cea14a73bbab83867df22($__blaze, $__attrs8f81587d357cea14a73bbab83867df22, $__slots8f81587d357cea14a73bbab83867df22, ['attributes'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slots8f81587d357cea14a73bbab83867df22 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrs8f81587d357cea14a73bbab83867df22 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/e4e92fb9ed2eb060c4d674e410e03e63.php'); ?>
<?php if (isset($__slotse4e92fb9ed2eb060c4d674e410e03e63)) $__slotsOriginal = $__slotse4e92fb9ed2eb060c4d674e410e03e63; ?>
<?php if (isset($__attrse4e92fb9ed2eb060c4d674e410e03e63)) $__attrsOriginal = $__attrse4e92fb9ed2eb060c4d674e410e03e63; ?>
<?php $__attrse4e92fb9ed2eb060c4d674e410e03e63 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slotse4e92fb9ed2eb060c4d674e410e03e63 = []; ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slotse4e92fb9ed2eb060c4d674e410e03e63['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushData($__attrse4e92fb9ed2eb060c4d674e410e03e63); ?>
<?php $__blaze->pushSlots($__slotse4e92fb9ed2eb060c4d674e410e03e63); ?>
<?php __e4e92fb9ed2eb060c4d674e410e03e63($__blaze, $__attrse4e92fb9ed2eb060c4d674e410e03e63, $__slotse4e92fb9ed2eb060c4d674e410e03e63, ['attributes'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotse4e92fb9ed2eb060c4d674e410e03e63 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrse4e92fb9ed2eb060c4d674e410e03e63 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        [STARTCOMPILEDUNBLAZE:NaX2mpQt4n]<?php \Livewire\Blaze\Unblaze::storeScope("NaX2mpQt4n", scope: ['attributes' => $errorAttributes->all()]) ?>[ENDCOMPILEDUNBLAZE:NaX2mpQt4n]

        <?php if (isset($descriptionTrailing)): ?>
            <?php $__blaze->ensureRequired('D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/e4e92fb9ed2eb060c4d674e410e03e63.php'); ?>
<?php if (isset($__slotse4e92fb9ed2eb060c4d674e410e03e63)) $__slotsOriginal = $__slotse4e92fb9ed2eb060c4d674e410e03e63; ?>
<?php if (isset($__attrse4e92fb9ed2eb060c4d674e410e03e63)) $__attrsOriginal = $__attrse4e92fb9ed2eb060c4d674e410e03e63; ?>
<?php $__attrse4e92fb9ed2eb060c4d674e410e03e63 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slotse4e92fb9ed2eb060c4d674e410e03e63 = []; ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slotse4e92fb9ed2eb060c4d674e410e03e63['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushData($__attrse4e92fb9ed2eb060c4d674e410e03e63); ?>
<?php $__blaze->pushSlots($__slotse4e92fb9ed2eb060c4d674e410e03e63); ?>
<?php __e4e92fb9ed2eb060c4d674e410e03e63($__blaze, $__attrse4e92fb9ed2eb060c4d674e410e03e63, $__slotse4e92fb9ed2eb060c4d674e410e03e63, ['attributes'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotse4e92fb9ed2eb060c4d674e410e03e63 = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrse4e92fb9ed2eb060c4d674e410e03e63 = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slotsfd12a97005ce6dddf0320c1b5f085baa['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushData($__attrsfd12a97005ce6dddf0320c1b5f085baa); ?>
<?php $__blaze->pushSlots($__slotsfd12a97005ce6dddf0320c1b5f085baa); ?>
<?php __fd12a97005ce6dddf0320c1b5f085baa($__blaze, $__attrsfd12a97005ce6dddf0320c1b5f085baa, $__slotsfd12a97005ce6dddf0320c1b5f085baa, ['attributes'], isset($this) ? $this : null); ?>
<?php if (isset($__slotsOriginal)) { $__slotsfd12a97005ce6dddf0320c1b5f085baa = $__slotsOriginal; unset($__slotsOriginal); } ?>
<?php if (isset($__attrsOriginal)) { $__attrsfd12a97005ce6dddf0320c1b5f085baa = $__attrsOriginal; unset($__attrsOriginal); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Proyectos_Laravel\gestor-ventas-v.0\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>