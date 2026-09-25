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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    @vite(['resources/js/app.js', 'resources/css/app.cs'])
</head>

<body>
    <div class="app-wrapper">
        <div id="appSidebar" class="sidebar-fixed">
            @include('component.partials.sidebar')
        </div>

        <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

        <div class="main-content">
            @include('components.partials.sidebar')

            <div class="main-scroll">
                @if(session('success'))
                    <div class="alert alert-success mb-4 rounded-xl shadow-sm">
                        <i class="fas fa-check-circle"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-error mb-4 rounded-xl shadow-sm">
                        <i class="fas fa-circle-xmark"></i>
                        <span>{{  session('error') }}</span>
                    </div>
                @endif

                {{ $slot }}
            </div>

            @include('components.partials.footer')
        </div>

    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('appSidebar')
            const overlay = document.getElementById('sidebarOverlay')

            sidebar.classList.toggle('open')

            overlay.style.display = sidebar.classList.contains('open')
                ? 'block'
                : 'none'
        }

        function toggleFullscreen() {
            const icon = document.getElementById('fsIcon')

            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen()
                icon.className = 'fas fa-compress'
            } else {
                document.exitFullscreen()
                icon.className = 'fas fa-expand'
            }
        }
    </script>
    @stack('scripts')
</body>

</html>