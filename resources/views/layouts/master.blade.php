@extends("../layouts/main2")


@section('content')
        @include("../layouts/components/topmenu")

        <div class="flex overflow-hidden">
            <!-- BEGIN: Side Menu -->
                @include("../layouts/components/sidebar")
            <!-- END: Side Menu -->

            <!-- BEGIN: Content -->
                <div class="content white">
                    @yield('subcontent')
                </div>
            <!-- END: Content -->
        </div>

@endsection
