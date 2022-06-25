@extends('layouts.template')
@section('title', 'SoccerLeague')
@section('content')
    <div class="container xl:max-w-5xl mx-auto my-0 px-4 pb-2 bg-gradient-to-r from-red-50/50 to-red-300/50 shadow shadow-md shadow-red-400/50 drop-shadow">
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
                <div class="bg-gradient-to-r from-white/75 to-rose-50/75 py-8 px-12 mb-12 border border-rose-600/10 rounded-lg shadow-md shadow-red-400/50 drop-shadow transform transition duration-300 ease-in-out hover:-translate-y-2 h-max flex flex-col justify-between">
                    <div class="inline-block mb-4">
                        <img src="{{asset('img/soccer.png')}}" class="w-2/4 mx-auto h-auto">
                    </div>
                    <a href="{{route('clubs.show', $club->id)}}"><h3 class="text-lg leading-normal mb-2 font-semibold text-rose-800 h-16">{{$club->name}}</h3></a>
                    <div class="display-flex flex-row justify-around mt-10">
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

{{--Partidos--}}  
    <div class="container xl:max-w-5xl mx-auto my-12 px-4 pb-10 bg-gradient-to-r from-red-300/50 to-red-50/50 shadow shadow-md shadow-red-400/50 drop-shadow">
        <div class="flex flex-row justify-between justify-end mx-4">
            <div class="type text-red-600 self-end pt-10 text-3xl font-thin">tots els <span class="font-black">partits de la lliga</span></div>
            <div class="self-end pt-10 flex flex-row">
                {{--botón añadir--}}
                <a href="{{route('partits.create')}}" class="self-end px-4 py-2 rounded-md bg-rose-50 text-rose-600 border border-rose-600/10 hover:bg-gradient-to-r from-red-700 to-red-400 hover:text-white shadow-md shadow-red-400/50 drop-shadow type appearance-none mb-0 mx-2">
                    Afegir partit
                </a>
            </div>
        </div> 

        <div class="flex flex-wrap flex-row -mx-4 text-center">
            <div class="flex flex-col items-center justify-center w-screen py-1">  
                {{--Tabla--}}
                <div class="flex flex-col mt-6">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden sm:rounded-lg">
                                <table class="min-w-full text-sm text-gray-400">
                                    <thead class="bg-gradient-to-t from-red-700 to-red-400 type text-white font-medium">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center tracking-wider">Categoria</th>
                                            <th colspan="3" class="px-6 py-3 text-center tracking-wider">Data i Hora partit</th>
                                            <th scope="col" class="px-6 py-3 text-center tracking-wider">Estat</th>
                                            <th scope="col" class="px-6 py-3 text-center tracking-wider">Local</th>
                                            <th scope="col" class="px-6 py-3 text-center tracking-wider">Visitant</th>
                                            <th colspan="3" scope="col" class="px-6 py-3 text-center tracking-wider">Resultat</th>
                                            <th scope="col" class="px-6 py-3 text-center tracking-wider"></th>
                                            <th scope="col" class="px-6 py-3 text-center tracking-wider"></th>
                                        </tr>
                                    </thead>
                                    @foreach ($matches as $match)
                                    <tbody class="bg-gradient-to-r from-rose-50/75 to-white/75 py-8 px-12 mb-12 border border-rose-600/10 rounded-lg shadow-md shadow-red-400/50 drop-shadow">
                                        <tr>
                                            <td class="pl-6 pr-0 py-4 text-rose-800">{{$match->match_category}}</td>
                                            <td class="pl-6 pr-0 py-4 text-rose-800">{{$match->date_match}}</td>
                                            <td class="px-0 py-4 text-cente text-rose-800r">|</td>
                                            <td class="pl-0 pr-6 py-4 text-rose-800">{{$match->time_match}}</td>
                                            <td class="px-6 py-4 text-rose-800"><?php if ($match->goals_local == null){echo "Pendent";} else {echo "Jugat";}?></td>
                                            <td class="px-6 py-4 text-rose-800">{{$match->name_local}}</td>
                                            <td class="px-6 py-4 text-rose-800">{{$match->name_visiting}}</td>
                                            <td class="pl-9 pr-0 py-4 text-right text-rose-800">{{$match->goals_local}}</td>
                                            <td class="px-0 py-4 text-center text-rose-800">-</td>
                                            <td class="pr-9 pl-0 py-4 text-left text-rose-800">{{$match->goals_visiting}}</td>
                                            <td class="px-0 pl-0 py-4 mr-0 text-left">
                                                {{--botón editar--}}
                                                <a href="{{route('partits.edit', $match->id_matches)}}" class="text-red-400 hover:text-rose-600 mr-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a> 
                                            </td>
                                            <td class="pr-4 pl-0 py-4 text-left">
                                                {{--botón borrar--}}
                                                <form action="{{route('partits.destroy', $match->id_matches)}}" method="POST" class="text-rose-700 hover:text-rose-800">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="m-0 py-2 px-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>                                                
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--///////////////////////////////-->
                
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



{{-- ', 'Alevín', 'Infantil', 'Cadete', 'Juvenil

<div class='light x1'></div><div class='light x2'></div><div class='light x3'></div><div class='light x4'></div><div class='light x5'></div><div class='light x6'></div><div class='light x7'></div><div class='light x8'></div><div class='light x9'></div>

 --}}
{{-- foreach categoria, renderizar la tabla correspondiente con el {{categoria->name}} --}}