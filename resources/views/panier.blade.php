@extends('layouts.default')

@section('main')

            <!-- TABLEAU RECAPITULATIF DES ACHATS - STATIQUE UNIQUMENT / NON FONCTIONNEL-->
        <div class="tableau_panier">
        
            <p>
            <h1>Récapitulatif des achats</h1>
            </p>
        </div>

        <div>

            <table>

                <tr>
                <th>Nom du produit</th>
                <th>Quantité</th>
                <th>Prix</th>
                </tr>

                <tr>
                    <th>Produit 1</th>
                    <th>2</th>
                    <th>2430 €</th>
                    <th><img class="croix" src="croix.png" alt="Annuler"</th>
                </tr>

                <tr>
                    <th>Produit 2</th>
                    <th>1</th>
                    <th>550€</th>
                    <th><img class="croix" src="croix.png" alt="Annuler"</th>
                </tr>

                <tr>
                    <th>Produit 3</th>
                    <th>1</th>
                    <th>749€</th>
                    <th><img class="croix" src="croix.png" alt="Annuler"</th>
                </tr>
            </table>

        </div>
    </body>
</html>

@endsection