@if(isset($id))
    <a href="/carDetails/{{$id}}">
 @endif
<div class="w-[350px] h-[400px] flex flex-col justify-center items-center shadow-md bg-[#2D3B4E] mx-auto rounded-xl" >
    <div class="rounded-xl w-[90%] h-[220px] mx-auto bg-gray-300  flex items-center justify-center">
          <!-- <img src="images/dark1.webp" alt="" class="object-cover  w-[150px] h-[150px]"> -->
          <!-- <div class="w-[240px] h-[150px] bg-cover">{{ $image }} </div> -->
          <img src="{{ asset($image) }}" alt="">
    </div>
    <div class="flex flex-col">
        {{-- passing the arguments here for the car info/view --}}
        <p class=" w-[300px] font-bold text-center mt-1 rounded-lg text-2xl text-orange-500">{{ $nameCar }}</p>
        <p class="bg-gray-200 w-[300px]font-bold text-center mt-1 rounded-lg">{{ $model }}</p>
        <div class="flex gap-4 w-[300px]">
            <p class="bg-gray-200 w-[150px] font-bold text-center mt-1 rounded-lg ">{{ $seat}} Seats</p>
            <p class="bg-gray-200 w-[150px] font-bold text-center mt-1 rounded-lg ">{{ $door}} Doors</p>
        </div>  
        <div class="flex justify-end">
            <p class="font-medium bg-gray-200 w-[300px] text-center mt-1 rounded-lg">Best price for a week <span class="font-bold">&#8364;{{ $price }}</span> </p>
        </div>   
    </div>
</div>
@if(isset($id))
    </a>
@endif

