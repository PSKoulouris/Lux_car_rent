<!-- 
   <div class="max-w-auto">
  
    <form action="#">
        @csrf
        <div class="flex flex-row items-center justify-center">
            <div class="relative">
            <div class="absolute">
                <svg class="w-20 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
            <!-- </div>
            <input type="text" placeholder="Destiantion ... ">
        </div>
            <input type="date" name="date">
            <input type="time" name="time">

            {{-- need an circle and maybe calculate the number of days --}}
            <div class="rounded-full w-10 h-10 border-solid border-2 black m-8"></div>

            <input type="date" name="date">
            <input type="time">
            <input type="submit" name="search-destiantion" value="Search">
        </div>
    </form>
</div> --> 
<div class="relative">
    <!-- created a image as background -->
    <!--Philippe: changed image/img7.jpg by updated main picture image/MainCar_WelcomePage_fin.jpg -->
    <img src="{{ url('images/image_car_form_main_fin_low.jpg') }}" class="bg-cover" alt="">
    <!-- creating div to have text above the image -->
    <div class="flex flex-col gap-2 p-4 justify-center items-center bg-[#2D3B4E] md:absolute top-[10%] right-[28%] md:bg-transparent">
    
        <p class="md:text-2xl font-bold text-white">Attracting Discounts Just for you</p>
        <p class="md:text-6xl font-bold text-orange-500">Find Best Rental Car</p>
     
     <!-- creating a div to nextstep text -->
    
        
            <p class="md:text-4xl font-bold text-white">For Rates & Availability</p>
            <p class="md:text-2xl font-bold text-orange-500">Search For Your Car</p>

            <form action="{{route('showcars')}}" method="get" >
            <div class="mr-2 flex flex-col gap-1">
                           
                            <button type="submit"  id="submit"class="p-4 text-center w-full inline-flex items-center text-white border-2 h-[40px] rounded-xl">Search you Car</button>
             </div>

            </form>
        

    </div>
    
    </div>
   
   

    </div>

   



