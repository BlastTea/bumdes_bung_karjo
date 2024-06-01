<x-guest-layout>
    <x-auth-card>
        <div class="grid md:grid-cols-2 items-center gap-10 max-w-6xl w-full">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <div class="max-md:text-center">
                <div class="text-center lg:text-left">
                    <h2 class="lg:text-5xl text-4xl font-extrabold lg:leading-tight leading-snug text-gray-900">
                        Seamless Create Account for Exclusive Access
                    </h2>
                    <p class="text-base mt-6 text-gray-700">
                        Immerse yourself in a hassle-free login journey with our intuitively designed login form.
                        Effortlessly access your account.
                    </p>
                    <p class="text-base mt-2 text-gray-700">
                        Already registered? <a href="{{ route('login') }}"
                            class="text-blue-600 font-semibold hover:underline ml-1">{{ __('Login here') }}</a>
                    </p>
                </div>
            </div>

            <form method="POST" action="{{ route('register') }}"
                class="space-y-6 max-w-md md:ml-auto max-md:mx-auto w-full">
                @csrf

                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
