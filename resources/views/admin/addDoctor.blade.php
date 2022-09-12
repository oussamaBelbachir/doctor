@extends("../layouts/master")

@section("head")
    <title>Ajouter un docteur</title>
@endsection

@section("subcontent")

<x-title class="mx-auto mt-16 mb-10 intro-x">Ajouter un docteur</x-title>

<div class=" flex items-center justify-center max-w-5xl mx-auto intro-y">
    <div class="mr-20 max-w-md">
        <img src={{asset("dist/images/doctor.jpg")}} alt="">
    </div>
    <div class=" max-w-lg mx-auto flex-1 ">
        <form id="doctor-submit" action={{route("admin.addDoctor")}} class=" mt-10" method="POST">
        @csrf
            <x-input id="first_name" label="Prénom" required autofocus/>
            <x-input id="last_name" label="Nom" required/>
            <x-input id="email" label="Email" required type="email"/>
            <x-input id="phone" label="Numéro de téléphone" required/>


            <label class="block mb-2 capitalize font-medium text-sm" for="specialities">
                Spécialités
            </label>
            <select
                id="specialities"
                name="specialities[]"

                data-placeholder="veuillez choisir les spécialités"
                data-header=""
                class="tom-select w-full focus:bg-red-500" multiple="multiple">
                @foreach($specialities as $item)
                <option value={{$item->id}}>{{$item->name}}</option>
                @endforeach
            </select>

            <button  class="main-btn mt-6">ajouter</button>
        </form>
    </div>
</div>




@endsection
