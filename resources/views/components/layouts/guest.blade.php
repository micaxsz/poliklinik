<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tittle ?? 'Poliklinik' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        crossorigin="anonymous" />

    @vite(['resources/js/app.js', 'resources/app.css'])

    <style>
        * {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .brand-serif {
            font-family: 'Instrument Serif', serif;
        }
    </style>
</head>

<body
    style="min-height:100vh;background:linier-gradient(135deg,#1E2D6B 0%, #2D4499 60%,#1A2D7A 100%); display: flex;align-items:center;justify-content:center;padding: 24px;">
    {{ $slot }}
    @stack('scripts')
</body>

</html>