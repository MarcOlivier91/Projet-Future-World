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

        <form method="POST" action="{{ route('login') }}" class="login">
            @csrf

            <h1>Connectez-vous</h1>
            <!-- Validation Errors-->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <!-- Email Address -->
            <div>
                <input type="email" name="email" placeholder="Email" 
                        :value="old('email')" 
                        required autofocus />

            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" :value="__('Password')" />

                <input type="password" name="password" placeholder="Mot de Passe"
                                required autocomplete="current-password" />

            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se rappeler de moi') }}</span>
                </label>
            </div>                
            
            <!-- Se Connecter -->

            <input type="submit" name="" value="Se Connecter">

            <!-- Pas de Compte -->

            <div class="Pas_de_compte"> 
                
                <h5>Pas de compte ? <a href="register"><u> Inscrivez-vous !</u> </a></h5>

            </div>

            <!-- Mot de Passe Oublié -->

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <h5><a href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                    </h5>
                @endif


            </div>
        </form>


    </x-auth-card>
</x-guest-layout>
