@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-600']) !!}>
