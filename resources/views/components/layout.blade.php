<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ $title ?? "ASN Laravel" }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-dvh flex flex-col antialiased bg-gray-100 text-gray-800">
        <!-- HEADER Todo -->
        <main class="grow">
            {{ $slot }}
        </main>
        <!-- FOOTER Todo -->
    </body>
</html>
