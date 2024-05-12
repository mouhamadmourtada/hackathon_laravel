<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des produits') }}
        </h2>
    </x-slot>

    <div class="flex mb-4 text-sm font-bold">
        <p>
            <a href="{{route("produits.index")}}"  class="text-maquette-gris">Liste des produits</a>
        </p>
        <span class="mx-2 text-maquette-gris">/</span>
        <p class="text-first-orange">Détail produits</p>
    </div>

    <div class="container py-2 rounded">
        show produits  
    </div>


</x-app-layout>