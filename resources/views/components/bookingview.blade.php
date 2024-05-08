 <!-- information div -->
 <div class="w-[80%] h-[100px] mx-auto shadow-md rounded-lg  flex bg-white mt-5 pt-4">
    <div class="w-[95%] flex flex-col border border-gray-200 mb-2 mx-auto" >
        <div class="w-full h-[30px] bg-cyan-600 mx-auto pl-2 text-white text-1xl"> Booking Page</div>
         <div class="w-full h-[40px] bg-white mx-auto pl-2 flex items-center font-medium"> Please check all information before conforming booking</div>

    </div>
         

    </div>


<!-- creating a page to view booking details -->
<div class="w-[80%] mx-auto shadow-md rounded-lg  flex  bg-white mt-5 pt-4">
   

    <!-- creating two div to segregate the page into two parts one for car details and one for car booking -->
    <!-- booking details div starts here -->
    <div class="w-[55%] mx-auto border border-gray-200 bg-white rounded-sm mt-5 pt-4 flex flex-col gap-4 p-4">
        <!-- div for booking details heading -->
    <div class="w-full bg-cyan-600 text-white flex items-center pl-2 font-bold text-1xl">
        Booking Details
    </div>
     <div class="flex gap-8 mt-2 mx-auto">
        <div class="w-[300px] h-[250px] bg-gray-100 p-4">
            <div class="flex">
            <svg class="w-[25px] h-[25px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
            <p class="ml-2">Pick up location</p>
            </div>
            
        </div>

        <div class="w-[300px] h-[250px] bg-gray-100 p-4">
        <div class="flex">
            <svg class="w-[25px] h-[25px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
            <p class="ml-2">Drop location</p>
            </div>

        </div>

     </div>


   </div>
   <!-- car details starts here -->
   <div class="w-[40%] mx-auto border border-gray-200 bg-white rounded-sm mt-5 pt-4 flex  flex-col gap-4 p-4">
    <div class="w-full bg-cyan-600 text-white flex items-center pl-2 font-bold text-1xl">
        Car Details
    </div>
      
     <div class="">
        <img src="{{ asset($image) }}" alt="" class="w-[500px] h-[350px] bg-gray-200 bg-cover">
     </div>
     <!-- starting div for content -->
     <div class="flex flex-col p-2 w-[500px]">
        <p class="border bg-gray-200 text-2xl font-bold rounded-sm mb-2 pl-2">{{ $name }}</p>
        <div class="flex mb-2">
        <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm w-[150px] ">{{ $model }}</p>
        <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm ml-6 w-[150px] ">{{ $year }}</p>

        </div>
       
        <p class="border bg-gray-200 text-1xl font-bold rounded-sm pl-2 ">{{ $regno }}</p>
        <div class="flex mt-2 mb-2 gap-2">
        <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm w-[100px]">{{ $type }}</p>
        <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm w-[100px]">{{ $seat }}</p>
        <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm w-[100px]">{{ $door }}</p>

        </div>
        

     </div>

   </div>


</div>