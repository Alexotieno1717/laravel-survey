<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survey Js</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen">

<div x-data="{ sidebarOpen: true }" class="flex">

    <!-- Navbar -->
    <x-layout.nav />

    <!-- Content -->
    <main class="p-4 sm:ml-72 w-full">
        {{ $slot }}
    </main>

</div>

</body>
</html>
