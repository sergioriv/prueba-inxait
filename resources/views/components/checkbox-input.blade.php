@props(['disabled' => false])

<input type="checkbox" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-4 h-4 text-blue-400 bg-gray-100 border-gray-300 rounded']) !!}>
