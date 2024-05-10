<x-mainlayout >
    <x-nav-picture class="relative">
</x-nav-picture>
@if(isset($singlecar))
<x-bookingview :image="$singlecar['image']" :name="$singlecar['name']" :model="$singlecar['model']" :seat="$singlecar['nbr_places']" :door="$singlecar['nbr_doors']" :regno="$singlecar['car_registration_nbr']" :year="$singlecar['year']" :type="$singlecar['body_type']"></x-bookingview>
@else
<p>error</p>
@endif
<x-bookingreciept>
</x-bookingreciept>
</x-mainlayout>