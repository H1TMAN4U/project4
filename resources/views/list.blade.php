@extends('layouts/header')


<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


  <style>
    .intro{
        background-repeat: no-repeat;
        background-size: cover;
        background-position: absolute;
        background-image: linear-gradient(rgb(4 9 30 / 21%), rgb(4 9 30 / 60%)), url(https://mykaleidoscope.ru/en/uploads/posts/2022-09/1663731150_1-mykaleidoscope-ru-p-food-on-a-black-background-yeda-oboi-1.jpg);
    }
    </style>

    @foreach ($recipe as $value)
        <div class="container mx-auto">
            <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src={{$value['img']}} alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$value['name']}} </h5>
                    <p class="mb-3 font-normal text-gray-700">{{$value['description']}} </p>
                </div>
            </a>
        </div>

    @endforeach
</x-app-layout>
@extends('layouts/footer')
