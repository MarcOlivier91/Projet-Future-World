@extends('layouts.default')


@section('css')
    <link rel="stylesheet" href="style.css">
    
@stop

@section('main')

<h2> Liste des produits ajoutés : </h2>

    <div class="container_produit">
    @foreach ($products as $product)
        <div class="blocproduit">
            <h5>
                <!-- La fonction va chercher dans la base de données la contenu de la table selon l'id et l'afficher-->
                Marque : {{ $product->marque }}
            </h5>
            
                <p>{{ $product->nom }}</p>
                <br>
                <p>Catégorie : {{ $product->categorie }}</p>
                <br>
                <p>Description : {{ $product->description }}</p>
                <br>
                <p>Prix : {{ $product->prix }}€</p>
                <br>
                <p>Quantité restante : {{ $product->quantite }}</p>
                <br>
                <center><input type="submit" name="" onclick="Achat({{ $product->id }})" value="Ajouter au panier"></center><br>
                <center><a href="panier"><input type="submit" name="" value="Achat Direct" ></a></center><br>

                @auth
                    @if( Auth::user()->role == 'admin')
                    <center><a href="{{ route('product.edit', $product->id) }}"><input type="submit" name="" value="Editer le produit"></a></center><br>
                    <center>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button title="Supression">Supprimer le produit</button>
                        </form>
                    </center><br>
                    @else
                    @endif
                    @else

                @endauth

        </div>
        
    @endforeach
    </div>
    
@stop