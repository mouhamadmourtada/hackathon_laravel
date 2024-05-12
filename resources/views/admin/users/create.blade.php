<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste users') }}
        </h2>
    </x-slot>

    <div class="flex mb-4 text-sm font-bold">
        <p>
            <a href="{{route("admin.users.index")}}"  class="text-maquette-gris">Liste des utilisateurs</a>
        </p>
        <span class="mx-2 text-maquette-gris">/</span>
        <p class="text-secondaire">Ajout d'un nouveau utilisateur</p>
    </div>

    <div class="container py-2 rounded">
        <div class="w-full mx-auto max-w-7xl">
            <form action="{{ route('admin.users.store') }}" method="POST" class="bg-white border-x-2 rounded px-8 pt-6 pb-8 mb-4">
                @csrf


                <div class="flex flex-wrap w-full justify-evenly grid grid-cols-2 gap-2">
                    <div class="flex-grow mb-4 mr-2">
                        <x-label for="nom">
                            Nom <span class="text-red-500">*</span>
                        </x-label>
                        <x-input id="nom" class="block w-full focus:border-secondaire enlever_shadow rounded px-2 py-0.75 shadow-first-orange text-sm border-2 " type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                        @error('nom')
                            <span class="text-xs text-red-500">
                                {{$message}}

                            </span>
                        @enderror
                    </div> 
                    {{-- nom --}}
                    <div class="flex-grow mb-4 mr-2">
                        <x-label for="prenom">
                            Prenom <span class="text-red-500">*</span>
                        </x-label>
                        <x-input id="prenom" class="block w-full focus:border-secondaire enlever_shadow rounded px-2 py-0.75 shadow-first-orange text-sm border-2 " type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
                        @error('prenom')
                            <span class="text-xs text-red-500">
                                {{$message}}

                            </span>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="flex-grow mb-4 mr-2">
                        <x-label for="email">
                            Email <span class="text-red-500">*</span>
                        </x-label>
                        <x-input id="email" class="block w-full focus:border-secondaire enlever_shadow rounded px-2 py-0.75 shadow-first-orange text-sm border-2 " type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        @error('email')
                            <span class="text-xs text-red-500">
                                {{$message}}

                            </span>
                        @enderror
                    </div>

                    {{-- phone --}}
                    <div class="flex-grow mb-4 mr-2">
                        <x-label for="numTelephone">
                            Tel  <span class="text-red-500">*</span>
                        </x-label>
                        <x-input id="numTelephone" class="block w-full focus:border-secondaire enlever_shadow rounded px-2 py-0.75 shadow-first-orange text-sm border-2 " type="number" name="numTelephone" :value="old('numTelephone')" required autofocus autocomplete="numTelephone" />
                        @error('numTelephone')
                            <span class="text-xs text-red-500">
                                {{$message}}
    
                            </span>
                        @enderror
                    </div>

                    {{-- date naissane --}}
                    <div class="flex-grow mb-4 mr-2">
                        <x-label for="dateNaissane">
                            Date Naissane <span class="text-red-500">*</span>
                        </x-label>
                        <x-input id="dateNaissane" class="block w-full focus:border-secondaire enlever_shadow rounded px-2 py-0.75 shadow-first-orange text-sm border-2 " type="date" name="dateNaissane" :value="old('dateNaissane')"/>
                        @error('dateNaissane')
                            <span class="text-xs text-red-500">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                    
                    {{-- adresse --}}
                    <div class="flex-grow mb-4 mr-2">
                        <x-label for="adresse">
                            Adresse <span class="text-red-500"></span>
                        </x-label>
                        <x-input id="adresse" class="block w-full focus:border-secondaire enlever_shadow rounded px-2 py-0.75 shadow-first-orange text-sm border-2 " type="text" name="adresse" :value="old('adresse')" autofocus autocomplete="adresse" />
                        @error('adresse')
                            <span class="text-xs text-red-500">
                                {{$message}}

                            </span>
                        @enderror
                    </div>
                    
                    {{-- sexe --}}
                    <div class="mb-4">
                        <x-label for="sexe">
                            Sexe <span class="text-red-500"></span>
                        </x-label>
                        <select id="sexe" name="sexe" class="block w-full focus:border-secondaire enlever_shadow rounded px-2 py-0.75 shadow-first-orange text-sm border-2">
                            <option value="">Sélectionner le sexe</option>
                            <option value="m">Masculin</option>
                            <option value="f">Féminin</option>
                        </select>
                        @error('sexe')
                            <span class="text-xs text-red-500">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

              <div class="flex items-center justify-end">
                <button class="items-center flex bg-secondaire hover:bg-white hover:text-secondaire hover:border-secondaire hover:border  text-white text-sm py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.6979 6.55208L12.4479 0.302083C12.3519 0.208384 12.2387 0.134107 12.1146 0.0833333C11.9854 0.030851 11.8477 0.00260216 11.7083 0H3.375C2.5462 0 1.75134 0.32924 1.16529 0.915291C0.57924 1.50134 0.25 2.2962 0.25 3.125V15.625C0.25 16.4538 0.57924 17.2487 1.16529 17.8347C1.75134 18.4208 2.5462 18.75 3.375 18.75H15.875C16.7038 18.75 17.4987 18.4208 18.0847 17.8347C18.6708 17.2487 19 16.4538 19 15.625V7.29167C19.0008 7.15458 18.9745 7.01868 18.9227 6.89176C18.8708 6.76485 18.7945 6.64942 18.6979 6.55208ZM6.5 2.08333H10.6667V4.16667H6.5V2.08333ZM12.75 16.6667H6.5V13.5417C6.5 13.2654 6.60975 13.0004 6.8051 12.8051C7.00045 12.6097 7.2654 12.5 7.54167 12.5H11.7083C11.9846 12.5 12.2496 12.6097 12.4449 12.8051C12.6403 13.0004 12.75 13.2654 12.75 13.5417V16.6667ZM16.9167 15.625C16.9167 15.9013 16.8069 16.1662 16.6116 16.3616C16.4162 16.5569 16.1513 16.6667 15.875 16.6667H14.8333V13.5417C14.8333 12.7129 14.5041 11.918 13.918 11.332C13.332 10.7459 12.5371 10.4167 11.7083 10.4167H7.54167C6.71286 10.4167 5.91801 10.7459 5.33196 11.332C4.74591 11.918 4.41667 12.7129 4.41667 13.5417V16.6667H3.375C3.09873 16.6667 2.83378 16.5569 2.63843 16.3616C2.44308 16.1662 2.33333 15.9013 2.33333 15.625V3.125C2.33333 2.84873 2.44308 2.58378 2.63843 2.38843C2.83378 2.19308 3.09873 2.08333 3.375 2.08333H4.41667V5.20833C4.41667 5.4846 4.52641 5.74955 4.72176 5.9449C4.91711 6.14025 5.18207 6.25 5.45833 6.25H11.7083C11.9846 6.25 12.2496 6.14025 12.4449 5.9449C12.6403 5.74955 12.75 5.4846 12.75 5.20833V3.55208L16.9167 7.71875V15.625Z" fill="white"/>
                    </svg>
                    <span class="ml-2">
                        Créer Utilisateur

                    </span>
                </button>
              </div>

            </form>
        </div>
    </div>


</x-app-layout>