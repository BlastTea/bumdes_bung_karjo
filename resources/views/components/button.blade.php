<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none']) }}>
    {{ $slot }}
</button>
