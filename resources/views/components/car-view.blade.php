<div class="w-[260px] h-[320px] flex flex-col justify-center items-center shadow-md bg-gray-300 mx-auto rounded-xl" >
    <div class="rounded-xl w-[90%] mx-auto bg-gray-500">
          <!-- <img src="images/dark1.webp" alt="" class="object-cover  w-[150px] h-[150px]"> -->
          <img src="{{ $image }}" class="w-[240px] h-[150px]">
    </div>
    <div class="flex flex-col">
        {{-- passing the arguments here for the car info/view --}}
        <p class="bg-gray-100 w-[240px] font-bold text-center mt-1 rounded-xl">{{ $nameCar }}</p>
        <p class="bg-gray-100 w-[200px]font-bold text-center mt-1 rounded-xl ">model name</p>
        <div class="flex gap-4">
            <p class="bg-gray-100 w-[100px] font-bold text-center mt-1 rounded-xl">4 seat</p>
            <p class="bg-gray-100 w-[100px] font-bold text-center mt-1 rounded-xl">Doors</p>
        </div>  
        <div class="flex justify-end">
            <p class="font-medium bg-gray-100 w-[150px] text-center mt-1 rounded-xl">Best price &#8364;54</p>
        </div>  
        <form action="#">
            <button type="submit" class="w-full bg-gray-400 border-2 mt-1 text-black rounded-xl">Book Car</button>
        </form>
    </div>

</div>