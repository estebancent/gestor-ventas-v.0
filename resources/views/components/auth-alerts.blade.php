@if (session('error'))
    <div class="fixed top-5 right-5 z-[100] max-w-sm animate-fade-in">
        <flux:card variant="subtle" class="!bg-red-50 !border-red-200 dark:!bg-red-900/20 dark:!border-red-800 shadow-xl">
            <div class="flex gap-3">
                <flux:icon.shield-exclamation class="text-red-600 dark:text-red-400" />
                <div>
                    <flux:heading size="sm" class="!text-red-800 dark:!text-red-200">Acceso Denegado</flux:heading>
                    <flux:subheading size="xs" class="!text-red-700 dark:!text-red-300">
                        {{ session('error') }}
                    </flux:subheading>
                </div>
                <flux:spacer />
                {{-- Botón para cerrar manual si el usuario quiere --}}
                <flux:button variant="ghost" size="xs" icon="x-mark" x-on:click="$el.closest('.fixed').remove()" />
            </div>
        </flux:card>
    </div>

    {{-- Auto-cerrado opcional tras 5 segundos --}}
    <script>
        setTimeout(() => {
            const alert = document.querySelector('.animate-fade-in');
            if (alert) alert.style.display = 'none';
        }, 5000);
    </script>
@endif