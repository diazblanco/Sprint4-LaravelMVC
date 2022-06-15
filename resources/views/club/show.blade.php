@extends('layouts.template')
@section('title', 'Club ' . $club->name)

@section('content')
    <div class="container xl:max-w-6xl mx-auto my-0 px-4 bg-white/95 shadow">
        <div class="flex flex-row justify-between justify-end">
            <div class="type text-red-600 self-end">Bienvenido al Club: {{$club->name}}</div>
            <!--vídeo 16, minuto 21 -->
        </div>
    </div> 
@endsection

{{-- @section('content')
    <div class="container xl:max-w-6xl mx-auto my-0 px-4 bg-white/95 shadow">
        <div class="flex flex-row justify-between justify-end mx-4">
            <div class="type text-red-600 self-end pt-10 text-3xl font-thin">els <span class="font-black">equips de {{$club->name}}</span></div>
            <a href="{{route('clubs.create')}}" class="self-end px-4 py-2 rounded-md bg-white text-rose-600 border border-rose-600/10 hover:bg-gradient-to-r from-red-700 to-red-400 hover:text-white mb-12 shadow-md shadow-red-400/50 drop-shadow type appearance-none mb-0">Afegir club
            </a>
        </div>       
        <div class="flex flex-wrap flex-row -mx-4 text-center">
        <!-- Cada equipo -->
        @foreach ($teams as $team)
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp pt-5" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                <div class=" bg-white py-8 px-12 mb-12 border border-rose-600/10 rounded-lg shadow-md shadow-red-400/50 drop-shadow transform transition duration-300 ease-in-out hover:-translate-y-2 h-60">
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">{{$team->name}}</h3>
                </div>
            </div>
        @endforeach   
        </div>
    </div>
@endsection --}}


