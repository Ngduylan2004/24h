<header id="site-header" class="fixed inset-x-0 top-0 z-50 backdrop-blur-xl transition-[background,box-shadow,border-color] duration-300">
    <div class="container-24h flex items-center justify-between gap-6 py-3">
        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center gap-3">
           <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo24hcv.png') }}" alt="Công ty TNHH 24HCV" width="90" height="90">
       
            </div>
        </a>

        {{-- Desktop nav --}}
        <nav class="header-desktop-nav hidden items-center gap-6 text-sm font-medium md:flex" role="navigation">
            <a href="{{ url('/') }}" class="nav-link-24h"><span class="nav-link-text">Trang Chủ</span><span class="nav-link-line" aria-hidden="true"></span></a>
            <a href="#about" class="nav-link-24h"><span class="nav-link-text">Về Chúng Tôi</span><span class="nav-link-line" aria-hidden="true"></span></a>
            <a href="#services" class="nav-link-24h"><span class="nav-link-text">Dịch Vụ</span><span class="nav-link-line" aria-hidden="true"></span></a>
            <a href="#projects" class="nav-link-24h"><span class="nav-link-text">Dự Án</span><span class="nav-link-line" aria-hidden="true"></span></a>
            <a href="#workflow" class="nav-link-24h"><span class="nav-link-text">Quy Trình</span><span class="nav-link-line" aria-hidden="true"></span></a>

          
        </nav>

        {{-- Actions --}}
        <div class="flex items-center gap-3">
            {{-- Theme toggle --}}
            <button id="theme-toggle" type="button" class="hidden h-9 w-9 items-center justify-center rounded-full border border-slate-600/70 bg-slate-900/80 text-xs font-semibold text-slate-100 shadow-md transition hover:border-cyan-400/70 hover:text-accent-400 md:inline-flex" aria-label="Chuyển giao diện sáng/tối">
                <span id="theme-toggle-icon" class="text-base leading-none">🌙</span>
            </button>

            <a href="#contact" class="hidden items-center gap-2 rounded-full border border-cyan-400/60 bg-gradient-to-r from-primary-500 to-accent-400 px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] text-slate-950 shadow-glow-primary transition hover:shadow-[0_0_40px_rgba(39,240,255,0.75)] md:inline-flex">
                <span class="h-2 w-2 rounded-full bg-white shadow-[0_0_12px_rgba(255,255,255,0.8)]"></span>
                Liên Hệ Ngay
            </a>

            {{-- Mobile menu button --}}
            <button id="nav-toggle" type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-slate-700/70 bg-slate-900/80 text-slate-200 shadow-md md:hidden" aria-label="Mở menu">
                <span class="block h-[2px] w-4 rounded bg-slate-200 transition" id="bar-1"></span>
                <span class="mt-[3px] block h-[2px] w-4 rounded bg-slate-400 transition" id="bar-2"></span>
                <span class="mt-[3px] block h-[2px] w-4 rounded bg-slate-200 transition" id="bar-3"></span>
            </button>
        </div>
    </div>

    {{-- Mobile nav --}}
    <nav id="mobile-nav" class="pointer-events-none max-h-0 overflow-hidden border-t border-slate-800/70 bg-slate-950/95 backdrop-blur-xl transition-[max-height,opacity] duration-300 opacity-0 md:hidden">
        <div class="container-24h flex flex-col gap-2 py-3 text-sm font-medium text-slate-200">
            <a href="{{ url('/') }}" class="py-2">Trang Chủ</a>
            <a href="#about" class="py-2">Về Chúng Tôi</a>
            <a href="#services" class="py-2">Dịch Vụ</a>
            <a href="#projects" class="py-2">Dự Án</a>
            <a href="#news" class="py-2">Tin Tức</a>
          
           
            <a href="#contact" class="mt-2 inline-flex items-center justify-center rounded-full border border-cyan-400/70 bg-gradient-to-r from-primary-500 to-accent-400 px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] text-slate-950 shadow-glow-primary">
                Liên Hệ Ngay
            </a>
        </div>
    </nav>
</header>

@push('scripts')
<script>
    (function () {
        const header = document.getElementById('site-header');
        const navToggle = document.getElementById('nav-toggle');
        const mobileNav = document.getElementById('mobile-nav');
        const bar1 = document.getElementById('bar-1');
        const bar2 = document.getElementById('bar-2');
        const bar3 = document.getElementById('bar-3');

        function onScroll() {
            if (!header) return;
            const scrolled = window.scrollY > 10;
            header.classList.toggle('scrolled', scrolled);
        }

        window.addEventListener('scroll', onScroll);
        onScroll();

        navToggle && navToggle.addEventListener('click', function () {
            const open = mobileNav.classList.contains('!pointer-events-auto');
            if (open) {
                mobileNav.classList.remove('!max-h-[320px]', '!opacity-100', '!pointer-events-auto');
                bar1.style.transform = '';
                bar3.style.transform = '';
                bar2.style.opacity = '1';
            } else {
                mobileNav.classList.add('!max-h-[320px]', '!opacity-100', '!pointer-events-auto');
                bar1.style.transform = 'translateY(5px) rotate(45deg)';
                bar3.style.transform = 'translateY(-5px) rotate(-45deg)';
                bar2.style.opacity = '0';
            }
        });

        document.addEventListener('click', function (e) {
            if (!mobileNav || !navToggle) return;
            const open = mobileNav.classList.contains('!pointer-events-auto');
            if (!open) return;
            if (!mobileNav.contains(e.target) && !navToggle.contains(e.target)) {
                navToggle.click();
            }
        });
    })();
</script>
@endpush

