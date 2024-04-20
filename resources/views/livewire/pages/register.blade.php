<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Department;
use App\Models\City;

new
#[Layout('layouts.guest')]
class extends Component
{
    use LivewireAlert;

    public string $name = '';
    public string $last_name = '';
    public string $document = '';
    public string $phone = '';
    public string $email = '';
    public bool $habeas_data = false;

    public $departments;
    public $cities;
    public $department = null;
    public $city = null;

    public function mount() {
        $this->departments = Department::get();
        $this->cities = collect();
    }

    public function updatedDepartment($value)
    {
        $this->cities = City::where('department_id', $value)->orderBy('name')->get();
        $this->city = null;
    }

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'alpha', 'max:190'],
            'last_name' => ['required', 'alpha', 'max:190'],
            'document' => ['required', 'alpha_num', 'max:999999999999', 'unique:customers,document'],
            'city' => ['required', 'exists:cities,id'],
            'phone' => ['required', 'alpha_num', 'max:999999999999'],
            'email' => ['required', 'email', 'alpha_dash', 'lowercase', 'max:190'],
            'habeas_data' => ['boolean']
        ]);

        $validated['city_id'] = $validate['city'];
        unset($validate['city']);

        \App\Models\Customer::create($validated);

        $this->alert('success', __('Successful registration!'));

        $this->reset();
    }
}; ?>

<div>

    <form wire:submit="register">

        <div class="flex flex-col gap-4">

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" required />
                <x-text-input type="text"  wire:model="name" id="name" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <!-- Last Name -->
            <div>
                <x-input-label for="last_name" :value="__('Last name')" required />
                <x-text-input type="text" wire:model="last_name" id="last_name" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('last_name')"  />
            </div>

            <!-- Document -->
            <div>
                <x-input-label for="document" :value="__('Document')" required />
                <x-text-input type="text" wire:model="document" id="document" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('document')"  />
            </div>

            <!-- Department -->
            <div>
                <x-input-label for="department" :value="__('Department')" required />
                <x-select-input wire:model.live="department" id="department" class="block mt-1 w-full">
                    <option label="">&nbsp;</option>
                    @foreach ($this->departments as $deparment)
                        <option value="{{ $deparment->id }}">{{ $deparment->name }}</option>
                    @endforeach
                </x-select-input>
                <x-input-error :messages="$errors->get('department')"  />
            </div>

            <!-- City -->
            <div>
                <x-input-label for="city" :value="__('City')" required />
                <x-select-input wire:model="city" id="city" class="block mt-1 w-full">
                    <option label="">&nbsp;</option>
                    @foreach ($this->cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </x-select-input>
                <x-input-error :messages="$errors->get('city')"  />
            </div>

            <!-- Phone -->
            <div>
                <x-input-label for="phone" :value="__('Phone')" required />
                <x-text-input type="text" wire:model="phone" id="phone" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('phone')"  />
            </div>

            <!-- Email Address -->
            <div >
                <x-input-label for="email" :value="__('Email')" required />
                <x-text-input type="email" wire:model="email" id="email" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div>
                <div class="flex items-center">
                    <x-checkbox-input id="habeas_data" />
                    <x-input-label for="habeas_data" class="ms-2">
                        <span>Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales. <a href="#" class="font-semibold" style="color:royalblue;">Haga clic aquí</a></span>
                    </x-input-label>
                </div>

            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>

        </div>
    </form>
</div>
