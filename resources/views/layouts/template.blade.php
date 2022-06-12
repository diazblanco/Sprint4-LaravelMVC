<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon-->
    <!-- styles-->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href={{asset('style.css')}}>
</head>

<body class="bg-repeat" style="background-image: url({{asset('img/goal-net.png')}});">
    <!-- cabecera-->
    <header class="shadow-md">
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

    @yield('content')
    
</body>

</html>