@extends("./layouts/main1")

@section('subhead')
    <title>Espace Professionnel</title>
@endsection

@section("content")
    <div class="signup  grid grid-cols-12 gap-20 p-4 container">
        <div class="col-span-6 flex">
            <img src={{asset("assets/images/login.svg")}} alt="">
        </div>
        <div class="col-span-6  flex items-center justify-center">
            <div class="w-full">
                <h1 class="text-center uppercase text-2xl text-sky-700 font-normal mb-6">Inscription</h1>
                <div>
                    <form method="POST" action={{route("register")}}>
                    @csrf

                    <x-input id="first_name" label="prénom" placeholder="" required autofocus/>
                    <x-input id="last_name" label="nom" placeholder=""/>
                    <x-input id="email" label="email" placeholder=""/>
                    <x-input id="phone" label="Numéro de Téléphone" placeholder="0652-987744"/>
                    <x-input id="password" label="mot de passe" placeholder="" type="password"/>
                    <x-input id="password_confirmation" label="confirmation de mot de passe" type="password" placeholder=""/>
                    <a href={{route("login")}}>Déjà inscrit ?<span class="pl-1 text-sky-500 font-semibold">Connectez-vous</span> </a>
                        <button class=" main-btn gradient-btn gradient-btn-2 block text-center mt-8 w-full" data-scroll-nav="0" href="#" rel="nofollow">Créer mon compte</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection





