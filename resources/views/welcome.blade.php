<x-guest-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


  <style>
    .intro{
        background-repeat: no-repeat;
        background-size: cover;
        background-position: absolute;
        background-image: linear-gradient(rgb(4 9 30 / 21%), rgb(4 9 30 / 60%)), url(https://mykaleidoscope.ru/en/uploads/posts/2022-09/1663731150_1-mykaleidoscope-ru-p-food-on-a-black-background-yeda-oboi-1.jpg);
    }
    </style>
    <body class="antialiased bg-white">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            {{-- {{-- @extends('layouts/navigation1') --}}
            @section('content') --}}
            <section class="intro" style="height: 95vh;">
                <div class="" style="padding: 5% 5% 0 5%" >
                <div id="indicators-carousel" class="relative" data-carousel="static" style="z-index: 0">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden rounded-lg md:h-96 max-w-full h-auto" style="height: 30rem;">
                         <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div>
                  <h1 class="text-white text-4xl" style=" padding: 5% 15% 5% 15%; text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero at doloribus odit, cumque nemo voluptatem saepe sed deserunt omnis ea.</h1>
                </div>
            </div>
            </section>
            
            <footer class="p-4 shadow md:px-6 md:py-8 dark:bg-gray-900">
              <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
              </span>
            </footer>

</x-guest-layout>