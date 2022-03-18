<x-guest-layout>
    <x-auth-card>
        <link rel="stylesheet" href="style.css">
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class= "navbar">
            <div class= "topnav">   
             <ul>
               <li><a class="nav" href="/">Home</a></li>
               <li><a href="login">Connexion</a></li>
               <li><a href="catalogue">Catalogue</a></li>
               <li><a href="panier">Panier</a></li>
               <img src="images/utilisateur_icon.png" alt="Utilisateur" width="15px" height="15px">
               <h6> : Nom d'utilisateur</h6>
             </ul>
           </div>
         </div> 

        <form method="POST" action="{{ route('password.email') }}" class="reset">
            @csrf

            <h1>Réinitialiser le mot de passe</h1>

            <h5> Mot de passe oublié ? Pas de problèmes. Rentrez votre adresse email et nous allons
                vous envoyer un lien qui vous permettra de choisir un nouveau mot de passe.
            </h5>

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <input type="submit" name="" value="Envoyer" required autofocus>

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
