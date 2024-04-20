<?php

use App\Models\Customer;
use App\Models\Winner;
use App\Http\Controllers\Services\RegisterService;
use function Livewire\Volt\{mount, state};

state(['remaining_records', 'winner']);
mount(function () {
    $this->remaining_records = RegisterService::MAX_REGISTERS - Customer::count();
    $this->winner = Winner::with('customer.city.department')->first();
});
?>

<div>
    @if ($remaining_records)
    <haader class="mb-10 mt-5 text-lg text-center">
        <p class="text-lg">{{ $remaining_records > 1 ? 'Quedan ' . $remaining_records . ' registros restantes' : 'Queda un registro' }} para conocer al ganador de este incleíble automóvil.</p>
    </haader>
    @elseif ($winner)
    <main class="mt-5 mb-10 text-center">
        <p class="text-3xl">¡¡GANADOR!!</p>
        <p class="text-xl">El afortunado ganador de nuestro increíble concurso</p>
        <p class="mt-12 text-uppercase text-5xl">{{ $winner->customer->full_name }}</p>
    </main>
    <footer class="mt-20">
        <p><text class="font-bold">Agradecemos a todos los que participaron en el concurso.</text> Su entusiasmo y apoyo nos motivan a seguir creando experiencias emocionantes para nuestros clientes.</p>
    </footer>

    @endif
</div>
