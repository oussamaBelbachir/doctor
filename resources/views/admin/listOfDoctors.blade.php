@extends("../layouts/master")

@section("head")
    <title>Liste des docteurs</title>
@endsection


@section("subcontent")

                                    <!-- BEGIN: Weekly Top Products -->
                                    <div class="col-span-12 mt-6">
                                    <div class="intro-y block sm:flex ">
                                        <div>
                                            <h2 class="text-lg font-medium truncate mr-5 mb-3">
                                                Liste des docteurs
                                            </h2>
                                            <div class="my-2 hidden sm:block">
                                                <a href={{route("admin.addDoctor")}} class=" bg-blue-800 btn box flex items-center text-slate-50 dark:text-slate-300 mr-3"> <i data-feather="plus" class="hidden sm:block w-4 h-4 mr-2"></i> Ajouter un docteur </a>
                                            </div>

                                        </div>
                                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">

                                            <div class="sm:hidden">
                                                <a href={{route("admin.addDoctor")}} class=" bg-blue-800 btn box flex items-center text-slate-50 dark:text-slate-300 mr-3"> <i data-feather="plus" class="hidden sm:block w-4 h-4 mr-2"></i> Ajouter un docteur </a>
                                            </div>


                                            <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                                            <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                                        </div>
                                    </div>
                                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                        <table class="table table-report sm:mt-2">
                                            <thead>
                                                <tr>
                                                    <th class="whitespace-nowrap">Docteur</th>
                                                    <th class="whitespace-nowrap">Email</th>
                                                    <th class="whitespace-nowrap">Tél</th>
                                                    <th class="text-center whitespace-nowrap">Spécialité</th>
                                                    <th class="text-center whitespace-nowrap">Status</th>
                                                    <th class="text-center whitespace-nowrap">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($doctors as $doctor)

                                                <x-doctor-item :doctor="$doctor"/>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                                        <nav class="w-full sm:w-auto sm:mr-auto">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                                                </li>
                                                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                                <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <select class="w-20 form-select box mt-3 sm:mt-0">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- END: Weekly Top Products -->
@endsection
