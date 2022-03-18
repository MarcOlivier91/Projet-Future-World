<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    
      @yield('css')
    <title>Future World</title>
  </head>

<body>
    
  <!-- Header du site -->
    <div class= "navbar">
        <div class= "topnav">   
          <ul>
            <li><a class="nav" href="/">Accueil</a></li>
            <li><a href="login">Connexion</a></li>
            <li><a href="{{ url('product') }}">Catalogue</a></li>
            <li><a href="panier">Panier</a></li>
            <img src="images/utilisateur_icon.png" alt="Utilisateur" width="15px" height="15px">
            <li><a><div class="username">

        <!-- Fonction pour vérifier l'authentification.
          Si l'utilisateur est authentifié, cela va afficher son nom
            avec son rôle-->

            @auth
              {{Auth::user()->name}} as {{Auth::user()->role}}
                  @if( Auth::user()->role == 'admin')
                  
                  @endif
                @else
            @endauth
            <li><a id="nb_articles" href="panier"></a> </li>
            </div>
            </a>
          </li>
          </ul>
        </div>
      </div>

      <!-- Contenu du site. Le contenu s'affichera ici -->
    <main>
        @yield('main')
    </main>
    <aside>
      <h2>Offres et Services</h2>
        <ul>
          <li><a href="https://www.backmarket.fr/">Seconde main</a></li>
          <li><a href="produit.html">Accessoires</a></li>
          <li><a href="Header.html">Réparations</a></li>
          <li><a href="https://c.tenor.com/2K0JKY8UAQ8AAAAd/laughing.gif">Retour et remboursement</a></li>
          <li><a href="https://www.laposte.fr/outils/suivre-vos-envois">Suivi de commande</a></li>
        </ul>
    </aside>
</main>

  <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
  <footer>
    <div class="copyR">
      <p>Future<i class="fas fa-laptop-code"></i>World</p><p>©Copyright. Tous droits reservés.</p><p> Mentions légales </p>
        </div>
        <div class="logo2">
        <a href="https://twitter.com"><img src="images/twitter.png" title="twitter" alt="lien twitter"></a>
        <a href="https://facebook.com"><img src="images/facebook.png" title="facebook" alt="lien facebook"></a>
      </div>
    </footer>
    
  </body>
  <script src="{{asset('js/script.js') }}"></script>
  <script src="{{asset('js/panier.js') }}"></script>
</html>