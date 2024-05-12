<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste users') }}
        </h2>
    </x-slot>

    <div class="flex mb-4 text-sm font-bold">
        {{-- <p>
            <a href="{{route("admin.users.index")}}"  class="text-maquette-gris">Liste des catégories</a>
        </p>
        <span class="mx-2 text-maquette-gris">/</span>
        <p class="text-secondaire">Edition d'une catégorie</p> --}}
    </div>

    <div class="shadow rounded-sm w-full">
        <div class="flex justify-between items-center">
            <p class="font-bold py-2 m-4 text-secondaire text-xl">Utilisateur</p>

            <div class="flex justify-end m-4 bg-secondaire hover:bg-white  text-white hover:text-secondaire hover:border hover:border-secondaire font-bold py-2 px-4 rounded items-center">
                <a href="{{ route('admin.users.create') }}" class="mr-2 text-sm">
                    Nouvel utilisateur
                </a>
                <svg height="1em" viewBox="0 0 448 512" >
                    <path fill="white" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                </svg>
            </div>

        </div>
        <table class="w-full bg-white" >
            <thead class="">
                <tr class="bg-first-orange text-white rounded">
                    <th class="py-2">Nom</th>
                    <th class="py-2">Prénom</th>
                    <th class="py-2">Email</th>
                    <th class="py-2">Role</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($users as $user)
                    <tr class="border-b border-gray-200">
                        <td class="py-2">{{$user->nom}}</td>
                        <td class="py-2">{{$user->prenom}}</td>
                        <td class="py-2">{{$user->email}}</td>
                        <td class="py-2">{{$user->role}}</td>
                        <td class="py-2">
                            <a href="{{route("admin.users.edit", $user->id)}}" class="text-first-orange">Editer</a>
                            <form action="{{route("admin.users.destroy", $user->id)}}" method="POST" class="inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="text-first-orange">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>


</x-app-layout>