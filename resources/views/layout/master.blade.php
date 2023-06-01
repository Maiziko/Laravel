<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Olshop</title>
    <!-- base:css -->
    <link rel="stylesheet" href={{ asset('./template/vendors/typicons.font/font/typicons.css') }}>
    <link rel="stylesheet" href={{ asset('./template/vendors/css/vendor.bundle.base.css') }}>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href={{ asset('./template/css/vertical-layout-light/style.css') }}>
    <!-- endinject -->
    <link rel="shortcut icon" href={{ asset('./template/images/favicon.png') }} />
    @stack('styles')
</head>

<body>
    {{-- <div class="row" id="proBanner">
        <div class="col-12">
            <span class="d-flex align-items-center purchase-popup">
                <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
                <a href="https://www.bootstrapdash.com/product/celestial-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=free-preview"
                    target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
                <i class="typcn typcn-delete-outline" id="bannerClose"></i>
            </span>
        </div>
    </div> --}}
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('partial.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            {{-- <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close typcn typcn-delete-outline"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>
                        Light
                    </div>
                    <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                        Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles primary"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default border"></div>
                    </div>
                </div>
            </div>
            <!-- partial --> --}}
            <!-- partial:partials/_sidebar.html -->
            {{-- Bagian Awal Sidebar --}}
            @include('partial.sidebar')
            <!-- partial -->
            {{-- Content Wrapper --}}
            <div class="main-panel">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6 mt-4">
                                <h1>@yield('title')</h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <section class="content">

                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </section>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            {{-- <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
                            href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com</a>
                        2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Free <a
                            href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard
                        </a>templates from Bootstrapdash.com</span>
                </div>
            </footer> --}}
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src={{ asset('template/vendors/js/vendor.bundle.base.js') }}></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src={{ asset('template/js/off-canvas.js') }}></script>
    <script src={{ asset('template/js/hoverable-collapse.js') }}></script>
    <script src={{ asset('template/js/template.js') }}></script>
    <script src={{ asset('template/js/settings.js') }}></script>
    <script src={{ asset('template/js/todolist.js') }}></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src={{ asset('template/vendors/progressbar.js/progressbar.min.js') }}></script>
    <script src={{ asset('template/vendors/chart.js/Chart.min.js') }}></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src={{ asset('template/js/dashboard.js') }}></script>
    <!-- End custom js for this page-->
</body>

</html>
