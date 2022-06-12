@extends('layouts.template')
@section('title', 'SoccerLeague')
@section('content')
    <div class="container xl:max-w-6xl mx-auto my-0 px-4 bg-white/95 shadow">
        <div class="flex flex-row justify-between justify-end mx-4">
            <div class="type text-red-600 self-end pt-10 text-3xl">els <span class="font-black">equips de la lliga</span></div>
            <a href="{{route('clubs.create')}}" class="self-end px-4 py-2 rounded-md bg-white text-rose-600 border border-rose-600/10 hover:bg-gradient-to-r from-red-700 to-red-400 hover:text-white mb-12 shadow-md shadow-red-400/50 drop-shadow type appearance-none mb-0">Afegir club
            </a>
        </div>       
        <div class="flex flex-wrap flex-row -mx-4 text-center">
        <!-- Cada club -->
        @foreach ($clubs as $club)
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp pt-5" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                <div class=" bg-white py-8 px-12 mb-12 border border-rose-600/10 rounded-lg shadow-md shadow-red-400/50 drop-shadow transform transition duration-300 ease-in-out hover:-translate-y-2 h-60">
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">{{$club->name}}</h3>
                    <div class="display-flex flex-row justify-around mb-4"></div>    
                </div>
            </div>
        @endforeach   
        </div>
    </div>
@endsection
