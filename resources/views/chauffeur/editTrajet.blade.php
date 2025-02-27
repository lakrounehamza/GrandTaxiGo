
@extends('layouts.navbar')

@section('content')

<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form method="POST" action="{{route('trajet.update')}}">
            @csrf
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <input value="en cours" name="statut"  class="hidden " />
                        <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                            depart
                        </label>
                        <input type="text" name="depart" id="depart" placeholder="depart" value="{{$trajet->depart}}" 
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="arrive" class="mb-3 block text-base font-medium text-[#07074D]">
                              arrive
                        </label>
                        <input type="text" name="arrive" id="arrive" placeholder="arrive" value="{{$trajet->arrive}}" 
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
            </div> 
            <input value="{{$trajet->id_chauffeur}}" name="id_chauffeur"  class="hidden " />
            <div>
                <button  dtype='submit'
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>



@endsection