<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"" data-layout="vertical" data-layout-style="" data-layout-position="fixed" data-sidebar="dark">
    <head>
        <x-head>
            @if (isset($head))
                {{ $head }}
            @endif     
        </x-head>    
    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <x-navbar></x-navbar>

            <x-sidebar></x-sidebar>

            <div class="vertical-overlay"></div>
            <div class="main-content">
    
                <div class="page-content">
                    <div class="container-fluid">

                        <x-breadcrumb></x-breadcrumb>

                        {{ $slot }}
    
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
    
                <x-footer></x-footer>

            </div>
            <!-- end main content-->
    
        </div>
        <!-- END layout-wrapper -->
    
    </body>

    <x-scripts>
        @if (isset($scripts))
            {{ $scripts }}
        @endif     
    </x-scripts>

</html>
