<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Styles -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");

        body {
            font-family: "Montserrat", sans-serif;
            color: #fff;
            overflow-x: hidden;
        }

        .bg-overlay {
            background: rgba(0, 0, 0, 0.5);
        }

        .btn-secondary {
            @apply bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700;
        }

        .btn-primary {
            @apply bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700;
        }

        .outline-icon {
            @apply border border-gray-300 text-gray-300 hover:border-white hover:text-white;
        }

        /* Adjust Owl Carousel */
        .owl-carousel .owl-item img {
            width: 100%;
            height: auto;
        }
    </style>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            const main_slider = $("#main-slider");
            main_slider.owlCarousel({
                rtl: false,
                loop: true,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            });

            const slider_thumb = $("#slider-thumb");
            slider_thumb.owlCarousel({
                rtl: false,
                loop: true,
                margin: 12,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 2
                    }
                }
            });

            // Custom Navigation Events
            $(".customNextBtn").click(function() {
                main_slider.trigger("next.owl.carousel");
            });
            $(".customPrevBtn").click(function() {
                main_slider.trigger("prev.owl.carousel");
            });

            $(".customNextBtn").click(function() {
                slider_thumb.trigger("next.owl.carousel");
            });
            $(".customPrevBtn").click(function() {
                slider_thumb.trigger("prev.owl.carousel");
            });
        });
    </script>
</head>

<body class="font-sans antialiased bg-gray-900 text-white">
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">daisyUI</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>Item 1</a></li>
                <li>
                    <details>
                        <summary>Parent</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 btn btn-ghost mt-[-10px]">Logout</a>
                    @else
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="btn btn-ghost ml-4 text-sm text-gray-700 dark:text-gray-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
    <section>
        <div id="main-slider" class="owl-carousel owl-theme relative">
            <div class="relative w-full bg-cover bg-center"
                style="background-image: url('https://cdn.pixabay.com/photo/2018/08/14/13/23/ocean-3605547_1280.jpg');">
                <div
                    class="bg-overlay grid grid-cols-1 lg:grid-cols-2 py-20 md:py-28 lg:py-32 xl:py-56 px-3 md:px-4 lg:px-8">
                    <!-- Content -->
                    <div class="flex flex-col gap-5 md:gap-8 text-white">
                        <div class="flex flex-col gap-4">
                            <h2 class="text-xl md:text-3xl lg:text-4xl font-semibold">Mukunda - Shotru - Trailer</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="flex gap-3">
                                <p>1h : 56min</p>
                                <p><strong class="font-bold">Genres:</strong> <span>Action</span></p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center gap-3 md:gap-4">
                            <a href="single-video.html" class="btn btn-secondary">Watch Now <i
                                    class="pl-2 fas fa-play"></i></a>
                            <button class="btn btn-primary">Add To List <i class="pl-2 fas fa-plus"></i></button>
                            <button
                                class="outline-icon w-10 h-10 border border-gray-300 rounded-full flex items-center justify-center">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
            <div class="relative w-full bg-cover bg-center"
                style="background-image: url('https://cdn.pixabay.com/photo/2013/10/02/23/03/mountains-190055_1280.jpg');">
                <div
                    class="bg-overlay grid grid-cols-1 lg:grid-cols-2 py-20 md:py-28 lg:py-32 xl:py-56 px-3 md:px-4 lg:px-8">
                    <div class="flex flex-col gap-5 md:gap-8 text-white">
                        <div class="flex flex-col gap-4">
                            <h2 class="text-xl md:text-3xl lg:text-4xl font-semibold">Mukunda - Shotru - Trailer</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="flex gap-3">
                                <p>1h : 56min</p>
                                <p><strong class="font-bold">Genres:</strong> <span>Action</span></p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center gap-3 md:gap-4">
                            <a href="single-video.html" class="btn btn-secondary">Watch Now <i
                                    class="pl-2 fas fa-play"></i></a>
                            <button class="btn btn-primary">Add To List <i class="pl-2 fas fa-plus"></i></button>
                            <button
                                class="outline-icon w-10 h-10 border border-gray-300 rounded-full flex items-center justify-center">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative w-full bg-cover bg-center"
                style="background-image: url('https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287_1280.jpg');">
                <div
                    class="bg-overlay grid grid-cols-1 lg:grid-cols-2 py-20 md:py-28 lg:py-32 xl:py-56 px-3 md:px-4 lg:px-8">
                    <div class="flex flex-col gap-5 md:gap-8 text-white">
                        <div class="flex flex-col gap-4">
                            <h2 class="text-xl md:text-3xl lg:text-4xl font-semibold">Mukunda - Shotru - Trailer</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="flex gap-3">
                                <p>1h : 56min</p>
                                <p><strong class="font-bold">Genres:</strong> <span>Action</span></p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center gap-3 md:gap-4">
                            <a href="single-video.html" class="btn btn-secondary">Watch Now <i
                                    class="pl-2 fas fa-play"></i></a>
                            <button class="btn btn-primary">Add To List <i class="pl-2 fas fa-plus"></i></button>
                            <button
                                class="outline-icon w-10 h-10 border border-gray-300 rounded-full flex items-center justify-center">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block absolute top-[25%] -right-8 bg-slate-700 py-5 pl-5 rounded-xl z-[1] w-[450px] mt-5">
            <div id="slider-thumb" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2018/08/14/13/23/ocean-3605547_1280.jpg"
                        class="w-64 h-72 object-cover rounded-xl" />
                </div>
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2013/10/02/23/03/mountains-190055_1280.jpg"
                        class="w-64 h-72 object-cover rounded-xl" />
                </div>
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287_1280.jpg"
                        class="w-64 h-72 object-cover rounded-xl" />
                </div>
            </div>
            <!-- Slider Nav -->
            <div class="flex flex-row gap-3 pt-4">
                <button type="button" role="presentation"
                    class="customPrevBtn py-1 px-2 rounded-sm bg-primary text-white hover:bg-acent"><i
                        class="fas fa-chevron-left"></i></button>
                <button type="button" role="presentation"
                    class="customNextBtn py-1 px-2 rounded-sm bg-primary text-white hover:bg-acent"><i
                        class="fas fa-chevron-right"></i></button>
            </div>
            <!-- End Slider Nav -->
        </div>
    </section>
</body>

</html>
