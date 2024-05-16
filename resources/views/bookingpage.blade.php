<x-mainlayout >
    <x-nav-picture></x-nav-picture>
    
    <div class="w-[80%] h-[100px] mx-auto shadow-md rounded-lg  flex bg-white mt-5 pt-4" id="bookingpage">
    <div class="w-[95%] flex flex-col border border-gray-200 mb-2 mx-auto" >
        <div class="w-full h-[30px] bg-cyan-600 mx-auto pl-2 text-white text-1xl"> Booking Page</div>
         <div class="w-full h-[40px] bg-white mx-auto pl-2 flex items-center font-medium"> Please check all information before conforming booking</div>
    </div>
    </div>
    <div class="w-[80%] mx-auto shadow-md rounded-lg bg-white mt-5 p-4 flex flex-col gap-4 " id="content">

    <form action="{{ route('bookingdetails') }}" method="post" class="mt-6 space-y-6">
        @csrf
        
        <input type="text" value="{{$users->id}}" id="user_id" name="user_id" hidden>
        <input type="text" value="{{$singlecar->id}}" id="car_id" name="car_id" hidden>
        <div>
        <label class= 'block font-medium text-sm text-gray-700' for="fname">Name</label>
        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" name="fname" id="fname" value="{{ $users->name }}">
        </div>
        <div>
        <label class= 'block font-medium text-sm text-gray-700' for="address">Address</label>
        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" name="address" id="address" value="{{ $users->address}}">
        </div>
        <div>
        <label class= 'block font-medium text-sm text-gray-700' for="email">Email</label>
        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" name="email" id="email" value="{{ $users->email}}">
        </div>
        <div>
        <label class= 'block font-medium text-sm text-gray-700' for="start-date">Startdate</label>
        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="date" min="5/16/2024" name="start-date" id="start-date" >
        </div>
        <div>
        <label class= 'block font-medium text-sm text-gray-700' for="end-date">End date</label>
        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="date" min="5/16/2024" name="end-date" id="end-date" >
        </div>
        <div>
        <label class= 'block font-medium text-sm text-gray-700' for="carname">car name</label>
        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text"  name="carname" id="carname" value="{{ $singlecar->name }}" >
        </div>
        <div>
        <label class= 'block font-medium text-sm text-gray-700' for="carregno">car Registration number</label>
        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" name="carregno" id="carregno" value="{{ $singlecar->car_registration_nbr }}">
        </div>
        <div>
        <label class= 'block font-medium text-sm text-gray-700' for="amount">weekly Rate</label>
        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text"  name="amount" id="amount" value="{{ $singlecar->weekly_rate }}" >
        </div>
        <button class="w-full border bg-gray-300 font-bold text-1xl rounded-xl p-2" id="bookingpage">Confirm Booking</button>

    </form>

    </div>

    
    <x-bookingreciept></x-bookingreciept>
</x-mainlayout>


