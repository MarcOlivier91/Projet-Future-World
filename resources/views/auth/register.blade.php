<x-guest-layout>
    <x-auth-card>
        <link rel="stylesheet" href="style.css">
        <x-slot name="logo">
        </x-slot>



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

        <form method="POST" action="{{ route('register') }}" class="register">
            @csrf

            <!-- Titre --><!-- Validation Errors -->

            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <h1>Inscrivez-vous</h1>

            <!-- First Name -->
            <div>
                <input type="text" name="name" :value="old('Prénom')" placeholder="Prénom" required autofocus />
            </div>
        
            <!-- Last Name -->
            <div>
                <input type="text" name="Nom de Famille" :value="old('Nom de Famille')" placeholder="Nom de Famille" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <input type="email" name="email" :value="old('email')" placeholder="Email" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <input type="password" name="password" placeholder="Mot de Passe"
                    required autocomplete="new-password"/>

            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <input type="password" name="password_confirmation" placeholder="Confirmer Mot de Passe"
                    required />

            </div>
                
                <input type="submit" name="" value="S'inscrire">


                <div class="flex items-center justify-end mt-4">
                <a href="{{ route('login') }}">
                    {{ __('Déjà un compte ?') }}
                </a>

            </div>

        </form>

    </x-auth-card>
</x-guest-layout>
