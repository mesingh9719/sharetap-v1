<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ $settings['site_favicon'] ?? '' }}" type="image/png">

    @if (!empty($metas))
        @if ($metas['meta_description'])
            <meta name="description" content="{{ $metas['meta_description'] ?? '' }}">
        @endif
        @if ($metas['meta_keyword'])
            <meta name="keywords" content="{{ $metas['meta_keyword'] ?? '' }}">
        @endif
        @if ($metas['home_title'] && $metas['site_title'])
            <title>{{ $metas['home_title'] }} | {{ $metas['site_title'] ?? '' }}</title>
        @else
            <title>@yield('title') | {{ $settings['site_title'] ?? '' }}</title>
        @endif
    @else
        <title>@yield('title') | {{ $settings['site_description'] ?? '' }}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
    @endif

    @if (!empty($settings['logo']))
        <meta property="og:image" content="{{ $settings['logo'] }}" />
    @endif

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('title') | {{ $settings['site_title'] ?? '' }}" />
    <meta property="og:description" content="{{ $metas['meta_description'] ?? '' }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />
    @if (!empty($settings['logo']))
        <meta property="og:image" content="{{ $settings['logo'] }}" />
    @endif

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title') | {{ $settings['site_title'] ?? '' }}" />
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

        .swiper-slide-prev,
        .swiper-slide-next {
            transform: scale(0.85);
        }

        .swiper-slide-prev+.swiper-slide-prev,
        .swiper-slide-next+.swiper-slide-next {
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

        .swiper-button-next,
        .swiper-button-prev {
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/JSZip/3.10.1/jszip.min.js"></script>
<style>
    /* Core Styles */
    .context-menu {
        min-width: 200px;
        border: 1px solid #e5e7eb;
    }

    .grid-cell {
        position: relative;
        min-height: 100px;
    }

    .grid-cell:empty::before {
        content: 'Right-click to add content';
        color: #9CA3AF;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .builder-element {
        transition: all 0.3s ease;
    }

    .builder-element:hover {
        outline: 2px solid #818CF8;
    }

    .element-controls {
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .builder-element:hover .element-controls {
        opacity: 1;
    }

    .context-menu {
        animation: fadeIn 0.2s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .notification {
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from { transform: translateX(100%); }
        to { transform: translateX(0); }
    }

    .builder-element.dragging {
        opacity: 0.5;
        transform: scale(0.95);
    }

    .builder-element.drag-over {
        border-top: 2px solid #818CF8;
    }

    .preview-mode .builder-element {
        pointer-events: none;
    }

    .preview-mode .element-controls {
        display: none;
    }

    @media print {
        .builder-controls {
            display: none;
        }

        .builder-element {
            break-inside: avoid;
        }
    }

    @media (max-width: 768px) {
        .builder-controls {
            flex-direction: column;
        }
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        mt-2: 0.5rem;
        min-width: 160px;
        background-color: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

    @livewireStyles
</head>

<body>
    <x-front.layouts.header />
    {{ $slot }}
    <x-front.layouts.footer />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
    {{ $js ?? '' }}
    @livewireScripts

</body>

</html>
