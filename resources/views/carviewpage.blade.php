<x-mainlayout>
    <x-nav-picture>
</x-nav-picture>
<!-- creating two div to split the page into two to view page for filter and car view -->
<div class="w-[80%] mx-auto shadow-md bg-white mt-5 pt-4 text-center rounded-lg font-bold text-2xl"> Here is your Selection </div>
<!-- main content of the page -->
<div class="w-[80%] mx-auto shadow-md bg-white mt-5 pt-4 flex gap-8" >
  <div class="w-[25%] mx-auto mt-5 pt-4 rounded-lg" >
    <form action="" class="border border-gray-200 flex flex-col gap-4 mx-auto w-[23%] p-2">
      <div class="border-b border-gray-200 text-2xl font-bold">Filter</div>
      <div>
        <p class="">Select your Location</p>
        <input type="checkbox" name="">
      </div>


    </form>

  </div>
  <div class="w-[70%] mx-auto rounded-lg  bg-white mt-5 pt-4">
    <x-car-view/>
  </div>
</div>
 
</x-mainlayout>