<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrasi') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 container">

                    {{-- Start regis form --}}
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Username -->
                        <div>
                            <x-input-label for="username" :value="__('Username')" />
                            <x-text-input id="username" class="block mt-1 w-1/3" type="text" username="username" :value="old('username')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>

                        <!-- Fullname -->
                        <div class="mt-4">
                            <x-input-label for="fullname" :value="__('Fullname')" />
                            <x-text-input id="fullname" class="block mt-1 w-1/3" type="text" username="fullname" :value="old('fullname')" required autofocus autocomplete="fullname" />
                            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-1/3" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-1/3"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-1/3"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <!-- Alamat -->
                        <div class="mt-4">
                            <x-input-label for="alamat" :value="__('Alamat')" />
                            <x-text-input id="alamat" class="block mt-1 w-1/3" type="text" username="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" />
                            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                        </div>
                        
                        <!-- Birthdate -->
                        <div class="mt-4">
                            <x-input-label for="birthdate" :value="__('Birthdate')" />
                            <x-text-input id="birthdate" class="block mt-1 w-1/3" type="date" username="birthdate" :value="old('birthdate')" required autofocus autocomplete="birthdate" />
                            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                        </div>

                        <!-- No Telepon -->
                        <div class="mt-4">
                            <x-input-label for="phoneNumber" :value="__('PhoneNumber')" />
                            <x-text-input id="phoneNumber" class="block mt-1 w-1/3" type="text" username="phoneNumber" :value="old('phoneNumber')" required autofocus autocomplete="phoneNumber" />
                            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
                        </div>

                        <!-- Agama -->
                        <div class="mt-4">
                            <x-input-label for="agama" :value="__('Agama')" />
                            <x-text-input id="agama" class="block mt-1 w-1/3" type="text" username="agama" :value="old('agama')" required autofocus autocomplete="agama" />
                            <x-input-error :messages="$errors->get('agama')" class="mt-2" />
                        </div>

                        <!-- Gender -->
                        <div class="mt-4">
                            <x-input-label for="gender" :value="__('Gender')" />
                            <x-text-input id="gender" class="block mt-1 w-1/3" type="number" username="gender" :value="old('gender')" required autofocus autocomplete="gender" />
                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-primary-button class="ml-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                    {{-- End resgis form --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
