<x-layouts.app>

    <flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b">

        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:brand href="/admin/dashboard"
            logo="/img/logo.png"
            name="Panel Admin"
        />

        <flux:spacer />

        <flux:dropdown position="top" align="start">
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />

            <flux:menu>
                <flux:menu.item icon="arrow-right-start-on-rectangle">
                    Logout
                </flux:menu.item>
            </flux:menu>

        </flux:dropdown>

    </flux:header>


    <flux:sidebar sticky collapsible="mobile">

        <flux:sidebar.nav>

            <flux:sidebar.item icon="home" href="/admin/dashboard">
                Dashboard
            </flux:sidebar.item>

            <flux:sidebar.item icon="cube" href="/admin/productos">
                Productos
            </flux:sidebar.item>

            <flux:sidebar.item icon="users" href="/admin/usuarios">
                Usuarios
            </flux:sidebar.item>

            <flux:sidebar.item icon="shopping-cart" href="/admin/ventas">
                Ventas
            </flux:sidebar.item>

        </flux:sidebar.nav>

    </flux:sidebar>


    <flux:main container>

        {{ $slot }}

    </flux:main>

</x-layouts.app>