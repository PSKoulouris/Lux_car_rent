<div class="w-[80%] h-[100px] mx-auto shadow-md rounded-lg  flex bg-white mt-5 pt-4">
    <div class="w-[95%] flex flex-col border border-gray-400 mb-2 mx-auto" >
        <div class="w-full h-[30px] bg-cyan-600 mx-auto pl-2 text-white text-2xl">Car Details page</div>
        <div class="w-full h-[40px] bg-white mx-auto pl-2 flex items-center  text-1xlfont-medium"> Explore our sleek and reliable {{$name}} designed to elevate your driving experience with modern features and exceptional comfort.</div>
    </div>
</div>

<div class="w-[80%] mx-auto border border-gray-200 bg-white rounded-sm mt-5 pt-4 flex  flex-col gap-4 p-4">
  <div class="w-[95%] flex flex-col border border-gray-400 mb-2 mx-auto">
    <div class=" bg-cyan-600 text-white w-full flex items-center pl-2 font-bold text-2xl">Car Details</div>
       {{-- "Unleash Your Journey. Rent the Experience." --}}
       <!-- {{-- car view inside booking page with all the details --}} -->
      <div class="flex gap-8">
        <div class="w-[500px] flex items-center justify-center ml-4 mt-5 mb-4">
          <img src="{{ asset($image) }}" alt="" class="bg-gray-200">
        </div>
          <!-- starting div for content -->
          <!-- {{-- All the details inside the car-card for booking --}} -->
        <div class="flex flex-col p-2 w-[500px] mt-5">
          <p class="border  w-[400px] bg-gray-200 text-2xl font-bold rounded-lg mb-2 pl-2">{{$name}}</p>
          <div class="flex mb-2">
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg w-[195px] ">{{$model}}</p>
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg ml-px w-[195px] ">{{$year}}</p>
          </div>
          <div class="flex mb-2">
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg w-[195px] ">{{$type}} </p>
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg ml-px  w-[195px] ">{{$fuel}}</p>
          </div>
          <div class="flex mt-2 mb-2 ">
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg ml-px w-[130px]">{{$regno}}</p>
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg ml-px w-[130px]">Places: {{$seat}}</p>
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg ml-px w-[130px]">Doors: {{$door}}</p>
          </div>
          {{-- DON'T USE _ FOR DECLARATION OF VARIABLES !!!!! --}}
          <div class="flex mb-2">
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg w-[200px] ">Daily price: {{$dailyRate}}&euro;</p>
            <p class="border bg-gray-200 text-1xl flex justify-center items-center font-bold rounded-lg  w-[200px] ">Best price: {{$weeklyRate}}&euro;</p>
          </div>
        </div>
      </div>
 </div>
 <div class="w-full flex justify-center items-center">    
    <a href="/booking/{{$id}}" class="border bg-gray-300 font-bold text-1xl rounded-xl p-2 ">Make your choise</a>                
  </div>
</div>
    
     
   

