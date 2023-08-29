@props(['type' => 'text', 'error' => ''])

<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <input type="{{ $type }}"
        {{ $attributes->class(['w-full border border-gray-200 bg-gray-50  py-2.5 px-3 text-sm focus:border-gray-500 focus:outline-none']) }} />
    @if ($error)
        <span class="text-red-500 text-xs flex items-center justify-center p-1">
            {{ $error }}
        </span>
    @endif
</div>
