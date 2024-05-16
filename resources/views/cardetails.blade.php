<x-mainlayout>
    <x-nav-link-us>
</x-nav-link-us>

@if(isset($singlecar))
<x-car-details-view :id="$singlecar['id']"
:image="$singlecar['image']" 
:name="$singlecar['name']" 
:model="$singlecar['model']" 
:seat="$singlecar['nbr_places']" 
:door="$singlecar['nbr_doors']" 
:regno="$singlecar['car_registration_nbr']" 
:year="$singlecar['year']" 
:type="$singlecar['body_type']" 
:fuel="$singlecar['fuel']" 
:dailyRate="$singlecar['daily_rate']" 
:weeklyRate="$singlecar['weekly_rate']"></x-car-details-view>
@else
<p>error</p>
@endif
</x-main-layout>