@props(['type' => 'text'])

<button type="{{ $type }}"
    {{ $attributes->class(['w-full rounded-md bg-blue-300 py-1.5 text-sm text-white hover:bg-blue-600']) }}>{{ $slot }}</button>