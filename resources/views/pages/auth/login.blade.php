<x-layouts::auth :title="__('Log in')">
    <div class="w-full bg-white dark:bg-zinc-900 shadow-xl rounded-2xl border border-zinc-200 dark:border-zinc-800 overflow-hidden">
        <div class="px-6 py-8">
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-white">{{ __('Bienvenido') }}</h2>
                <p class="text-xs text-zinc-500 mt-1">{{ __('Ingresa para continuar') }}</p>
            </div>

            <form method="POST" action="{{ route('login.store') }}" class="space-y-4">
                @csrf
                <flux:input name="email" :label="__('Correo')" type="email" required autofocus placeholder="email@ejemplo.com" />
                
                <div class="space-y-1">
                    <div class="flex justify-between px-1">
                        <label class="text-sm font-medium">{{ __('Contraseña') }}</label>
                        @if (Route::has('password.request'))
                            <flux:link class="text-[11px] font-semibold !text-indigo-600" :href="route('password.request')" wire:navigate>{{ __('¿Olvidaste la clave?') }}</flux:link>
                        @endif
                    </div>
                    <flux:input name="password" type="password" required viewable />
                </div>

                <flux:checkbox name="remember" :label="__('Recordarme')" class="text-xs" />

                <flux:button variant="primary" type="submit" class="w-full !py-2.5 !bg-indigo-600 hover:!bg-indigo-700">
                    {{ __('Entrar') }}
                </flux:button>
            </form>

            @if (Route::has('register'))
                <div class="mt-6 pt-4 border-t border-zinc-100 dark:border-zinc-800 text-center">
                    <p class="text-xs text-zinc-500">
                        {{ __('¿No tienes cuenta?') }}
                        <flux:link :href="route('register')" wire:navigate class="font-bold !text-indigo-600">{{ __('Regístrate') }}</flux:link>
                    </p>
                </div>
            @endif
        </div>
    </div>
</x-layouts::auth>