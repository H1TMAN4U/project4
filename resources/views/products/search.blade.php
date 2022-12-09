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
    <div class="flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src={{$value['img']}} alt=""/>
            </a>
            <div class="p-6">
                <h5 class="text-black-900 text-xl font-medium mb-2">{{$value['name']}}</h5>
                <div class="text-gray-700 text-base mb-4">
                    <div>
                        <h1 for="Description"><b>Description:</b></h1>
                        <p>{{$value['description']}}</p>

                        <h1 for="Instructions"><b>Instructions:</b></h1>
                        <p>{{$value['instructions']}}</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endforeach

    <footer class="p-4 shadow md:px-6 md:py-8 dark:bg-white-100">
        <span class="block text-sm text-gray-700 sm:text-center dark:text-gray-700">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
        </span>
    </footer>
    </body>
    </html>
</x-app-layout>
