<x-layouts.auth>

<h2 class="text-xl font-bold mb-4">Login</h2>

<input type="email" wire:model="email">

<input type="password" wire:model="password">

<button wire:click="login">
Entrar
</button>

</x-layouts.auth>