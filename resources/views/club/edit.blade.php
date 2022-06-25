@extends('layouts.template')
@section('title', 'Actulizar club')

@section('content')
    <div class="container xl:max-w-4xl mx-auto my-0 px-4 bg-gradient-to-r from-red-50/50 to-red-300/50 shadow">
        <div class="flex flex-row justify-between justify-end mx-16">
            <div class="type text-red-600 self-end pt-10 text-3xl font-thin">actualitzar <span class="font-black">club</span></div>
        </div>
        <div class="w-full px-16 pt-0 pb-10 mt-6 overflow-hidden rounded-lg lg:max-w-4xl">
          <div class="w-full px-6 py-4 bg-white/90 rounded shadow-md ring-1 ring-gray-900/10">
            <form method="POST" action="{{route('clubs.update', $club)}}">
              @csrf
              @method('put')
              <div>
                <label class="block text-sm font-bold text-rose-800" for="title">
                  Nom del club
                </label>
                <input
                  class="block w-full mt-1 border-rose-300 rounded-md shadow-sm placeholder:text-grey-100 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="name" value="{{old('name', $club->name)}}" placeholder="Indica el nom del club"/>
                  {{-- @error('name')<br><small>*{{$message}}</small><br>@enderror --}}
              </div>
              <div>
                <label class="block text-sm pt-5 font-bold text-rose-800" for="title">
                  Localitat
                </label>
                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-grey-100 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="location" value="{{old('location', $club->location)}}" placeholder="A quina localitat pertany"/>
                  {{-- @error('location')<br><small>*{{$message}}</small><br>@enderror --}}
              </div>
              <div>
                <label class="block text-sm pt-5 font-bold text-rose-800" for="title">
                  Color de l'equipació
                </label>
                <select
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm text-rose-800 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  name="color" value="{{old('color', $club->color)}}">
                  <option value="{{$club->color}}">{{$club->color}}</option>
                  <option value="Blau">Blau</option>
                  <option value="Verd">verd</option>
                  <option value="Groc">groc</option>
                  <option value="Taronja">Taronja</option>
                  <option value="Vermell">Vermell</option>
                </select>
                {{-- @error('color')<br><small>*{{$message}}</small><br>@enderror --}}
              </div>
              <div class="flex items-center justify-start mt-4 gap-x-2">
                <button type="submit"
                  class="self-end px-4 py-2 mt-5 rounded-md bg-rose-50 text-rose-600 border border-rose-600/10 hover:bg-gradient-to-r from-red-700 to-red-400 hover:text-white shadow-md shadow-red-400/50 drop-shadow type appearance-none mb-0 font-black">
                  Actualitzar
                </button>
              </div>
            </form>
            {{-- Errors --}}
            @if (count($errors) > 0)
                <div class="mt-5 bg-rose-100 border border-red-400 text-rose-800 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">oh, noo!</strong><br>
                    @foreach($errors->all() as $error)
                    <span class="block sm:inline">{{ $error }} </span><br>
                    @endforeach
                </div>
            @endif
            {{-- END Errors --}}
          </div>
        </div>      
        <div class="flex flex-wrap flex-row -mx-4 text-center">
          
        </div>
        <div class="flex flex-row-reverse">
          <a href="{{route('home')}}" class="flex flex-row self-end px-4 py-2 text-rose-800 hover:text-red-400 type appearance-none mb-0">
              <svg class="mr-2 pb-2" width="24" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.02698 11.9929L5.26242 16.2426L6.67902 14.8308L4.85766 13.0033L22.9731 13.0012L22.9728 11.0012L4.85309 11.0033L6.6886 9.17398L5.27677 7.75739L1.02698 11.9929Z" fill="currentColor" />
              </svg>
              Tornar
          </a>
      </div>
    </div>

@endsection

