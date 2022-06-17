@extends('layouts.template')

@section('title', 'SoccerLeague')

@section('content')
    <div class="container xl:max-w-6xl mx-auto my-0 px-4 bg-white/95 shadow">
        <div class="flex flex-row justify-between justify-end mx-4">
            <div class="type text-red-600 self-end pt-10 text-3xl font-thin">els <span class="font-black">clubs de la lliga</span></div>
            <a href="{{route('clubs.create')}}" class="self-end px-4 py-2 rounded-md bg-rose-50 text-rose-600 border border-rose-600/10 hover:bg-gradient-to-r from-red-700 to-red-400 hover:text-white mb-12 shadow-md shadow-red-400/50 drop-shadow type appearance-none mb-0">
                Afegir club
            </a>
        </div>       
        <div class="flex flex-wrap flex-row -mx-4 text-center">
        <!-- Cada club -->
        @foreach ($clubs as $club)
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp pt-5" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                <div class="bg-white py-8 px-12 mb-12 border border-rose-600/10 rounded-lg shadow-md shadow-red-400/50 drop-shadow transform transition duration-300 ease-in-out hover:-translate-y-2 h-60 flex flex-col justify-between">
                    <a href="{{route('clubs.show', $club->id)}}"><h3 class="text-lg leading-normal mb-2 font-semibold text-black">{{$club->name}}</h3></a>

                    <div class="display-flex flex-row justify-around mb-4">
                        <!-- botón actualizar -->
                        <div>
                            <a href="{{route('clubs.edit', $club)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>
                        </div>
                        <!-- botón eliminar -->
                        <div>
                            <form action="{{route('clubs.destroy', $club)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-rose-700 hover:text-rose-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach   
        </div>
    </div>
@endsection
