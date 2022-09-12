@extends("./layouts/main1")

@section('subhead')
    <title>Espace Professionnel</title>
@endsection

@section("content")
    <div class="login  grid grid-cols-12 gap-20 p-4 container">
        <div class="col-span-6  flex items-center justify-center flex-col">
            <img src={{asset("assets/images/login.svg")}} alt="">

        </div>
        <div class="col-span-6  flex items-center justify-center">
            <div class="w-full">
                <h1 class="text-center uppercase text-2xl text-sky-700 font-normal mb-6">mon compte</h1>
                <div>
                    <form method="POST" action={{route("login")}}>
                    @csrf
                    <x-input id="email" label="email" placeholder="" type="email" required/>
                    <x-input id="password" label="mot de passe" placeholder="" type="password" required/>
                    <div class="mt-2 text-right text-sm text-main-auth font-normal"><a href="#">Mot de passe oublié ?</a></div>
                    <div class="flex items-center mt-6">
                        <button type="submit" class=" main-btn gradient-btn gradient-btn-2 block text-center  w-full" data-scroll-nav="0" href="#" rel="nofollow">Se connecter</button>
                        <a href={{route("register")}} class="block ml-5 main-btn  gradient-btn gradient-btn-2 text-center  w-full" data-scroll-nav="0" href="#" rel="nofollow" >Inscription</a>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection



