<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Yajra DataTable -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" "></script>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.7/b-2.4.2/b-html5-2.4.2/datatables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b89324f31c.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>

<body class="font-sans antialiased" x-data="data()" x-init="if (!('dark' in localStorage) {
        localStorage.setItem('dark', true);
    }
    dark = localStorage.getItem('dark'); $watch('dark', value => localStorage.setItem('dark', value))">
    <div class="min-h-screen flex h-screen" :class="{ 'overflow-hidden': isSideMenuOpen, 'dark': dark }">
        <!-- Desktop sidebar -->
        <x-sidebars.sidebar />
        <!-- Header -->
        <div class="relative flex z-20 flex-col flex-1 w-full">
            <livewire:layout.header-navigation />
            <!-- Page Content -->
            <main class="h-full overflow-y-scroll bg-gray-100 dark:bg-gray-600">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
