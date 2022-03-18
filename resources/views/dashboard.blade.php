<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
            <li><a class="nav" href="/">Accueil</a></li>
            <li><a href="login">Connexion</a></li>
            <li><a href="{{ url('product') }}">Catalogue</a></li>
            <li><a href="panier">Panier</a></li>
            <div class="username">
                @auth
                    @if( Auth::user()->role == 'admin')
                    <li><a href="admin">Page admin</a></li>
                    @endif
                  @else
              @endauth
              </div>
            </li>
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    T'es connecté, bienvenue
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
