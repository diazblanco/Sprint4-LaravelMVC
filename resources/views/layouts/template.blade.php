<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon-->
    <!-- styles-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href={{asset('style.css')}}>
</head>

<body class="bg-repeat" style="background-image: url({{asset('img/goal-net.png')}});">
    <!-- cabecera-->
    <header class="drop-shadow-2xl">
        <div class="top-0 w-full h-full bg-center bg-cover object-cover" style="background-image: url({{asset('img/header-img.jpeg')}});">
            <div class="flex-col items-center justify-center w-full h-full">
                <a href="{{route('home')}}" class="text-left type ml-5 mt-1 text-xl text-red-700/75">#home</a>
                <div class="text-center flex-row">
                    <h1 class="mt-2 type text-gray-900/75 text-8xl tracking-tight mix-blend-multiply">&nbsp;SOCCER<span class="text-2xl spantype text-transparent bg-clip-text bg-gradient-to-r from-red-700 to-red-400 lg:text-9xl italic tracking-normal">league &nbsp; &nbsp;</span></h1>
                </div>
                <div class="text-left">
                    <h2 class="ml-20 w-full text-2xl font-medium text-red-700/75 lg:w-auto type tracking-tighter">lliga infantil mixta de paxangues</h2>
                </div>
            </div>
        </div>
    </header>
    <!-- cabecera-->

    <!-- auto scroll up-->
    <button
        x-cloak x-data="{scroll : false}" x-on:scroll.window="document.documentElement.scrollTop > 200 ? scroll = true : scroll = false"
        x-show="scroll"
        x-on:click="window.scrollTo({top: 0, behavior: 'smooth'})"
        x-transition.opacity.duration.300ms
        class="fixed inline-block w-12 h-12 p-1 text-xs font-medium leading-tight transition duration-150 ease-in-out hover:opacity-70 bottom-4 right-4"
        id="btn-back-to-top"      
        type="button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 h-10 fill-white stroke-red-600 stroke-[1.5px]" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" style="fill-opacity:0.6;"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg>
      </button>

    @yield('content')
    
</body>

</html>