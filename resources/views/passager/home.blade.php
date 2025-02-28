



/**
*
*
*
*/

@extends('layouts.navbar')

@section('content')





<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:grid-cols-3 lg:gap-8  p-4">



        
 
  <!-- card  -->
 @foreach($lesTrajet as $trajet)

<div class="max-w-2xl mt-4 mx-auto bg-gray-900 shadow-lg rounded-2xl">
  <form method="POST" action="{{ route('reservation.store') }}">
    @csrf
    <div class="px-6 py-5">
      <input type="hidden" name="id_trajet" value="{{ $trajet->id }}">
      <input type="hidden" name="id_passager" value="{{Auth::user()->id}}">
      <input type="hidden" name="statut" value="encours">


      <div class="flex items-start">
        <div class="flex-grow truncate">
          <div class="w-full sm:flex justify-between items-center mb-3">
            <h2 class="text-2xl leading-snug font-extrabold text-gray-50 truncate mb-1 sm:mb-0">
              {{ $trajet->name }}
            </h2>
          </div>

          <span class="px-2 py-0.5 font-semibold text-sm rounded-lg text-white">
            {{ $trajet->email }}
          </span>

          <div class="flex items-end justify-between whitespace-normal mt-2">
            <div class="max-w-md text-indigo-100">
              <p class="mb-2">{{ $trajet->depart }} → {{ $trajet->arrive }}</p>
            </div>
          </div>

          <div class="flex items-center mt-4">
            <div class="flex gap-4 items-center mr-4">
              <span class="text-white">Nombre de places : 0</span>
              <button type="submit" class="cursor-pointer text-white bg-red-500 px-4 py-2 rounded-lg">
                Réserver
              </button>
            </div>
            <span class="text-sm text-gray-400">10:01 AM</span>
          </div>
        </div>  
      </div>
    </div>
  </form>
</div>
@endforeach

  <!-- end card  -->

  

  <!-- end card  -->
  

</div>



<p>

/**
*
*
*
*/

@endsection