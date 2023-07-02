<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projects</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <style>
            [x-cloak] { display: none !important; }
        </style>

        @livewireStyles
    </head>
    <body class="bg-light">
        <header>
            <nav class="navbar navbar-expand-lg text-bg-primary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav p-2">
                            <li class="nav-item">
                                <p class="nav-link fs-4">
                                    <a href="/dashboard" 
                                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Home
                                    </a>
                                </p>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link fs-4">
                                    <a href="/livewire-table" 
                                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Livewire-Datatable
                                    </a>
                                </p>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link fs-4">
                                    <a href="/unity" 
                                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Unity
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            @yield('content')
        </div>

        @livewireScripts

        @yield('footer')
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>