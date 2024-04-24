<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Projek Magang">

        <title>My Dashboard</title>
        <link href="/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="/css/dashboard.css" rel="stylesheet">
        {{-- linkd cdnawesome font --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <!-- CSS Trix -->
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <style>
            trix-toolbar [data-trix-button-group='file-tools'] {
                display: none;
            }
        </style>
    </head>

    <body>

        @include('dashboard.layouts.header')

        <div class="container-fluid">
            <div class="row">
                @include('dashboard.layouts.nav')

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @if(isset($title))
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">{{ $title }}</h1>
                        </div>
                    @endif

                    @yield('admin-ta')
                </main>
            </div>
        </div>

        <script src="/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
        </script>
        <script src="/js/dashboard.js"></script>
        <!--JS TRIK-->
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    </body>

    </html>

