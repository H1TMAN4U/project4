@extends('layouts/header')
<x-app-layout>
  <style>
    .intro{
        background-repeat: no-repeat;
        background-size: cover;
        background-position: absolute;
        background-image: linear-gradient(rgb(4 9 30 / 21%), rgb(4 9 30 / 60%)), url(https://mykaleidoscope.ru/en/uploads/posts/2022-09/1663731150_1-mykaleidoscope-ru-p-food-on-a-black-background-yeda-oboi-1.jpg);
    }
    </style>
    @foreach ($ingredients as $value)

            <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src={{$value['img']}} alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 dark:text-white">{{$value['name']}}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$value['description']}}</p>
                </div>
            </a> 
    @endforeach

    <footer class="p-4 shadow md:px-6 md:py-8 dark:bg-white-100">
        <span class="block text-sm text-gray-700 sm:text-center dark:text-gray-700">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
        </span>
    </footer>
    </body>
    </html>
</x-app-layout>
