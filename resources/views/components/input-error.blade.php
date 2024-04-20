@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'mt-1 space-y-1 text-red-600 text-xs']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
