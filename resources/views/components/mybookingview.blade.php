<div class="w-[90%] mx-auto shadow-md rounded-lg  flex  bg-white mt-5 pt-4">
    <div class="w-[95%} mx-auto pt-4 border border-gray-100">
        <div class="flex flex-col">
            <p class="font-bold text-2xl">Booking Details</p>
            <p>Start-date: {{ $startdate }}</p>
            <p>End-date:{{ $enddate}}</p>
            <p>Amount:{{ $price }}</p>
        </div>
        <div>
            <p class="font-bold text-2xl">Car Details</p>
            <div class="w-[500px] flex items-center justify-center ml-4 mt-5 mb-4">
                <img src="{{ asset($image) }}" alt="" class="bg-gray-200">
            </div>
            <p>Car: {{ $name }}</p>
            <p>Reg-No: {{ $regno }}</p>
            <p>Model: {{ $model }}</p>
            {{-- <p>Type:{{ $type }}</p>
            <p>Doors:{{ $door }}</p> --}}
        </div>
    </div>
<!-- <table class="mt-7 mx-12 border-collapse w-[90%] ">
    <tr class="p-8 bg-cyan-600 text-white ">
        <th>
        </th>
    </tr>
</table> -->
</div>