@extends('layouts.template')
@section('title', 'Actulizar club')

@section('content')
    <div class="container xl:max-w-4xl mx-auto my-0 px-4 bg-white/95 shadow">
        <div class="flex flex-row justify-between justify-end mx-16">
            <div class="type text-red-600 self-end pt-10 text-3xl font-thin">actualitzar <span class="font-black">club</span></div>
        </div>
        <div class="w-full px-16 pt-0 pb-10 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
          <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <form method="POST" action="{{route('clubs.update', $club)}}">
              @csrf
              @method('put')
              <div>
                <label class="block text-sm font-bold text-rose-800" for="title">
                  Nom del club
                </label>
                <input
                  class="block w-full mt-1 border-rose-300 rounded-md shadow-sm placeholder:text-grey-100 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="name" value="{{$club->name}}" placeholder="Indica el nom del club" required/>
              </div>
              <div>
                <label class="block text-sm pt-5 font-bold text-rose-800" for="title">
                  Localitat
                </label>
                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-grey-100 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="location" value="{{$club->location}}" placeholder="A quina localitat pertany" required/>
              </div>
              <div>
                <label class="block text-sm pt-5 font-bold text-rose-800" for="title">
                  Color de l'equipació
                </label>
                <select
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm text-rose-800 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  name="color" value="{{$club->color}}" required>
                  <option value="red">Vermell</option>
                  <option value="blue">Blau</option>
                  <option value="green">verd</option>
                  <option value="yellow">groc</option>
                  <option value="orange">Taronja</option>
                </select>
              </div>
              <div class="flex items-center justify-start mt-4 gap-x-2">
                <button type="submit"
                  class="self-end px-4 py-2 mt-5 rounded-md bg-rose-50 text-rose-600 border border-rose-600/10 hover:bg-gradient-to-rnfrom-red-700 to-red-400 hover:text-white shadow-md shadow-red-400/50 drop-shadow type appearance-none mb-0 font-black">
                  Actualitzar
                </button>
              </div>
            </form>
          </div>
        </div>      
        <div class="flex flex-wrap flex-row -mx-4 text-center">
          
        </div>
    </div>

@endsection
