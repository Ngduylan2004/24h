<!DOCTYPE html>
<html lang="vi" class="scroll-smooth" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Công ty TNHH 24HCV')</title>
    <link rel="icon" href="{{ asset('images/logo24hcv.png') }}" type="image/png">

    {{-- Tailwind CDN (JIT giống Tailwind Play) --}}
    <script src="https://cdn.tailwindcss.com?plugins=typography,forms"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50:  '#e4f3ff',
                            100: '#cfe7ff',
                            500: '#1ea0ff',
                            600: '#1282e0',
                            700: '#0b63b3',
                        },
                        accent: {
                            400: '#27f0ff',
                            500: '#07d7ff',
                        },
                        night: {
                            900: '#020617',
                            800: '#020b24',
                            700: '#031735',
                        }
                    },
                    boxShadow: {
                        'glow-primary': '0 0 40px rgba(7,215,255,0.35)',
                        'glow-soft': '0 18px 60px rgba(15,23,42,0.95)',
                    },
                    fontFamily: {
                        sans: ['Be Vietnam Pro', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body { font-family: theme('fontFamily.sans', system-ui, sans-serif); }
        .container-24h {
            max-width: 1120px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        /* Light theme: nền trang trắng, chữ tối rõ ràng (theo hệ màu) */
        html[data-theme="light"] body {
            background-color: var(--color-bg-main, #ffffff);
            color: var(--color-text-main, #0f172a);
        }
        /* Gỡ các nền tối (utility tailwind) khi ở theme sáng – để lộ bg sáng */
        html[data-theme="light"] .bg-slate-950,
        html[data-theme="light"] .bg-slate-950\/90,
        html[data-theme="light"] .bg-slate-950\/95,
        html[data-theme="light"] .bg-slate-950\/70,
        html[data-theme="light"] .bg-slate-900\/80,
        html[data-theme="light"] .bg-slate-900\/70,
        html[data-theme="light"] .bg-slate-900\/60 {
            background-color: #ffffff !important;
        }
        /* Chữ sáng trong tailwind khi ở theme sáng sẽ chuyển sang hệ text sáng */
        html[data-theme="light"] .text-slate-50,
        html[data-theme="light"] .text-slate-100,
        html[data-theme="light"] .text-slate-200 {
            color: #0e1629 !important;
        }
        html[data-theme="light"] .text-slate-300 {
            color: #959191 !important;
        }
        html[data-theme="light"] .text-slate-400 {
            color: #959191 !important;
        }
        /* Accent / sky khi ở page sáng */
        html[data-theme="light"] .text-accent-400 {
            color: #0e1629 !important;
        }
        html[data-theme="light"] .hover\:text-accent-400\/80:hover {
            color: #0e1629 !important;
        }
        html[data-theme="light"] .text-sky-400 {
            color: #0e1629 !important;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/layout/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout/footer.css') }}">
    @stack('styles')
    @stack('head')
</head>
<body class="min-h-screen bg-slate-950 text-slate-50 antialiased">
    @include('layouts.header')

    <main class="pt-20">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script>
        // Scroll reveal
        (function () {
            const els = document.querySelectorAll('.reveal-up');
            if (!('IntersectionObserver' in window) || !els.length) return;
            const io = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            els.forEach(el => io.observe(el));
        })();

        // Theme toggle (dark / light) với lưu localStorage
        (function () {
            const root = document.documentElement;
            const THEME_KEY = '24hcv-theme';
            const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

            function applyTheme(theme) {
                root.setAttribute('data-theme', theme);
            }

            // Khởi tạo từ localStorage hoặc prefer system
            (function initTheme() {
                try {
                    const stored = localStorage.getItem(THEME_KEY);
                    const initial = stored === 'light' || stored === 'dark'
                        ? stored
                        : (prefersDark ? 'dark' : 'dark');
                    applyTheme(initial);
                } catch (e) {
                    applyTheme('dark');
                }
            })();

            // Gắn sự kiện cho nút toggle
            window.addEventListener('DOMContentLoaded', function () {
                const toggle = document.getElementById('theme-toggle');
                const toggleIcon = document.getElementById('theme-toggle-icon');
                if (!toggle) return;

                function syncIcon(theme) {
                    if (!toggleIcon) return;
                    if (theme === 'light') {
                        toggleIcon.textContent = '☀️';
                    } else {
                        toggleIcon.textContent = '🌙';
                    }
                }

                function getCurrentTheme() {
                    return root.getAttribute('data-theme') === 'light' ? 'light' : 'dark';
                }

                syncIcon(getCurrentTheme());

                toggle.addEventListener('click', function () {
                    const current = getCurrentTheme();
                    const next = current === 'dark' ? 'light' : 'dark';
                    applyTheme(next);
                    syncIcon(next);
                    try {
                        localStorage.setItem(THEME_KEY, next);
                    } catch (e) {}
                });
            });
        })();
    </script>

    @stack('scripts')
</body>
</html>

