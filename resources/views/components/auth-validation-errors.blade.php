@props(['errors'])

@if ($errors->any())
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 20000)" x-show="show"
        class="fixed inset-0 flex items-start justify-end p-4 z-50">
        <div class="w-full sm:max-w-sm bg-red-500 text-white px-4 py-4 rounded-md shadow-md overflow-hidden transform transition-transform duration-500 ease-in-out translate-x-full"
            :class="{ 'translate-x-0': show, 'translate-x-full': !show }" @click.away="show = false">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6 mr-2" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-semibold">{{ __('Whoops! Something went wrong.') }}</span>
                </div>
                <button @click="show = false" class="text-white hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <ul class="mt-4 list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
