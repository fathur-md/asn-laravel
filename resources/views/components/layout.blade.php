<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>{{ $title ?? 'ASN Laravel' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <!-- HEADER Todo -->
  <x-navbar />

  <main class="grow">
    {{ $slot }}
  </main>
  <!-- FOOTER Todo -->
</body>

</html>
