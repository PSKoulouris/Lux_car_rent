<div class="mx-auto shadow-md rounded-lg  flex  bg-white mt-5 pt-4">
   

    <!-- creating two div to segregate the page into two parts one for car details and one for car booking -->
    <!-- booking details div starts here -->
    <div class="w-[80%] mx-auto border border-gray-200 bg-white rounded-sm mt-5 pt-4 flex flex-col gap-4 p-4">
        <!-- div for booking details heading -->
    <div class="w-full bg-cyan-600 text-white flex items-center pl-2 font-bold text-1xl">
        Booking Details
    </div>
     <div class="flex border border-gray-400 w-full p-2 bg-gray-100 mt-2 mx-auto">
        <!-- <div class="w-[300px] h-[200px] mt-4 flex flex-col bg-gray-100 p-4">
            <div class="flex">
            <svg class="w-[20px] ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
            <p class="ml-4">Pick up location</p>
            </div>
            <div class="flex mt-2">
            <svg class="w-[20px] ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
            <!-- <p class="ml-4 text-1xl ">Start-date</p>

            </div>
            <div class="flex flex-col ml-12 mt-4">
                <p>Office-hours</p>
                <p>8.00 to 17.00 </p>
            </div>
            
        </div> -->
<!-- 
        <div class="w-[300px] h-[200px] mt-4 flex flex-col bg-gray-100 p-4">
        <div class="flex">
            <svg class="w-[20px] ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
            <p class="ml-4">Drop location</p>
            </div>
            <div class="flex mt-2">
            <svg class="w-[20px] ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.<path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
            <!-- <p class="ml-4 text-1xl">End-date</p>

            </div>
            <div class="flex flex-col ml-12 mt-4">
                <p>Office-hours</p>
                <p>8.00 to 17.00 </p>
            </div>     
        </div>
       
       </div>  -->
        
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