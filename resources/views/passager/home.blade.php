



/**
*
*
*
*/

@extends('layouts.navbar')

@section('content')





<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:grid-cols-3 lg:gap-8  p-4">





  <!-- card  -->


<div class="max-w-2xl mt-4 mx-auto bg-gray-900 shadow-lg rounded-2xl">
  <form method="POST" action="{{route()}}">
    <div class="px-6 py-5">
      <div class="flex items-start">
        <div class="flex-grow truncate">
          <div class="w-full sm:flex justify-between items-center mb-3">
            <h2 class="text-2xl leading-snug font-extrabold text-gray-50 truncate mb-1 sm:mb-0"> hamza lakroune</h2>
          </div><span class=" px-2 py-0.5 font-semibold text-sm rounded-lg text-white">090909</span>
          <span class=" px-2 py-0.5 font-semibold text-sm rounded-lg text-white"></span>
          <span class="px-2 py-0.5 font-semibold text-sm rounded-lg text-white"></span>
          <div class="flex items-end justify-between whitespace-normal">
            <div class="max-w-md text-indigo-100">
              <p class="mb-2">safi ->  casa</p>
            </div>
          </div>
          <div class="flex items-center  ml-4">
            <div class="flex gap-4  items-center mr-4">
             <span class="text-white">numbre blase des 0</span><button class="cursor-pointer text-white bg-red-500  rounded-lg ">reser</button>
            </div><span class="text-sm text-gray-400"> 10:01 AM</span>
          </div>
        </div>  
      </div>
    </div>
    <input value="3"  class="hidden" name="id_passager"/>
    <input value="2" class="hidden"  name="id_trajet"/>
  </form>
</div>


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