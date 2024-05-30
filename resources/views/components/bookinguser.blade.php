<div class="mx-auto shadow-md rounded-lg  flex  bg-white mt-5 pt-4">
    <!-- creating two div to segregate the page into two parts one for car details and one for car booking -->
    <!-- booking details div starts here -->
    <div class="w-[80%] mx-auto border border-gray-200 bg-white rounded-sm mt-5 pt-4 flex flex-col gap-4 p-4">
        <!-- div for booking details heading -->
    <div class="w-full bg-cyan-600 text-white flex items-center pl-2 font-bold text-1xl">Booking Details</div>
    <div class="flex border border-gray-400 w-full p-2 bg-gray-100 mt-2 mx-auto">
        
    <!-- Details of the customer -->
    <div class=" flex flex-col w-full bg-gray-100 mt-4">
        <p class="ml-4 mt-4">Name: {{ $username }}</p>
        <p class="ml-4 mt-4">Address: {{ $address }}</p>
        <p class="ml-4 mt-4">Email: {{ $email }}</p>
        @if (isset($phoneNumber))
            <p class="ml-4 mt-4">Number phone: {{ $phoneNumber }}</p>
        @endif
        <!-- <p class="ml-4 mt-4">Booking Days_from the dates UP</p>
        <p class="ml-4 mt-4">Booking Amount calculate from the cars weekly or daily * with booking days</p> -->
    </div>
    <!-- <div>
        <form action="#">
            <button class="w-full border bg-gray-300 font-bold text-1xl rounded-xl p-2">Confirm Booking</button>
        </form>
    </div> -->