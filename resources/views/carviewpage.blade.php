<x-mainlayout>
    <x-nav-picture>
</x-nav-picture>
<!-- creating two div to split the page into two to view page for filter and car view -->
<div class="w-[80%] mx-auto shadow-md bg-white mt-5 pt-4 text-center rounded-lg font-bold text-2xl"> Here is your Selection </div>
<!-- main content of the page -->
<div class="w-[80%] mx-auto shadow-md bg-white mt-5 pt-4 flex gap-8" >
  <div class="w-[25%] mx-auto mt-5 pt-4 rounded-lg" >
    <form action="" class="border border-gray-200 flex flex-col gap-4 mx-auto p-2 rounded-lg">
      <div class="border-b border-gray-200 text-2xl font-bold">Filter</div>
      <!-- code for selecting the location -->
      <div class="border-b border-gray-200 p-2 ">
        <p class="font-bold text-1xl">Select your Location</p>
        <input type="checkbox" id="clervaux" name="clervaux">
        <label for="clervaux">Clervaux</label><br>
        <input type="checkbox"  id="diekirch" name="diekirch">
        <label for="diekirch">Diekirch</label><br>
        <input type="checkbox" id="luxembourg" name="luxembourg">
        <label for="luxembourg">Luxembourg</label><br>
        <input type="checkbox" id="esch-sur-alzette" name="esch-sur-alzette">
        <label for="esch-sur-alzette">Esch-Sur-Alzette</label><br>
        <input type="checkbox" id="lux-airport"name="lux-airport">
        <label for="lux-airport">Luxembourg-Airport</label><br>
      </div>
      <!-- code for selcting the car type -->
      <div class="border-b border-gray-200 p-2">
        <p class="font-bold text-1xl">Car-Type</p>
        <input type="checkbox" id="electric" name="electric">
        <label for="electric">Electric</label><br>
        <input type="checkbox" id="hybrid" name="hybrid">
        <label for="hybrid">Hybrid</label><br>
      </div>

      <!-- code for selcting the car model -->
      <div class="border-b border-gray-200 p-2">
        <p class="font-bold text-1xl">Car-Model</p>
        <input type="checkbox" id="bmw" name="bmw">
        <label for="bmw">BMW</label><br>
        <input type="checkbox"id="volkswagen" name="volkswagen">
        <label for="volkswagen">volkswagen</label><br>
        <input type="checkbox" id="fiat" name="fiat">
        <label for="fiat">Fiat</label><br>
        <input type="checkbox" id="renault" name="renault">
        <label for="renault">Renault</label><br>
        <input type="checkbox" id="ford" name="ford">
        <label for="ford">Ford</label><br>
      </div>
      <!-- code for car typeswith seats -->
      <div class="border-b border-gray-200 p-2">
        <p class="font-bold text-1xl">Car-Seats</p>
        <input type="checkbox"  id="4seats" name="4seats">
        <label for="4seats">4-seats</label><br>
        <input type="checkbox" id="6seats" name="6seats">
        <label for="6-seats">6-seats</label><br>
      </div>
      <div>
        <button class="border bg-gray-400 w-full text-white rounded-xl">Apply filters</button>
      </div>

      


    </form>

  </div>
  <div class="w-[70%] mx-auto rounded-lg flex flex-wrap gap-4 bg-white mt-5 pt-4">
    @foreach ($listCars as $car)
    <x-car-view :image="$car['image']" :nameCar="$car['name']"/>
    @endforeach
  </div>
</div>
 
</x-mainlayout>