<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des Demandes') }}
        </h2>
    </x-slot>

    <div class="flex mb-4 text-sm font-bold">
        <p>
            <a href="{{route("categories.index")}}"  class="text-maquette-gris">Liste des catégories</a>
        </p>
        <span class="mx-2 text-maquette-gris">/</span>
        <p class="text-first-orange">Détail catégorie</p>
    </div>
    <div class="container py-2 rounded">
        {{-- <livewire:demandes.liste-demande/> --}}
        show
    </div>


</x-app-layout>