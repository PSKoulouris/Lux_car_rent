<!-- 
   <div class="max-w-auto">
  
    <form action="#">
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
    <img src="{{ url('images/img7.jpg') }}" class="bg-cover" alt="">
    <!-- creating div to have text above the image -->
     <div class="flex flex-col gap-2 justify-center items-center absolute top-[10%] right-[33%]">
        <p class="text-2xl font-bold text-white">Attracting Discounts just for you</p>
        <p class="text-6xl font-bold text-orange-500">Find Best Rental Car</p>
     </div>
     <!-- creating a div to nextstep text -->
    <div class="absolute top-[20%] right-[37%] bg-transparent w-[400px] h-[300px] flex flex-col">
        <div class="flex flex-col justify-center items-center">
            <p class="text-4xl font-bold text-white">For Rates & Availability</p>
            <p class="text-2xl font-bold text-orange-500">Search For Your Car</p>
        </div>
    </div>
        <div class="flex gap-4 mt-5 absolute top-[30%] right-[30%]">
          <form action="#" method="get" class="flex"> 
            

            
                      <div class="mr-2  flex flex-col gap-1">
                         <label for="pick-up-location" class="text-white font-small">Pick-up-Location</label>
                        <input type="text" id="pick-up-location" name="pickup-location"class="bg-transparent rounded-xl text-white" placeholder="enter your location" >


                       </div>
                       <div class="mr-2 flex flex-col gap-1">
                        <label for="start-date" class="text-white font-small">Select Your Start Date</label>
                        <input type="date" name="start-date" id="start-date" class="bg-transparent rounded-xl text-white " placeholder="Select your start date" >
            
                         </div>
                         <div class="mr-2 flex flex-col gap-1">
                         <label for="end-date" class="text-white font-small">Select Your end Date</label>
                       <input type="date" name="end-date" id="end-date" class="bg-transparent rounded-xl text-white " placeholder="Select your end date">
           
                        </div>
                        <div class="mr-2 flex flex-col gap-1">
                            <label for="submit">Let search</label>
                            <button type="submit" class="text-white  w-[120px] text-center border-2 h-[40px] rounded-xl">Search</button>
                        </div>

            </form>

        </div>
   

    </div>
   



