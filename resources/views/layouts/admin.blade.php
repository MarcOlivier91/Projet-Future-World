@extends('layouts.default')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    

    @section('main')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4>T'es loggé en admin beau gosse, tu fais parti de l'élite de la nation</h4><br> 

                    <h4><a href={{ url('/product/create') }}>Formulaire d'ajout de produit</a></h4>
                    <h4><a href={{ url('/product') }}>Voir les produits ajoutés disponibles</a></h4>        
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
@endsection