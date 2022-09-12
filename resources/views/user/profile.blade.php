@extends("../layouts/master")

@section("head")
    <title>Profile</title>
@endsection

@section("subcontent")
 
<div>
    
    <h2 class="text-lg font-medium truncate mr-5 capitalize p-5">informations personnelles</h2>
    <div class="br mb-8"></div>
    <div class="w-fit mx-auto text-center">
        <div class="mx-auto w-20 h-20 rounded-full overflow-hidden bg-red-50">
            <img src="https://www.commeuncamion.com/content/uploads/2014/05/forme-visage-coiffure-carr.jpg" alt="">
         
        </div>
        <div class="mt-3">
            <span class=" capitalize font-medium text-base">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span> 
        </div>
    </div>


    <div class=" max-w-lg mx-auto mt-8">
        <form>
                        @csrf
                    
                        <x-input value="{{Auth::user()->first_name}}" id="first_name" label="prénom" placeholder="" required />
                        <x-input value="{{Auth::user()->last_name}}" id="last_name" label="nom" placeholder=""/>
                        <x-input value="{{Auth::user()->email}}" disabled id="email" label="email" placeholder=""/>
                        <x-input value="{{Auth::user()->phone}}" id="phone" label="Numéro de Téléphone" placeholder="0652-987744"/>
                       
                        <button class=" main-btn gradient-btn gradient-btn-2 block text-center mt-8 w-full" data-scroll-nav="0" href="#" rel="nofollow">Modifier</button>
        </form>
    </div>


    <h2 class="text-lg font-medium truncate mr-5 capitalize p-5">changer le mot de passe</h2>
    <div class="br mb-8"></div>

    <div class=" max-w-lg mx-auto mt-8">
        <form>
                        @csrf
                        <x-input id="first_name" label="Mot de passe actuel" placeholder="" required />
                        <x-input  id="last_name" label="Nouveau mot de passe" placeholder=""/>
                        <x-input id="phone" label="Confirmation du mot de passe"/>
                       
                        <button class=" main-btn gradient-btn gradient-btn-2 block text-center mt-8 w-full" data-scroll-nav="0" href="#" rel="nofollow">Modifier</button>
        </form>
    </div>
</div>

@endsection
