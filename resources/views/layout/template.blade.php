<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ env('APP_NAME', 'Ecommerce') }}</title>
</head>
<body class="bg-gray-200">
    <div class="min-w-screen min-h-screen container-fluid">
        @include('layout.main-header')
            @yield('content')
        @include('layout.footer')
    </div>
</body>
</html>