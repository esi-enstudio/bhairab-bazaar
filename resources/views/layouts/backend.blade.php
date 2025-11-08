<!DOCTYPE html>
<html lang="en" data-layout-mode="light_mode">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dreams POS - Inventory Management System">
    <meta name="author" content="Your Name">
    <title>@yield('title', 'Admin Panel') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon & Apple Touch Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/assets/img/apple-touch-icon.png') }}">

    <!-- Vite CSS & JS -->
    @vite(['resources/css/backend.css', 'resources/js/backend.js'])

    @livewireStyles
</head>
<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        @include('layouts.partials.backend.header')
        <!-- /Header -->

        <!-- Sidebar -->
        @include('layouts.partials.backend.sidebar')
        <!-- /Sidebar -->

        <div class="page-wrapper">
            <div class="content">

                <!-- Main Content Yield -->
                @yield('content')

            </div>

            @include('layouts.partials.backend.footer')
        </div>

    </div>
    <!-- /Main Wrapper -->


    <!-- Add Stock -->
    <div class="modal fade" id="add-stock">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="page-title">
                        <h4>Add Stock</h4>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="https://dreamspos.dreamstechnologies.com/html/template/index.html">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Warehouse <span class="text-danger ms-1">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Lobar Handy</option>
                                        <option>Quaint Warehouse</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Store <span class="text-danger ms-1">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Selosy</option>
                                        <option>Logerro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Responsible Person <span class="text-danger ms-1">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Steven</option>
                                        <option>Gravely</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="search-form mb-0">
                                    <label class="form-label">Product <span class="text-danger ms-1">*</span></label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Select Product">
                                        <i data-feather="search" class="feather-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-dark me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-md btn-primary">Add Stock</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Stock -->

    <script src="{{ asset('backend/assets/js/moment.min.js') }}"></script>

    @livewireScripts
</body>
</html>
