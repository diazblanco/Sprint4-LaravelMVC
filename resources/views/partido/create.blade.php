@extends('layouts.template')
@section('title', 'Nou partit')

@section('content')
    <div class="container xl:max-w-4xl mx-auto my-0 px-4 bg-white/95 shadow">
        <div class="flex flex-row justify-between justify-end mx-16">
            <div class="type text-red-600 self-end pt-10 text-3xl font-thin">crear <span class="font-black">partit</span></div>
        </div>
        <div class="w-full px-16 pt-0 pb-10 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
          <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <form method="POST" action="{{route('partits.store')}}">
            @csrf
            {{-- Fecha --}}
                <div class="flex justify-between">
                    <div class="w-1/2 pr-2">
                        <label class="block text-sm font-bold text-rose-800" for="title">Data del parti</label>
                        <input type="date" name="match_date" class="block w-full mt-1 border-rose-300 rounded-md shadow-sm placeholder:text-grey-100 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-red-400" placeholder="Indica el dia i hora que tindrà lloc el partit" value="{{old('date')}}"/>
                        @error('date')<br><small>*{{$message}}</small><br>@enderror
                    </div>
                    <div class="w-1/2 pl-2">
                        <label class="block text-sm font-bold text-rose-800" for="title">Hora del parti</label>
                        <input type="time" name="match_time" class="block w-full mt-1 border-rose-300 rounded-md shadow-sm placeholder:text-grey-100 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-red-400" placeholder="Indica el dia i hora que tindrà lloc el partit" value="{{old('time')}}"/>
                    </div>
                </div>
                @error('time')<br><small>*{{$message}}</small><br>@enderror
            {{-- categoría --}}
                <div>
                    <label class="block text-sm pt-5 font-bold text-rose-800" for="title">Categoria</label>
                    <select name="category" class=" block w-full mt-1 border-gray-300 rounded-md shadow-sm text-red-400 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{old('category')}}">
                        <option value="">Categoria</option>
                        <option value="Benjamín">Benjamín</option>
                        <option value="Alevín">Alevín</option>
                        <option value="Infantil">Infantil</option>
                        <option value="Cadete">Cadete</option>
                        <option value="Juvenil">Juvenil</option>
                    </select>
                </div>
                @error('category')<br><small>*{{$message}}</small><br>@enderror
                <div class="flex justify-between">
                {{-- Equipo local --}}
                    <div class="w-1/2 pr-2">
                        <label class="block text-sm pt-5 font-bold text-rose-800" for="title">Equip local</label>
                        <select name="team_id_local" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm text-red-400 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{old('team_id_local')}}">
                            @foreach ($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                        @error('team_id_local')<br><small>*{{$message}}</small><br>@enderror
                    </div>
                {{-- Equipo visitante --}}
                    <div class="w-1/2 pl-2">
                        <label class="block text-sm pt-5 font-bold text-rose-800" for="title">Equip visitant</label>
                        <select name="team_id_visiting" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm text-red-400 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{old('team_id_visiting')}}">
                            @foreach ($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                        @error('team_id_visiting')<br><small>*{{$message}}</small><br>@enderror
                    </div>
                </div>
                <div class="flex justify-between">
                {{-- Goles local --}}
                    <div class="w-1/2 pr-2">
                        <label class="block text-sm pt-5 font-bold text-rose-800" for="title">Gols equip local</label>
                        <input name="local_goals" type="number" min="0"
                        class="block w-full mt-1 border-rose-300 rounded-md shadow-sm placeholder:text-red-200 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-red-400" placeholder="Gols marcats per l'equip local" value="{{old('visiting_local')}}"/>
                    </div>
                {{-- Goles visitante --}}
                    <div class="w-1/2 pl-2">
                        <label class="block text-sm pt-5 font-bold text-rose-800" for="title">Gols equip visitant</label>
                        <input name="visiting_goals" type="number" min="0"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-red-200 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-red-400" placeholder="Gols marcats per l'equip visitant" value="{{old('visiting_goals')}}"/>   
                    </div>
                </div>
            {{-- Enviar --}}
                <div class="flex items-center justify-start mt-4 gap-x-2">
                    <button type="submit" class="self-end px-4 py-2 mt-5 rounded-md bg-rose-50 text-rose-600 border border-rose-600/10 hover:bg-gradient-to-r from-red-700 to-red-400 hover:text-white shadow-md shadow-red-400/50 drop-shadow type appearance-none mb-0 font-black">
                        Crear
                    </button>
                </div>
            </form>
            {{-- Errors --}}
            <div class="bg-rose-400 text-white">
                @if (count($errors) > 0)
                <div class="r">
                    <div class="">
                        <div class="">
                            @foreach($errors->all() as $error)
                            {{ $error }} <br>
                            @endforeach      
                        </div>
                    </div>
                </div>
                @endif
            </div>
            {{-- END Errors --}}
          </div>
        </div>      

    </div>

@endsection