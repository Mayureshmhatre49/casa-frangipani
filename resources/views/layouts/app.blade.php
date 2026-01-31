<!DOCTYPE html>
<html lang="en" class="scroll-smooth antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Casa Frangipani - Luxury Private Villa in Alibaug | 6BR Pool Villa')</title>
    <meta name="description" content="@yield('meta_description','Casa Frangipani: A serene 6-bedroom private pool villa in Alibaug surrounded by lush greenery. Perfect for premium getaways, celebrations, and peaceful retreats.')">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire --}}
    @livewireStyles

    {{-- Fonts (IMPORTANT: Rocket uses font-smoothing heavily) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>

    {{-- Flatpickr --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    {{-- Rocket scripts (keep) --}}
    <script type="module" async src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fvillabook6347back.builtwithrocket.new&_be=https%3A%2F%2Fappanalytics.rocket.new&_v=0.1.15"></script>
    <script type="module" defer src="https://static.rocket.new/rocket-shot.js?v=0.0.2"></script>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WM2PFH3L');</script>
<!-- End Google Tag Manager -->
</head>

<body
    class="
        bg-cream text-brown-dark
        selection:bg-terracotta/20 selection:text-brown-dark
        overflow-x-hidden
        font-body
        leading-[1.45]
        tracking-[-0.01em]
    "
>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WM2PFH3L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    @yield('content')

    <script>
        lucide.createIcons();
    </script>

    @stack('scripts')
    @livewireScripts
</body>
</html>
