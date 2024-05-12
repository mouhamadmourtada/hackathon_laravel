<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit users') }}
        </h2>
    </x-slot>

    <div class="flex mb-4 text-sm font-bold">
        <p>
            <a href="{{route("admin.users.index")}}"  class="text-maquette-gris">Liste des catégories</a>
        </p>
        <span class="mx-2 text-maquette-gris">/</span>
        <p class="text-secondaire">Edition d'une catégorie</p>
    </div>

    <div class="bg-white shadow rounded-sm w-full">
        

    </div>


</x-app-layout>