<x-layouts.app>

    <div class="relative flex flex-col items-center justify-center">
        <header class="relative w-full">

            <div class="grid grid-cols-2 items-center gap-2 py-10 bg-black text-white p-6">
                <h3 class="font-extrabold text-xl">MARCA DE AUTOMOVILES</h3>
                <nav class="-mx-3 flex flex-1 justify-end">
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition focus:outline-none">
                        {{ __('Administrator login') }}
                    </a>
                </nav>
            </div>
        </header>

        <div class="relative max-w-2xl lg:max-w-7xl">
            <section class="py-10 text-black text-center">
                <h2 class="text-3xl ">¿Sueñas con conducir el auto de tus sueños?</h2>
                <h3 class="text-2xl font-bold">¡Tu oportunidad ha llegado!</h3>

                <p class="text-xl mt-5">Se complace en anunciar su emocionante concurso, donde un afortunado ganador se llevará a casa un increíble automóvil totalmente nuevo.</p>
                <p class="text-xl"><text class="font-extrabold">¿Qué estás esperando?</text> Regístrate ahora para participar en este concurso único y tener la oportunidad de convertirte en el nuevo dueño de este increíble automóvil.</p>
            </section>

            <main class="mt-6">
                <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">

                    <!-- Seccion que dirá el ganador -->
                    <div class="rounded-lg bg-white p-6 lg:pb-10">

                        <livewire:winner>

                    </div>

                    <!-- Section de registro al concurso -->
                    <div class="rounded-lg bg-white p-6 lg:pb-10">

                        <p class="mb-10 mt-5 text-lg text-center">
                            Para registrarte, solo tienes que completar este formulario de registro y <text class="font-bold">¡Cruza los dedos y espera a ser el ganador entre {{ \App\Http\Controllers\Services\RegisterService::MAX_REGISTERS }} participantes!</text>
                        </p>

                        <livewire:pages.register>

                    </div>
                </div>
            </main>

        </div>
    </div>

</x-layouts.app>
