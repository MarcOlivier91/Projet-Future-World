<!DOCTYPE html>
<html>
  <head>
    <body>
    <main>

      <!-- Bienvenue sur la section Navigation -->
    <div class= "navbar">
      <div class= "topnav">   
        <ul>
          <li><a class="nav" href="#home">Home</a></li>


          <li><a href="login">Connexion</a></li>
          
          <li><a href="{{ url('product') }}">Catalogue</a></li>
          <li><a href="panier">Panier</a></li>
          <img src="images/utilisateur_icon.png" alt="Utilisateur" width="15px" height="15px">      
          <li><a><div class="username">

            @auth
              {{Auth::user()->name}} as {{Auth::user()->role}}
                  @if( Auth::user()->role == 'admin')
                  
                  @endif
                @else
            @endauth
            </div>
            </a>
          </li>
        </ul>
      </div>
    </div> 
      <meta charset="utf-8">
      <title>Future World</title>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer" />
  </head>

    <!-- Voici notre en‑tête principale utilisée dans toutes les pages
          de notre site web -->
    <header>

      <h1>Future<i class="fas fa-laptop-code"></i>World</h1>
        <div class="logo">
          <img src="images/robotlogo.png" alt="Image" style="width:10%;height:10%;">
        </div>

    </header>
  
      <!-- Il contient des articles -->
      <article>  

        <h2></i>  L'informatique, le numérique et les technologies futures  </h2>
          <p class="text1">A l'aube de 2030, avec l'aide des « nanorobots » le progrès technologique sera tel qu'il sera possible d'injecter et de véhiculer dans notre système sanguin, ces outils chirurgicaux ! Il aura la mission d'aller chercher des cellules malades, atrophiées, cancéreuses, et de les soigner !</p>
            <div class="futur">
            <img class="futur" src="images/futur.png" alt="Image" style="width:100%; height:15em;">
            </div>

        <div class="nouveauté">

            <h5>Nouveautés</h5>
            <p>Presentation du nouveau MacPro de chez Apple</p>
            <img src="images/macbookpro.png" alt="Image" style="width:360px;height:200px;"><img src="images/macair.png" alt="Image" style="width:360px;height:200px;">
            <p>Présentation du nouveau Microsoft Surface</p>
            <img src="images/Surface7.png" alt="Image" style="width:300px;height:150px;"><img src="images/surface9.png" alt="Image" style="width:360px;height:200px;">
        
          </div>

        <!-- 2eme section background-->
          
        <div class="box">

          <h3>Offres limitées</h3>
          <img src="images/thumb.png" alt="Image" style="width:30%;height:30%;"><a href="produit.html"><img src="images/CG4.png " alt="Image" style="width:20%;height:20%;"></a><img src="images/PC4.png" alt="Image" style="width:20%;height:20%;"><img src="images/thumb.png " alt="Image" style="width:30%;height:30%;">
          <h3>PROFITEZ EN!</h3>

        </div>

        <h4>Une panne ? Ici chez Future<i class="fas fa-laptop-code"></i>World nous vous proposons des solutions !</h4>
        <img src="images/repa1.png" alt="Image" style="width:30%;height:30%;">
        <img src="images/repa.png" alt="Image" style="width:30%;height:30%;"><img src="images/repa2.png" alt="Image" style="width:30%;height:30%;">
      
      </article>

      <!-- Le contenu « à côté » peut aussi être intégré dans le contenu
            principal -->
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
</html>
