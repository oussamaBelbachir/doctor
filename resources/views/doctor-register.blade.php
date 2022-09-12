@extends("./layouts/main1")

@section('subhead')
    <title>Espace Professionnel</title>
 
@endsection

@section("content")
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
        <div class="signup  grid grid-cols-12 gap-20 p-4 container">
        <div class="col-span-6 flex">
            <div class="flex justify-center items-center">
            <img src={{asset("assets/images/doctors.jpg")}} alt="">
            </div>
        </div>
        <div class="col-span-6  flex items-center justify-center">
            <div class="w-full">
                <h1 class="text-center capitalize text-2xl text-sky-700 font-normal mb-6">Espace Professionnel</h1>
                <div>
                    <form method="POST" action={{route("doctor.register")}}>
                    @csrf

                    <x-input id="first_name" label="prénom" placeholder="" required autofocus/>
                    <x-input id="last_name" label="nom" placeholder=""/>
                    <x-input id="email" label="email" placeholder=""/>
                    <!-- <x-select_options  :a="$specialities" id="specialite" label="spécialtés" placeholder="" options/> -->


                    <label class="block mb-2 capitalize font-medium text-sm" for="specialities">
                Spécialités
            </label>
            <select name="" id="" class="w-full p-2 border-stone-500 mb-3 rounded-sm">
                <option value="h"></option>
            </select>

                    <x-input id="phone" label="Numéro de Téléphone" placeholder="0652-987744"/>
                    <x-input id="password" label="mot de passe" placeholder="" type="password"/>
                    <x-input id="password_confirmation" label="confirmation de mot de passe" type="password" placeholder=""/>
                        <button class=" main-btn gradient-btn gradient-btn-2 block text-center mt-8 w-full" data-scroll-nav="0" href="#" rel="nofollow">Créer mon compte</button>


                    </form>
                </div>
            </div>

        </div>
    </div>

 
@endsection
