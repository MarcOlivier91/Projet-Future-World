@extends('layouts.default')

@section('main')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <select name="categorie" id="categorie">
            <option value="">--Choisir une catégorie--</option>
            <option value="Processeur">Processeur</option>
            <option value="Carte Graphique">Carte Graphique</option>
            <option value="Ordinateur de Bureau">Ordinateur de Bureau</option>
        </select><br>

        <input type="text" placeholder="Marque du produit" name="marque"><br>

        <input type="text" placeholder="Nom du produit" name="nom"><br>

        <input type="file"
            id="img" name="image"
            accept="image.png, image.jpeg, image.jpg"><br>

        <textarea placeholder="Description" name="description" cols="20" rows="15"></textarea><br>

        <input type="text" placeholder="Prix" name="prix"><br>

        <input type="text" placeholder="Quantite" name="quantite"><br>

        <button> Publier le produit</button>

    </form>

@endsection