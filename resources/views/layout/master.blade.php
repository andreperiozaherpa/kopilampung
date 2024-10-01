<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{
    "attributes": {
        "placement": "vertical",
        "layout": "fluid",
        "radius": "rounded",
        "color": "light-lime",
        "navcolor": "default"
    }
}'>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kopi Lampung</title>
    <meta name="description" content="Kopi Lampung, Koordinasi pintar dalam pengelolaan keuangan daerah " />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/img/favicon/tubaba.png" />
    <link rel="icon" type="image/png" href="/assets/img/favicon/tubaba.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/assets/img/favicon/tubaba.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/font/CS-Interface/style.css" />
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/OverlayScrollbars.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/introjs.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/select2.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/select2-bootstrap4.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/datatables.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/plyr.css" />
    <link rel="stylesheet" href="/assets/css/vendor/baguetteBox.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/dropzone.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap-datepicker3.standalone.min.css" />

    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <script src="/assets/js/base/loader.js"></script>
</head>

@if (Request::segment(1) == 'login')
    @php
        $login = 'h-100';
    @endphp
@else
    @php
        $login = '';
    @endphp
@endif

<body class="{{ $login }}">
    @if (Request::segment(1) == 'login')
        @yield('login');
    @else
        <div id="root">
            @include('layout.nav');

            @yield('content');

            @include('layout.footer');
        </div>
    @endif


    <script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/vendor/OverlayScrollbars.min.js"></script>
    <script src="/assets/js/vendor/autoComplete.min.js"></script>
    <script src="/assets/js/vendor/clamp.min.js"></script>
    <script src="/assets/js/vendor/Chart.bundle.min.js"></script>
    <script src="/assets/js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="/assets/js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
    <script src="/assets/js/vendor/glide.min.js"></script>
    <script src="/assets/js/vendor/intro.min.js"></script>
    <script src="/assets/js/vendor/select2.full.min.js"></script>
    <script src="/assets/js/vendor/plyr.min.js"></script>
    <script src="/assets/js/vendor/autosize.min.js"></script>
    <script src="/assets/js/vendor/baguetteBox.min.js"></script>
    <script src="/assets/js/vendor/dropzone.min.js"></script>
    <script src="/assets/js/vendor/fullcalendar/main.min.js"></script>
    <script src="/assets/js/vendor/moment-with-locales.min.js"></script>
    <script src="/assets/js/vendor/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/js/vendor/timepicker.js"></script>
    <script src="/assets/js/vendor/progressbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="/assets/js/base/helpers.js"></script>
    <script src="/assets/js/base/globals.js"></script>
    <script src="/assets/js/base/nav.js"></script>
    <script src="/assets/js/base/search.js"></script>
    <script src="/assets/icon/acorn-icons.js"></script>
    <script src="/assets/icon/acorn-icons-interface.js"></script>
    <script src="/assets/icon/acorn-icons-commerce.js"></script>
    <script src="/assets/icon/acorn-icons-learning.js"></script>
    <script src="/assets/icon/acorn-icons-medical.js"></script>


    <script src="/assets/js/plugins/progressbars.js"></script>
    <script src="/assets/js/base/settings.js"></script>
    <script src="/assets/js/cs/dropzone.templates.js"></script>
    <script src="/assets/js/forms/controls.dropzone.js"></script>
    <script src="/assets/js/vendor/datatables.min.js"></script>
    <script src="/assets/js/cs/datatable.extend.js"></script>
    <script src="/assets/js/cs/glide.custom.js"></script>
    <script src="/assets/js/cs/charts.extend.js"></script>
    <script src="/assets/js/plugins/charts.js"></script>
    <script src="/assets/js/pages/dashboard.default.js"></script>
    <script src="/assets/js/common.js"></script>
    <script src="/assets/js/scripts.js"></script>

    @stack('script')
</body>

</html>
