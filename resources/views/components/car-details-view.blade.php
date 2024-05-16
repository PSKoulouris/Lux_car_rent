<div class="w-[80%] h-[100px] mx-auto shadow-md rounded-lg  flex bg-white mt-5 pt-4">
    <div class="w-[95%] flex flex-col border border-gray-200 mb-2 mx-auto" >
        <div class="w-full h-[30px] bg-cyan-600 mx-auto pl-2 text-white text-1xl">Car Details page</div>
         <div class="w-full h-[40px] bg-white mx-auto pl-2 flex items-center font-medium"> Explore our sleek and reliable {{$name}} designed to elevate your driving experience with modern features and exceptional comfort.</div>
    </div>
</div>

<div class="w-[80%] mx-auto border border-gray-200 bg-white rounded-sm mt-5 pt-4 flex  flex-col gap-4 p-4">
    <div class="w-[95%] flex flex-col border border-gray-200 mb-2 mx-auto">
       <div class=" bg-cyan-600 text-white mx-auto w-full flex items-center pl-2 font-bold text-1xl">
            Car Details
       </div>
       {{-- "Unleash Your Journey. Rent the Experience." --}}
       <!-- {{-- car view inside booking page with all the details --}} -->
    
       <div class="flex justify-between">
          <div class="w-[500px]">
            <img src="{{ asset($image) }}" alt="" class="bg-gray-200 bg-cover">
          </div>
           <!-- starting div for content -->
            <!-- {{-- All the details inside the car-card for booking --}} -->
          <div class="flex flex-col p-2 w-[500px]">
             <p class="border  w-[400px] bg-gray-200 text-2xl font-bold rounded-sm mb-2 pl-2">{{$name}}</p>
             <div class="flex mb-2">
             <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm w-[150px] ">{{$model}}</p>
             <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm ml-6 w-[150px] ">{{$year}}</p>
             </div>
             <div class="flex mb-2">
              <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm w-[150px] ">{{$type}} </p>
              <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm ml-6 w-[150px] ">{{$fuel}}</p>
              </div>
             <p class="border bg-gray-200 w-[400px] text-1xl font-bold rounded-sm pl-2 "></p>
             <div class="flex mt-2 mb-2 gap-2">
             <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm w-[100px]">{{$regno}}</p>
             <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm w-[100px]">Places: {{$seat}}</p>
             <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm w-[100px]">Doors: {{$door}}</p>
            </div>
            {{-- DON'T USE _ FOR DECLARATION OF VARIABLES !!!!! --}}
            <div class="flex mb-2">
              <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm w-[150px] ">Daily price: {{$dailyRate}}&euro;</p>
              <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-sm ml-6 w-[150px] ">Best price: {{$weeklyRate}}&euro;</p>
              </div>
          </div>

      </div>

      <div>
    
            
       <a href="/booking/{{$id}}" class="w-[90%] ml-12 mb-2 border bg-gray-300 font-bold text-1xl rounded-xl p-2 mt-8">Make your choise</a> 
                 
      </div>
    </div>
 </div>
    
     
   

