<!DOCTYPE html>
<html lang="en">
    <head>
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

    </body>
</html>
