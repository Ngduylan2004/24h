@extends('layouts.app')

@section('title', 'Công Ty TNHH Công Nghệ 24HCV')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/page/home.css') }}">
@endpush

@section('content')
    {{-- Hero Slider — 3 slide ấn tượng --}}
    <section class="bg-hero-24h">
        <div class="hero-sparkle" aria-hidden="true"></div>
        <div class="container-24h relative z-10 py-20 md:py-28">
            <div class="hero-slider flex flex-col gap-10 md:flex-row md:items-center md:gap-12">
                <div class="hero-slider-left min-w-0 flex-1">
                    <div class="hero-slides relative overflow-hidden">
                        @php
                            $heroSlides = [
                                [
                                    'badge' => 'Công ty TNHH Công Nghệ 24HCV',
                                    'title' => 'Chuyển Đổi Số',
                                    'title_highlight' => 'Thông Minh',
                                    'desc' =>
                                        'Nâng tầm doanh nghiệp với giải pháp công nghệ tiên tiến: phần mềm, chuyển đổi số, số hóa tài liệu và lưu trữ thông minh.',
                                    'card_label' => '01 / 03',
                                    'card_title' => 'Giải pháp toàn diện cho chuyển đổi số',
                                    'items' => ['Phần mềm tùy chỉnh', 'Bảo mật tuyệt đối', 'Chuyển đổi số toàn diện'],
                                ],
                                [
                                    'badge' => 'Giải pháp công nghệ hàng đầu',
                                    'title' => 'Số Hóa &',
                                    'title_highlight' => 'Lưu Trữ',
                                    'desc' =>
                                        'Số hóa tài liệu, chỉnh lý lưu trữ, tu bổ tài liệu và cung cấp thiết bị chuyên nghiệp cho doanh nghiệp và cơ quan nhà nước.',
                                    'card_label' => '02 / 03',
                                    'card_title' => 'Dịch vụ số hóa và lưu trữ chuyên nghiệp',
                                    'items' => [
                                        'Scan & OCR tốc độ cao',
                                        'Lưu trữ đám mây',
                                        'Bảo quản tài liệu dài hạn',
                                    ],
                                ],
                                [
                                    'badge' => 'Gần 10 năm kinh nghiệm',
                                    'title' => 'Đối Tác',
                                    'title_highlight' => 'Tin Cậy',
                                    'desc' =>
                                        'Đồng hành cùng hàng trăm doanh nghiệp trong hành trình chuyển đổi số. Triển khai nhanh, bảo mật tuyệt đối, hỗ trợ 24/7.',
                                    'card_label' => '03 / 03',
                                    'card_title' => 'Cam kết chất lượng và bảo mật',
                                    'items' => [
                                        '500+ dự án thành công',
                                        '200+ doanh nghiệp tin tưởng',
                                        'Đội ngũ 50+ chuyên gia',
                                    ],
                                ],
                            ];
                        @endphp
                        @foreach ($heroSlides as $i => $slide)
                            <div class="hero-slide {{ $i === 0 ? 'active' : '' }}" data-slide="{{ $i }}"
                                aria-hidden="{{ $i !== 0 }}">
                                <div class="space-y-6">
                                    <div
                                        class="inline-flex items-center gap-2 rounded-full border border-accent-400/50 bg-slate-950/60 px-3 py-1 text-xs font-medium text-accent-400 shadow-glow-primary">
                                        <span
                                            class="h-2 w-2 rounded-full bg-accent-400 shadow-[0_0_10px_rgba(39,240,255,0.9)]"></span>
                                        {{ $slide['badge'] }}
                                    </div>
                                    <div class="space-y-3">
                                        <h1
                                            class="text-3xl font-semibold leading-tight tracking-tight text-slate-50 md:text-4xl lg:text-5xl">
                                            {{ $slide['title'] }} <span
                                                class="text-accent-400">{{ $slide['title_highlight'] }}</span>
                                        </h1>
                                        <p class="max-w-xl text-sm leading-relaxed text-slate-300 md:text-base">
                                            {{ $slide['desc'] }}
                                        </p>
                                    </div>
                                    <div class="flex flex-wrap items-center gap-4">
                                        <a href="#services"
                                            class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-primary-500 to-accent-400 px-6 py-3 text-xs font-semibold uppercase tracking-[0.16em] text-slate-950 shadow-glow-primary">
                                            Khám Phá Ngay
                                        </a>
                                        <a href="#contact"
                                            class="inline-flex items-center gap-2 rounded-full border border-slate-600/60 bg-slate-900/60 px-5 py-3 text-xs font-semibold uppercase tracking-[0.16em] text-slate-200">
                                            <span
                                                class="flex h-6 w-6 items-center justify-center rounded-full bg-slate-100 text-slate-900">▶</span>
                                            Liên Hệ Ngay
                                        </a>
                                    </div>
                                    <div
                                        class="glass-card mt-2 inline-flex items-center gap-5 rounded-2xl px-4 py-3 text-xs text-slate-300">
                                        <div class="flex flex-col">
                                            <span
                                                class="text-[10px] uppercase tracking-[0.18em] text-slate-500">{{ $slide['card_label'] }}</span>
                                            <span
                                                class="text-sm font-semibold text-slate-100">{{ $slide['card_title'] }}</span>
                                        </div>
                                        <ul class="space-y-1 text-xs text-slate-400">
                                            @foreach ($slide['items'] as $item)
                                                <li>• {{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="hero-nav mt-6 flex items-center gap-4">
                        <div class="hero-dots flex gap-2" role="tablist" aria-label="Chọn slide">
                            @for ($d = 0; $d < 3; $d++)
                                <button type="button"
                                    class="hero-dot h-2.5 w-2.5 rounded-full border border-slate-500 bg-transparent transition-all duration-300 hover:border-accent-400 hover:bg-accent-400/50 {{ $d === 0 ? 'active' : '' }}"
                                    data-slide="{{ $d }}" aria-label="Slide {{ $d + 1 }}"
                                    aria-selected="{{ $d === 0 ? 'true' : 'false' }}"></button>
                            @endfor
                        </div>
                        <div class="flex gap-2">
                            <button type="button"
                                class="hero-arrow flex h-9 w-9 items-center justify-center rounded-full border border-slate-600/70 bg-slate-900/70 text-slate-200 transition hover:border-accent-400/60 hover:bg-accent-400/20 hover:text-accent-400"
                                aria-label="Slide trước">‹</button>
                            <button type="button"
                                class="hero-arrow flex h-9 w-9 items-center justify-center rounded-full border border-slate-600/70 bg-slate-900/70 text-slate-200 transition hover:border-accent-400/60 hover:bg-accent-400/20 hover:text-accent-400"
                                aria-label="Slide sau">›</button>
                        </div>
                    </div>
                </div>

                <div class="hero-slider-right w-full shrink-0 md:w-[42%]">
                    <div
                        class="hero-stats-cards grid gap-4 rounded-3xl border border-slate-700/70 bg-slate-950/70 p-5 shadow-glow-soft md:grid-cols-2">
                        @php
                            $heroStats = [
                                ['label' => 'Dự Án Hoàn Thành', 'value' => '500+'],
                                ['label' => 'Khách Hàng Tin Tưởng', 'value' => '200+'],
                                ['label' => 'Năm Kinh Nghiệm', 'value' => '15+'],
                                ['label' => 'Chuyên Gia Công Nghệ', 'value' => '50+'],
                            ];
                        @endphp
                        @foreach ($heroStats as $stat)
                            <div class="hero-stat-card reveal-up glass-card rounded-2xl p-5">
                                <div class="text-xs font-medium uppercase tracking-[0.16em] text-slate-400">
                                    {{ $stat['label'] }}</div>
                                <div
                                    class="hero-stat-value mt-2 text-2xl font-bold tabular-nums text-primary-400 md:text-3xl">
                                    {{ $stat['value'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Partners (slider marquee) --}}
    @php
        $partnerLogos = [
            ['src' => 'images/Asus-Logo-1995-present-scaled.png', 'alt' => 'ASUS'],
            ['src' => 'images/FPT_Polytechnic-800x272.png', 'alt' => 'FPT'],
            ['src' => 'images/avission.png', 'alt' => 'Avision'],
            ['src' => 'images/kodak.png', 'alt' => 'Kodak'],
            ['src' => 'images/viettel.png', 'alt' => 'Viettel'],
            ['src' => 'images/vnpt.png', 'alt' => 'VNPT'],
        ];
    @endphp
    <section class="partners-section py-14 md:py-16">
        <div class="container-24h space-y-8">
            <div class="partners-header reveal-up max-w-2xl">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-accent-400">Đối Tác Chiến Lược</p>
                <h2 class="mt-1 text-xl font-semibold text-slate-50 md:text-2xl">Được tin tưởng bởi các thương hiệu hàng đầu
                    Việt Nam</h2>
                <span class="partners-title-line"></span>
            </div>
            <div class="partners-marquee">
                <div class="partners-track">
                    <div class="partners-slide">
                        @foreach ($partnerLogos as $logo)
                            <div class="partners-logo">
                                <img src="{{ asset($logo['src']) }}" alt="{{ $logo['alt'] }}">
                            </div>
                        @endforeach
                    </div>
                    <div class="partners-slide" aria-hidden="true">
                        @foreach ($partnerLogos as $logo)
                            <div class="partners-logo">
                                <img src="{{ asset($logo['src']) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section id="services" class="border-t border-slate-800/60 bg-slate-950/95 py-16">
        <div class="container-24h space-y-8">
            <div class="max-w-2xl space-y-3">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-sky-400">Dịch Vụ Của Chúng Tôi</p>
                <h2 class="text-2xl font-semibold text-slate-50 md:text-3xl">Giải Pháp Công Nghệ Toàn Diện</h2>
                <p class="text-sm leading-relaxed text-slate-300">
                    Chúng tôi cung cấp đầy đủ các dịch vụ từ phát triển phần mềm, chuyển đổi số đến số hóa và lưu trữ tài
                    liệu chuyên nghiệp.
                </p>
            </div>

            @php
                $services = [
                    [
                        'title' => 'Giải Pháp Phần Mềm',
                        'desc' => 'Phát triển và triển khai phần mềm phục vụ quản lý dữ liệu, lưu trữ hồ sơ.',
                        'items' => [
                            'Phần mềm quản lý hồ sơ tài liệu',
                            'Hệ thống lưu trữ điện tử',
                            'Tích hợp dữ liệu đồng bộ',
                            'Bảo trì và nâng cấp hệ thống',
                        ],
                    ],
                    [
                        'title' => 'Chuyển Đổi Số',
                        'desc' => 'Tư vấn và triển khai chiến lược chuyển đổi số toàn diện.',
                        'items' => [
                            'Khảo sát hiện trạng nghiệp vụ',
                            'Xây dựng phương án triển khai',
                            'Tổ chức vận hành hệ thống',
                            'Đào tạo và hướng dẫn sử dụng',
                        ],
                    ],
                    [
                        'title' => 'Số Hóa Tài Liệu',
                        'desc' => 'Chuyển đổi tài liệu giấy sang định dạng số chính xác.',
                        'items' => [
                            'Quét tài liệu chuyên dụng',
                            'Nhận dạng ký tự OCR',
                            'Lập dữ liệu tra cứu',
                            'Lưu trữ và khai thác điện tử',
                        ],
                    ],
                    [
                        'title' => 'Chỉnh Lý Tài Liệu',
                        'desc' =>
                            'Chỉnh lý, phân loại và lập hồ sơ tài liệu theo tiêu chuẩn nghiệp vụ lưu trữ hiện hành.',
                        'items' => [
                            'Phân loại hồ sơ',
                            'Lập mục lục hồ sơ',
                            'Xác định giá trị tài liệu',
                            'Sắp xếp bảo quản khoa học',
                        ],
                    ],
                    [
                        'title' => 'Tu Bổ Phục Chế Tài Liệu',
                        'desc' =>
                            'Khôi phục, gia cố và bảo quản tài liệu lưu trữ bị xuống cấp theo quy trình kỹ thuật.',
                        'items' => [
                            'Xử lý nấm mốc, axit',
                            'Gia cố tài liệu hư hỏng',
                            'Đóng bìa phục hồi',
                            'Bảo quản lâu dài',
                        ],
                    ],
                    [
                        'title' => 'Cung Cấp, Cho thuê Thiết Bị',
                        'desc' => 'Cung cấp thiết bị, vật tư phục vụ công tác lưu trữ và quản lý dữ liệu.',
                        'items' => [
                            'Máy tính & Server',
                            'Máy scan chuyên dụng',
                            'Thiết bị lưu trữ dữ liệu',

                            'Thiết bị CNTT chuyên ngành',
                        ],
                    ],
                ];
            @endphp

            <div class="grid gap-5 md:grid-cols-3">
                @foreach ($services as $service)
                    <article class="reveal-up glass-card flex h-full flex-col rounded-2xl p-5">
                        <h3 class="text-base font-semibold text-slate-50">{{ $service['title'] }}</h3>
                        <p class="mt-2 text-sm text-slate-300">{{ $service['desc'] }}</p>
                        <ul class="mt-3 space-y-1 text-xs text-slate-400">
                            @foreach ($service['items'] as $item)
                                <li>• {{ $item }}</li>
                            @endforeach
                        </ul>
                        <a href="#contact"
                            class="mt-4 inline-flex text-xs font-semibold text-accent-400 hover:text-accent-400/80">
                            Tìm Hiểu Thêm →
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Workflow --}}
    <section id="workflow" class="border-t border-slate-800/60 bg-slate-950/90 py-16">
        <div class="container-24h space-y-8">
            <div class="max-w-2xl space-y-3">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-sky-400">Quy Trình Làm Việc</p>
                <h2 class="text-2xl font-semibold text-slate-50 md:text-3xl">Quy Trình Chuyên Nghiệp</h2>
                <p class="text-sm leading-relaxed text-slate-300">
                    6 bước để đưa doanh nghiệp của bạn bước vào kỷ nguyên số hóa một cách suôn sẻ và hiệu quả.
                </p>
            </div>
            @php
                $steps = [
                    [
                        'no' => '01',
                        'title' => 'Tiếp Nhận Yêu Cầu',
                        'desc' => 'Tìm hiểu kỹ nhu cầu thông qua các buổi tư vấn chuyên sâu.',
                    ],
                    [
                        'no' => '02',
                        'title' => 'Khảo Sát & Phân Tích',
                        'desc' => 'Khảo sát hiện trạng, phân tích quy trình và nhu cầu thực tế.',
                    ],
                    [
                        'no' => '03',
                        'title' => 'Đề Xuất Giải Pháp',
                        'desc' => 'Xây dựng phương án tối ưu, chi phí hợp lý, lộ trình rõ ràng.',
                    ],
                    [
                        'no' => '04',
                        'title' => 'Triển Khai Thực Hiện',
                        'desc' => 'Thực hiện dự án với đội ngũ chuyên gia giàu kinh nghiệm.',
                    ],
                    [
                        'no' => '05',
                        'title' => 'Bàn Giao & Đào Tạo',
                        'desc' => 'Bàn giao sản phẩm, đào tạo người dùng và hướng dẫn vận hành.',
                    ],
                    [
                        'no' => '06',
                        'title' => 'Hỗ Trợ Dài Hạn',
                        'desc' => 'Bảo trì, nâng cấp hệ thống trong suốt vòng đời sử dụng.',
                    ],
                ];
            @endphp
            <div class="grid gap-5 md:grid-cols-3">
                @foreach ($steps as $step)
                    <div class="reveal-up glass-card rounded-2xl p-5">
                        <div class="text-xs font-semibold text-accent-400">{{ $step['no'] }}</div>
                        <h3 class="mt-1 text-sm font-semibold text-slate-50">{{ $step['title'] }}</h3>
                        <p class="mt-2 text-xs text-slate-300">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- About --}}
    <section id="about" class="border-t border-slate-800/60 bg-slate-950/95 py-16">
        <div class="container-24h grid gap-10 md:grid-cols-2">
            <div class="space-y-4">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-sky-400">Về Chúng Tôi</p>
                <h2 class="text-2xl font-semibold text-slate-50 md:text-3xl">Đối Tác Tin Cậy Trong Chuyển Đổi Số</h2>
                <p class="text-sm leading-relaxed text-slate-300">
                    Công ty TNHH Công Nghệ 24HCV là đơn vị tiên phong trong lĩnh vực công nghệ thông tin, số hóa tài liệu và
                    chuyển đổi số tại Việt Nam.
                    Trải qua gần 10 năm phát triển, chúng tôi không ngừng cung cấp các giải pháp hiện đại, đồng hành cùng cơ
                    quan, tổ chức và doanh nghiệp trong quá trình nâng cao hiệu quả quản lý và tối ưu vận hành.
                </p>
                <ul class="space-y-3 text-sm text-slate-200">
                    <li>
                        <span class="font-semibold text-accent-400">Giải Pháp Tin Cậy:</span>
                        Cung cấp các giải pháp công nghệ, số hóa và lưu trữ phù hợp với nhu cầu thực tế của cơ quan, tổ chức
                        và doanh nghiệp.
                    </li>

                    <li>
                        <span class="font-semibold text-accent-400">Đội Ngũ Chuyên Môn:</span>
                        Sở hữu đội ngũ kỹ thuật và chuyên viên nghiệp vụ có kinh nghiệm trong lĩnh vực công nghệ và chuyển
                        đổi số.
                    </li>

                    <li>
                        <span class="font-semibold text-accent-400">Đồng Hành Phát Triển:</span>
                        Luôn lấy hiệu quả vận hành và giá trị lâu dài của khách hàng làm trọng tâm trong mọi giải pháp triển
                        khai.
                    </li>
                </ul>
            </div>
            <div class="space-y-4">
                <div class="glass-card rounded-2xl p-5">
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-400">
                        Công nghệ chúng tôi ứng dụng
                    </p>

                    <div class="mt-3 flex flex-wrap gap-2 text-xs text-slate-200">
                        @foreach (['OCR thông minh', 'Cloud Storage', 'Database Management', 'API Integration', 'AI xử lý dữ liệu', 'Bảo mật hệ thống', 'Web Application', 'Server Infrastructure'] as $tech)
                            <span class="badge-chip rounded-full border border-slate-700 px-3 py-1">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <a href="#contact" class="inline-flex text-xs font-semibold text-accent-400 hover:text-accent-400/80">
                    Tìm Hiểu Thêm →
                </a>
            </div>
        </div>
    </section>

    {{-- Projects (simple cards) --}}
    <section id="projects" class="border-t border-slate-800/60 bg-slate-950/90 py-16">
        <div class="container-24h space-y-8">
            <div class="max-w-2xl space-y-3">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-sky-400">Hoạt Động Gần Đây</p>
                <h2 class="text-2xl font-semibold text-slate-50 md:text-3xl">Dự Án Tiêu Biểu</h2>
                <p class="text-sm leading-relaxed text-slate-300">
                    Một số gói thầu và dự án tiêu biểu mà 24HCV đã thực hiện trong thời gian gần đây.
                </p>
            </div>
            @php
                $projects = [
                    [
                        'title' => 'Chỉnh lý và số hóa tài liệu lưu trữ tại Văn phòng Đảng ủy Phường Đông Triều',
                        'client' => 'Văn phòng Đảng ủy phường Đông Triều',
                        'date' => '11/12/2025',
                        'type' => 'Triển khai theo hình thức chào hàng cạnh tranh',
                    ],
                    [
                        'title' =>
                            'Chỉnh lý, số hóa tài liệu lưu trữ của Đảng ủy cấp xã, thị trấn cũ thuộc địa bàn xã Quảng Hà',
                        'client' => 'Văn phòng Đảng ủy xã Quảng Hà',
                        'date' => '10/12/2025',
                        'type' => 'Triển khai theo hình thức chào hàng cạnh tranh',
                    ],
                    [
                        'title' => 'Chỉnh lý và số hóa tài liệu lưu trữ của Đảng ủy đặc khu Cô Tô',
                        'client' => 'Văn phòng Đảng ủy đặc khu Cô Tô',
                        'date' => '05/12/2025',
                        'type' => 'Triển khai theo hình thức chào hàng cạnh tranh',
                    ],
                    [
                        'title' =>
                            'Trang bị bản quyền phần mềm hệ điều hành máy tính và phần mềm soạn thảo văn bản cho CATP',
                        'client' => 'Công an Thành phố Hồ Chí Minh',
                        'date' => '01/12/2025',
                        'type' => 'Triển khai theo hình thức chỉ định thầu rút gọn với vai trò độc tập',
                    ],
                ];
            @endphp
            <div class="grid gap-5 md:grid-cols-2">
                @foreach ($projects as $project)
                    <article class="reveal-up glass-card flex h-full flex-col rounded-2xl p-5">
                        <h3 class="text-sm font-semibold text-slate-50">{{ $project['title'] }}</h3>
                        <p class="mt-2 text-xs text-slate-300"><span class="font-semibold text-slate-200">Khách
                                hàng:</span> {{ $project['client'] }}</p>
                        <p class="mt-1 text-xs text-slate-300"><span class="font-semibold text-slate-200">Thời
                                gian:</span> {{ $project['date'] }}</p>
                        <p class="mt-1 text-xs text-slate-300"><span class="font-semibold text-slate-200">Hình
                                thức:</span> {{ $project['type'] }}</p>
                        <a href="#contact"
                            class="mt-4 inline-flex text-xs font-semibold text-accent-400 hover:text-accent-400/80">
                            Xem Chi Tiết →
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA + Contact (rút gọn) --}}
    <section id="contact" class="border-t border-slate-800/60 bg-slate-950/95 py-16">
        <div class="container-24h grid gap-10 md:grid-cols-2">
            <div class="space-y-4">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-sky-400">Bắt Đầu Ngay Hôm Nay</p>
                <h2 class="text-2xl font-semibold text-slate-50 md:text-3xl">Sẵn Sàng Chuyển Đổi Số Cùng 24HCV?</h2>
                <p class="text-sm leading-relaxed text-slate-300">
                    Liên hệ ngay với chúng tôi để được tư vấn miễn phí và nhận báo giá cho các giải pháp công nghệ phù hợp
                    với doanh nghiệp của bạn.
                </p>
                <ul class="grid grid-cols-2 gap-2 text-xs text-slate-200">
                    <li class="badge-chip rounded-full px-3 py-2">Triển khai nhanh</li>
                    <li class="badge-chip rounded-full px-3 py-2">Bảo mật tuyệt đối</li>
                    <li class="badge-chip rounded-full px-3 py-2">Hỗ trợ 24/7</li>
                    <li class="badge-chip rounded-full px-3 py-2">Tư vấn miễn phí</li>
                </ul>
                <div class="glass-card mt-4 rounded-2xl p-4 text-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-400">Hotline tư vấn</p>
                    <p class="mt-1 text-xl font-semibold text-primary-400">0911 527 639</p>
                    <p class="mt-1 text-xs text-slate-300">24hcv@gmail.com</p>
                </div>
            </div>
            <div class="glass-card rounded-3xl p-6">
                <form class="space-y-4">
                    <div>
                        <label class="text-xs font-semibold text-slate-200">Họ và Tên *</label>
                        <input type="text" required
                            class="mt-1 w-full rounded-xl border border-slate-600 bg-slate-950/70 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:border-accent-400 focus:outline-none focus:ring-2 focus:ring-accent-400/40"
                            placeholder="Nhập họ và tên">
                    </div>
                    <div class="grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="text-xs font-semibold text-slate-200">Email *</label>
                            <input type="email" required
                                class="mt-1 w-full rounded-xl border border-slate-600 bg-slate-950/70 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:border-accent-400 focus:outline-none focus:ring-2 focus:ring-accent-400/40"
                                placeholder="email@example.com">
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-slate-200">Số Điện Thoại</label>
                            <input type="text"
                                class="mt-1 w-full rounded-xl border border-slate-600 bg-slate-950/70 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:border-accent-400 focus:outline-none focus:ring-2 focus:ring-accent-400/40"
                                placeholder="0123 456 789">
                        </div>
                    </div>
                    <div>
                        <label class="text-xs font-semibold text-slate-200">Nội Dung *</label>
                        <textarea rows="4" required
                            class="mt-1 w-full rounded-xl border border-slate-600 bg-slate-950/70 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:border-accent-400 focus:outline-none focus:ring-2 focus:ring-accent-400/40"
                            placeholder="Mô tả nhu cầu của bạn..."></textarea>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-primary-500 to-accent-400 px-6 py-2.5 text-xs font-semibold uppercase tracking-[0.18em] text-slate-950 shadow-glow-primary">
                        Gửi Yêu Cầu
                    </button>
                    <p class="text-[11px] text-slate-400">Thông tin của bạn được bảo mật tuyệt đối.</p>
                </form>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            (function() {
                var slides = document.querySelectorAll('.hero-slide');
                var dots = document.querySelectorAll('.hero-dot');
                var prevBtn = document.querySelector('.hero-slider-left .hero-arrow:first-of-type');
                var nextBtn = document.querySelector('.hero-slider-left .hero-arrow:last-of-type');
                var current = 0,
                    total = slides.length,
                    timer;

                function goTo(i) {
                    current = (i + total) % total;
                    slides.forEach(function(el, k) {
                        el.classList.toggle('active', k === current);
                        el.setAttribute('aria-hidden', k !== current);
                    });
                    dots.forEach(function(el, k) {
                        el.classList.toggle('active', k === current);
                        el.setAttribute('aria-selected', k === current ? 'true' : 'false');
                    });
                }

                function next() {
                    goTo(current + 1);
                }

                function prev() {
                    goTo(current - 1);
                }

                function start() {
                    clearInterval(timer);
                    timer = setInterval(next, 6000);
                }
                dots.forEach(function(dot, i) {
                    dot.addEventListener('click', function() {
                        goTo(i);
                        start();
                    });
                });
                if (prevBtn) prevBtn.addEventListener('click', function() {
                    prev();
                    start();
                });
                if (nextBtn) nextBtn.addEventListener('click', function() {
                    next();
                    start();
                });
                start();
            })();
        </script>
    @endpush
@endsection
