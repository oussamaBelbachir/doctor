@extends("../layouts/master")

@section("head")
    <title>Liste des spécialités</title>
@endsection


@section("subcontent")

<!-- BEGIN: Weekly Top Products -->
<div class="col-span-12 mt-6">
<div class="intro-y block sm:flex ">
    <div>
        <h2 class="text-lg font-medium truncate mr-5 mb-3">
            Liste des spécialités
        </h2>
        <div class="my-2 hidden sm:block">
            <a href={{route("admin.addDoctor")}} class=" bg-blue-800 btn box flex items-center text-slate-50 dark:text-slate-300 mr-3"> <i data-feather="plus" class="hidden sm:block w-4 h-4 mr-2"></i> Ajouter une spécialités </a>
        </div>

    </div>
    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">

        <div class="sm:hidden">
            <a href={{route("admin.addDoctor")}} class=" bg-blue-800 btn box flex items-center text-slate-50 dark:text-slate-300 mr-3"> <i data-feather="plus" class="hidden sm:block w-4 h-4 mr-2"></i> Ajouter une spécialités </a>
        </div>


        <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
        <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
    </div>
</div>
<div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
    <table class="table full table-report mx-auto sm:mt-2">
        <thead>
            <tr>
                <th class="whitespace-nowrap"><span  class="pl-2">Nom</span> </th>
                <th class="text-center whitespace-nowrap">Actions</th>
            </tr>
        </thead>
        <tbody>

        @foreach($specialities as $item)
            
            <tr class="intro-x">
                <td>
                    <div class=" w-48 pl-2 capitalize font-medium">{{$item->name}}</div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Modifier </a>
                        <a class="flex items-center text-danger" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Supprimer </a>
                    </div>
                </td>
            </tr>
        @endforeach



        </tbody>
    </table>
</div>
 
</div>
<!-- END: Weekly Top Products -->
@endsection