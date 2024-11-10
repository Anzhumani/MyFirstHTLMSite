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
            <x-mobilemenu/>
            <!-- End  mobilemenu -->

            <!-- Imroz Preloader -->
            <x-preloader/>
            <!-- End Preloader -->

            <!-- Start Left panel -->
            <x-Leftpanel/>
            <!-- End Left panel -->

            @yield('content')

            <!--New Chat Section Modal HTML -->
            <x-newchatModal/>

            <!--Like Section Modal HTML -->
            <x-likemodal/>

            <!--DisLike Section Modal HTML -->
            <x-dislikemodal/>

            <!--Share Section Modal HTML -->
            <x-sharemodal/>

            <!--back to top -->
            <x-backtotop/>

    </main>

    <!-- start script -->
    <x-script/>
    <!-- End  script -->

</body>

</html>          