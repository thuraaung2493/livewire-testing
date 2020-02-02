<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Livewire</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <script src="https://kit.fontawesome.com/107c56b88c.js" crossorigin="anonymous"></script>

        @livewireAssets
    </head>
    <body>
        <div class="container mt-4">
            @livewire('users-table')
        </div>
    </body>
</html>
