<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presto.it</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>

    <x-navbar />
    
<div class="height-custom-layout">
{{ $slot }}
</div>
        
    <x-footer/>


        @livewireScripts
</body>

</html>