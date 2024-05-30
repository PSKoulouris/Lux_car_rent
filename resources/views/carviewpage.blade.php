<x-mainlayout>
    <x-nav-picture class="relativ"/>
  <!-- creating two div to split the page into two to view page for filter and car view -->
  <div class="w-[80%] mx-auto shadow-md bg-white mt-5 pt-4 text-center rounded-lg font-bold text-2xl"> Here is your Selection </div>
  <!-- main content of the page -->
  <div class="w-[80%] mx-auto shadow-md bg-white mt-5 pt-4 flex gap-8" >
    <div class="w-[25%] mx-auto mt-5 pt-4 rounded-lg" >
      {{-- form with a route for filterCarsByLocation  --}}
      <form action="{{route('filterCars')}}" method="GET" class="border border-gray-500 flex flex-col gap-4 mx-auto p-2 rounded-lg">
        @csrf
        <div class="border-b border-gray-500 text-2xl font-bold">Filter</div>
        {{-- filterCarsByLocation --}}
        {{-- Flavian, I change the input name="location" --}}
        <div class="border-b border-gray-500 p-2 ">
          <p class="font-bold text-1xl">Select your Location</p>
          <input type="checkbox" id="clervaux" name="location[]" value="Clervaux">
          <label for="clervaux">Clervaux</label><br>
          <input type="checkbox"  id="diekirch" name="location[]" value="Diekirch">
          <label for="diekirch">Diekirch</label><br>
          <input type="checkbox" id="luxembourg" name="location[]" value="Luxembourg">
          <label for="luxembourg">Luxembourg</label><br>
          <input type="checkbox" id="esch-sur-alzette" name="location[]" value="Esch-sur-Alzette">
          <label for="esch-sur-alzette">Esch-Sur-Alzette</label><br>
          <input type="checkbox" id="lux-airport"name="location[]" value="	
          Luxembourg-Airport
          ">
          <label for="lux-airport">Luxembourg-Airport</label><br>
        </div>
        <!-- code for selcting the car type -->
        {{-- filterCarsByFuel --}}
        <div class="border-b border-gray-500 p-2">
          <p class="font-bold text-1xl">Fuels</p>
          <input type="checkbox" id="petrol" name="fuel[]" value="Petrol">
          <label for="petrol">Petrol</label><br>
          <input type="checkbox" id="diesel" name="fuel[]" value="Diesel">
          <label for="diesel">Diesel</label><br>
          <input type="checkbox" id="electric" name="fuel[]" value="Electric">
          <label for="electric">Electric</label><br>
          <input type="checkbox" id="hybrid" name="fuel[]" value="Hybrid">
          <label for="hybrid">Hybrid</label><br>
          <input type="checkbox" id="hydrogen" name="fuel[]" value="Hydrogen">
          <label for="hydrogen">Hydrogen</label><br>
        </div>
        <!-- code for selcting the car model -->
        <div class="border-b border-gray-500 p-2">
          <p class="font-bold text-1xl">Brands</p>
          <input type="checkbox" id="bugatti" name="name[]" value="Bugatti">
          <label for="bugatti">Bugatti</label><br>
          <input type="checkbox"id="bmw" name="name[]" value="BMW">
          <label for="bmw">BMW</label><br>
          <input type="checkbox"id="chevrolet" name="name[]" value="Chevrolet">
          <label for="chevrolet">Chevrolet</label><br>
          <input type="checkbox"id="ford" name="name[]" value="Ford">
          <label for="ford">Ford</label><br>
          <input type="checkbox" id="honda" name="name[]" value="Honda">
          <label for="honda">Honda</label><br>
          <input type="checkbox" id="hyundai" name="name[]" value="Hyundai">
          <label for="hyundai">Hyundai</label><br>
          <input type="checkbox" id="mercedesbenz" name="name[]" value="Mercedes-Benz">
          <label for="mercedesbenz">Mercedes-Benz
          </label><br>
          <input type="checkbox" id="tesla" name="name[]" value="Tesla">
          <label for="tesla">Tesla</label><br>
          <input type="checkbox" id="toyota" name="name[]" value="Toyota">
          <label for="toyota">Toyota</label><br>
        </div>
        <!-- code for car typeswith seats -->
        <div class="border-b border-gray-500 p-2">
          <p class="font-bold text-1xl">Car Places</p>
          <input type="checkbox"  id="2seats" name="seats[]" value="2">
          <label for="2seats"> 2 places</label><br>
          <input type="checkbox"  id="4seats" name="seats[]" value="4">
          <label for="4seats"> 4 places</label><br>
          <input type="checkbox" id="5seats" name="seats[]" value="5">
          <label for="5-seats"> 5 places</label><br>
        </div>
        <div>
          <button type="submit" class="border bg-gray-500 w-full rounded-xl">Apply filter</button>
        </div>
      </form>
    </div>
    <div class="w-[70%] mx-auto rounded-lg flex flex-wrap gap-4 bg-white mt-5 pt-4">
      @foreach ($listCars as $car)
        <x-car-view :image="$car['image']" :nameCar="$car['name']" :model="$car['model']" :seat="$car['nbr_places']" :door="$car['nbr_doors']" :price="$car['daily_rate']" :id="$car['id']"/>
      @endforeach
    </div>
  </div>
</x-mainlayout>