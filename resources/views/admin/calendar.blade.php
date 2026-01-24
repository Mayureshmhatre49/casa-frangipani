<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Booking Calendar</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-900 text-white p-8">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-2xl font-semibold mb-6">Booking Calendar (Admin)</h1>

        <livewire:booking-calendar />
    </div>

    @livewireScripts
</body>
</html>
