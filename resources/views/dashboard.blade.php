<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <a
                        href="{{ route('customers.export') }}"
                        class="bg-green-700 block flex focus:ring-4 focus:ring-green-300 font-medium gap-2 hover:bg-green-800 inline-flex items-center mb-2 me-2 px-5 py-2.5 rounded-lg text-sm text-white">
                        <x-svg.download />
                        <text>Descargar registro de clientes en Excel</text>
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
