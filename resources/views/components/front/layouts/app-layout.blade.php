<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ $settings['favicon'] }}" type="image/png">

    @if (!empty($metas))
        @if ($metas['meta_description'])
            <meta name="description" content="{{ $metas['meta_description'] }}">
        @endif
        @if ($metas['meta_keyword'])
            <meta name="keywords" content="{{ $metas['meta_keyword'] }}">
        @endif
        @if ($metas['home_title'] && $metas['site_title'])
            <title>{{ $metas['home_title'] }} | {{ $metas['site_title'] }}</title>
        @else
            <title>@yield('title') | {{ $settings['site_title'] }}</title>
        @endif
    @else
        <title>@yield('title') | {{ $settings['site_title'] }}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
    @endif

    @if (!empty($settings['logo']))
        <meta property="og:image" content="{{ $settings['logo'] }}" />
    @endif

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('title') | {{ $settings['site_title'] }}" />
    <meta property="og:description" content="{{ $metas['meta_description'] ?? '' }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />
    @if (!empty($settings['logo']))
        <meta property="og:image" content="{{ $settings['logo'] }}" />
    @endif

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title') | {{ $settings['site_title'] }}" />
    <meta name="twitter:description" content="{{ $metas['meta_description'] ?? '' }}" />
    @if (!empty($settings['logo']))
        <meta name="twitter:image" content="{{ $settings['logo'] }}" />
    @endif

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css">
    <style>
        .swiper-slide {
            transition: all 0.5s ease;
        }
        .swiper-slide-active {
            transform: scale(1);
        }
        .swiper-slide-prev, .swiper-slide-next {
            transform: scale(0.85);
        }
        .swiper-slide-prev + .swiper-slide-prev,
        .swiper-slide-next + .swiper-slide-next {
            transform: scale(0.7);
        }
        .template-image {
            transition: all 0.3s ease;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .template-image:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .swiper-button-next, .swiper-button-prev {
            color: #4F46E5;
        }
        .swiper-pagination-bullet-active {
            background: #4F46E5;
        }

        @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .animation-delay-200 {
        animation-delay: 0.2s;
    }

    .animation-delay-400 {
        animation-delay: 0.4s;
    }

    .animation-delay-600 {
        animation-delay: 0.6s;
    }
    </style>

    @livewireStyles
</head>

<body>
    <x-front.layouts.header />
    {{ $slot }}
    <x-front.layouts.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.swiper-container', {
                slidesPerView: 5,
                centeredSlides: true,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 5,
                    },
                },
            });
        });
    </script>
    {{ $js ?? ''}}
    @livewireScripts
</body>

</html>
