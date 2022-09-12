@extends("../layouts/master")

@section("head")
    <title>Admin Dashboard</title>
@endsection

@section("subcontent")
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Rapport général
                    </h2>
                    <a href="" class="ml-auto flex items-center text-primary"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <x-report-item icon="users" name="Docteurs" number="15"/>
                    <x-report-item icon="calendar" name="Rendez-vous" number="7"/>
                    <x-report-item icon="user" name="Patients" number="10"/>
                    <x-report-item icon="dollar-sign" name="Revenu" number="326 $"/>
                </div>
            </div>
            <!-- END: General Report -->

        </div>
    </div>


@endsection
