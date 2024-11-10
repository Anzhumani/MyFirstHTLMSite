<!DOCTYPE html>
<html lang="en">

<x-head headTitle='{{ $headTitle }}'/>

<body>
    <main class="page-wrapper rbt-dashboard-page">
        <div class="rbt-panel-wrapper">

            <!-- start header -->
            <x-header toggle="{{ isset($toggle) ? $toggle : 'false' }}"/>
            <!-- End  header -->

            <!-- start mobilemenu -->
            <x-mobilemenu />
            <!-- End  mobilemenu -->

            <!-- Imroz Preloader -->
            <x-preloader />

            <!-- Start Left panel -->
            <x-Leftpanel />
            <!-- End Left panel -->

            @yield('content')

            <!--back to top -->
            <x-backtotop />

        </div>

    </main>

    <!-- start script -->
    <x-script />
    <!-- End  script -->

</body>

</html>