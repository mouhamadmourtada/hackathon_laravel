<x-guest-layout>
    {{-- <img class="h-40" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fparissecret.com%2Fmeilleurs-restaurants-africains%2F&psig=AOvVaw1kW4pHwZLOb2xUYLD2XMPA&ust=1715566767149000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCKjjq7SGh4YDFQAAAAAdAAAAABAE" alt="" srcset=""> --}}
    <div class="bg-secondaire min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-side bg-center bg-cover bg-no-repeat">
        <div class="w-full sm:w-2/3 lg:w-1/2 mx-auto">
            <div class="flex flex-col sm:flex-row">
                <div class="bg-white p-4 shadow-md flex-1 flex flex-col justify-center items-center md:border-r border-gray-600">
                    {{-- <img id="image0_2_2864" width="102" height="70" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.kalae.com%2Ffr_FR%2Fblog%2Fcategorie%2Falimentation-et-dietetique&psig=AOvVaw2IWX_V4yV6fMWmSpnb5Pd0&ust=1715564958443000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCICP3Nb_hoYDFQAAAAAdAAAAABAP" /> --}}
                    <h2 class="text-first-orange font-semibold text-center">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, rem in consectetur odit, error nesciunt similique architecto sint dolorem veritatis officiis commodi voluptatibus quod totam suscipit temporibus nisi consequuntur velit?
                    </h2>
                </div>
                <!-- Deuxième colonne -->
                <div class="bg-white p-4 shadow-md flex-1">
                    <x-authentication-card>
                        <x-slot name="logo">
                        </x-slot>

                        <x-validation-errors class="mb-4" />

                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="text-center">
                            <span class="text-first-orange text-3xl font-black">Connexion</span>
                            <br>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password" value="{{ __('Mot de passe') }}" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="flex items-center justify-between mt-4">
                                <div class="block">
                                    <label for="remember_me" class="flex items-center">
                                        <x-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Se rappeler de moi') }}</span>
                                    </label>
                                </div>

                                <div class="block">
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="bg-first-orange text-white font-bold py-3 px-4 rounded-md w-full text-sm">
                                    Se connecter
                                </button>
                            </div>
                        </form>
                    </x-authentication-card>
                </div>
            </div>
        </div>
       <span class="md:pt-24 text-white text-sm font-medium">Copyright@KGM_CONSULTING</span>
    </div>
</x-guest-layout>