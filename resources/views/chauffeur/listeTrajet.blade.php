@extends('layouts.navbar')

@section('content')





/**
*
*
*
*/



<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> id</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">depart</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">arrive</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($lestrajet as $trajet)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{$trajet->id}}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{$trajet->depart}}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{$trajet->arrive}}</td>
            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">{{$trajet->statut}}</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <form method="POST" action="{{route('trajet.edit',$trajet->id)}}"> 
                    @csrf
                <button   class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</button>
                </form>
                <form  method="POST" action="{{route('trajet.delete',$trajet->id)}}">
                    @csrf
                    @method('DELETE')
                    <button  class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


/**
*
*
*
*/

@endsection