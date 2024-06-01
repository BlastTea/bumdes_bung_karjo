@props(['status'])

@if ($status)
    <div
        {{ $attributes->merge(['class' => 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative']) }}>
        <span class="block sm:inline">{{ $status }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="$dispatch('close-status')">
            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M14.293 5.293a1 1 0 0 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 1 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 1 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 1.414-1.414L10 8.586l4.293-4.293z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>
@endif
