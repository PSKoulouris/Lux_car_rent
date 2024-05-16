<div class="w-[90%] mx-auto shadow-md rounded-lg  flex  bg-white mt-5 pt-4">

<div class="w-[95%} mx-auto pt-4 border border-gray-100">
    <div class="flex flex-col">
        <p class="font-bold text-2xl">Booking Details</p>
        <p>Pick-up location: {{ $pickuplocation }}</p>
        <p>Start-date: {{ $start-date }}</p>
        <p>Drop-Location: {{ $droplocation }}</p>
        <p>End-date:{{ $end-date }}</p>
        <p>Amount:{{ $price }}</p>

    </div>
    <div>
    <p class="font-bold text-2xl">Car Details</p>
        <p>Car: {{ $name }}</p>
        <p>Reg-No: {{ $reg-no }}</p>
        <p>Model: {{ $model }}</p>
        <p>Type:{{ $type }}</p>
        <p>Doors:{{ $door }}</p>
    </div>
</div>
<!-- <table class="mt-7 mx-12 border-collapse w-[90%] ">
    <tr class="p-8 bg-cyan-600 text-white ">
        <th>
        </th>
    </tr>
</table> -->

</div>