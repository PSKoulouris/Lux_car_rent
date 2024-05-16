
   <div class="mx-auto border border-gray-200 bg-white rounded-sm mt-5 pt-4 flex  flex-col gap-4 p-4">
       <div class="w-full bg-cyan-600 text-white flex items-center pl-2 font-bold text-1xl">
        Car Details
       </div>
         {{-- car view inside booking page with all the details --}}
        <div class="">
           <img src="{{ asset($image) }}" alt="" class="w-[500px]  bg-gray-200 bg-cover">
        </div>
     <!-- starting div for content -->
     {{-- All the details inside the car-card for booking --}}
     <div class="flex flex-col p-2 w-[500px]">
          <p class="border  w-[400px] bg-gray-200 text-2xl font-bold rounded-lg mb-2 pl-2">{{ $name }}</p>
           <div class="flex mb-2">
              <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg w-[200px] ">{{ $model }}</p>
              <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg  w-[200px] ">{{ $year }}</p>
           </div>
       
             <p class="border bg-gray-200 w-[400px] text-1xl font-bold rounded-sm pl-2 ">{{ $regno }}</p>
              <div class="flex mt-2 mb-2 gap-2">
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg w-[130px]">{{ $type }}</p>
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg w-[130px]">{{ $seat }}</p>
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg w-[130px]">{{ $door }}</p>
             </div>
            <div class="flex mt-2 mb-2 gap-2">
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg w-[130px]">{{ $fuel }}</p>
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg w-[130px]">Daily price: {{$dailyRate}}&euro;</p>
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg w-[130px]">Best price: {{$weeklyRate}}&euro;</p>
        </div>
     </div>
   </div>
