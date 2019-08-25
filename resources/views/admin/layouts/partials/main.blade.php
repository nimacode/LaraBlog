<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

    @include('admin.layouts.partials.topbar')

    <!-- Begin Page Content -->
        <div class="container-fluid">

        @include('admin.layouts.partials.page-header')

            @yield('content')

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    @include('admin.layouts.partials.footer')
</div>
<!-- End of Content Wrapper -->
