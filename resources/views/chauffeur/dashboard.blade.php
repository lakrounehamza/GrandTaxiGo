@extends('layouts.navbar')

@section('content')








<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200"> 

    @foreach($lesReservation as $reservation)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{$reservation->name}}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{$reservation->email}}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{$reservation->depart . ' -> '. $reservation->arrive}}</td>
            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">{{$reservation->statutRes}}</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <form method="POST" action="">
                    <input name="id" value="{{$reservation->id}}" class="hidden">
                    <button  type="submit" name="accepte" class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">accepte</button>
                    <button type="submit" name="annule" class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">annule</button>
                </form>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>



@endsection

