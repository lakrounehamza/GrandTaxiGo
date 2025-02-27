@extends('layouts.navbar')

@section('content')


/**
*
*
*
*/

<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                            depart
                        </label>
                        <input type="text" name="fName" id="fName" placeholder="First Name"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                            arrive
                        </label>
                        <select id="fromcity" name="fromcity" class="peer w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none">
                    <option value="" disabled selected>Select From City</option>
                    <!-- Add more options as needed -->
                </select>
                    </div>
                </div>
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                            temps
                        </label>
                        <select id="tocity" name="tocity" class="peer w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none">
                    <option value="" disabled selected>Select To City</option>
                    <!-- Add more options as needed -->
                </select>
                    </div>
                </div>
            </div>
            <div>
                <button
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>




<script> 

async function afiche() {
    const fromcity =  document.getElementById('fromcity');
    const tocity =  document.getElementById('tocity');
    const response = await fetch("/get-cities");
    const citys = await response.json();
    console.log(citys);

    cities.forEach(city => {
        let option = document.createElement("option"); 
        option.textContent = city.ville; 
        fromcity.appendChild(option);
    })

afiche()

</script>

/**
*
*
*
*
*/
