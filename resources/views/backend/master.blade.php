<!DOCTYPE html>
<html lang="en">
    <head>
        @php
        $title = App\Models\Title::latest()->first();
        @endphp
    <title>{{optional($title)->title}}</title>
        @include('backend.fixed.style')
    </head>
    <body class="sb-nav-fixed">


            <!-- Header -->
            <livewire:header/>


        <div id="layoutSidenav">

           <!-- Sidebar -->
            <livewire:sidebar/>

            <div id="layoutSidenav_content">

                <main>


            @yield('content')
            @include('sweetalert::alert')
                </main>

            <!-- Footer -->
            <livewire:footer/>



            </div>
        </div>

        <!-- Script -->
        @include('backend.fixed.script')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </body>
</html>
