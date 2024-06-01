<x-guest-layout>
    <x-auth-card>
        <div class="grid md:grid-cols-2 items-center gap-10 max-w-6xl w-full">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <div class="max-md:text-center">
                <h2 class="lg:text-5xl text-4xl font-extrabold lg:leading-[55px]">
                    Seamless Login for Exclusive Access
                </h2>
                <p class="text-sm mt-6">Immerse yourself in a hassle-free login journey with our intuitively designed
                    login form. Effortlessly access your account.</p>
                <p class="text-sm mt-10">Don't have an account <a href="{{ route('register') }}"
                        class="text-blue-600 font-semibold hover:underline ml-1">Register here</a></p>
            </div>
            <form class="space-y-6 max-w-md md:ml-auto max-md:mx-auto w-full" method="POST"
                action="{{ route('login') }}">
                @csrf
                <h3 class="text-3xl font-extrabold mb-8 max-md:text-center">
                    Sign in
                </h3>

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                        <label for="remember-me" class="ml-3 block text-sm">
                            {{ __('Remember me') }}
                        </label>
                    </div>
                    <div class="text-sm">
                        @if (Route::has('password.request'))
                            <a class="text-blue-600 hover:text-blue-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>


                <div class="!mt-10">
                    <x-button>
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
