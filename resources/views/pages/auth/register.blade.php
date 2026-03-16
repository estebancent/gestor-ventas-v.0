<x-layouts::auth :title="__('Register')">
    <div class="mx-auto w-full max-w-lg bg-white dark:bg-zinc-900 shadow-xl rounded-2xl border border-zinc-200 dark:border-zinc-800 overflow-hidden">
        <div class="px-6 py-8 sm:px-10">
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-white">{{ __('Crear Cuenta') }}</h2>
                <p class="text-xs text-zinc-500 mt-1">{{ __('Solo un par de datos y estarás listo.') }}</p>
            </div>

            <form method="POST" action="{{ route('register.store') }}" class="space-y-4">
                @csrf

                <div class="grid grid-cols-1 gap-y-4">
                    <flux:input name="name" :label="__('Nombre Completo')" size="sm" required autofocus />
                    
                    <flux:input name="email" :label="__('Email')" size="sm" type="email" required />
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <flux:input name="password" :label="__('Contraseña')" size="sm" type="password" required viewable />
                        <flux:input name="password_confirmation" :label="__('Confirmar')" size="sm" type="password" required viewable />
                    </div>
                </div>

                <div class="pt-4">
                    <flux:button type="submit" variant="primary" class="w-full !py-2.5 !bg-indigo-600 hover:!bg-indigo-700">
                        {{ __('Registrarse ahora') }}
                    </flux:button>
                </div>
            </form>

            <div class="mt-8 pt-4 border-t border-zinc-100 dark:border-zinc-800 text-center">
                <p class="text-xs text-zinc-500">
                    ¿Ya tienes cuenta? 
                    <flux:link :href="route('login')" wire:navigate class="font-bold !text-indigo-600">Entrar</flux:link>
                </p>
            </div>
        </div>
    </div>
</x-layouts::auth>