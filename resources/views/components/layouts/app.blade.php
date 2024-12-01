<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.15/lib/index.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.15/base.min.css" rel="stylesheet">

<body>
    {{ $slot }}
</body>

</html>
