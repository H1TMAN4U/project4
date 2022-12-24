<x-app-layout>

</head>
<style>
.intro
    {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: linear-gradient(rgb(0 0 0 / 22%), rgb(4 9 30 / 88%)), url("/images/background-image.jpg");   
    height: 95vh;
    }
</style>
<body>
    <section class="intro">
        <div class="container mx-auto p-4 ">    
            @yield('content')
    
        </div>
    </section>


</body>
</html>
</x-app-layout>
@extends('layouts/footer')

