<x-layouts.app>

    <div class="relative flex flex-col items-center justify-center">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <div class="flex lg:justify-center lg:col-start-2">
                    <h1 class="text-black">MARCA DE AUTOMOVILES</h1>
                </div>

                <nav class="-mx-3 flex flex-1 justify-end">
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        {{ __('Administrator login') }}
                    </a>
                </nav>
                {{-- <livewire:welcome.navigation /> --}}

            </header>

            <main class="mt-6">
                <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">

                    <!-- Seccion que dirá el ganador -->
                    <div class="rounded-lg bg-white p-6 lg:pb-10">

                    </div>

                    <!-- Section de registro al concurso -->
                    <div class="rounded-lg bg-white p-6 lg:pb-10">

                        <livewire:pages.register>

                    </div>
                </div>
            </main>

        </div>
    </div>

</x-layouts.app>
