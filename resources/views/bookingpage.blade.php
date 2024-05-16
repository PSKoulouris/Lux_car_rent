<x-mainlayout >
    <x-nav-picture class="relative"></x-nav-picture>
    @if(isset($singlecar))
        <x-bookingview :id="$singlecar['id']" 
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
        :weeklyRate="$singlecar['weekly_rate ']"></x-bookingview>
        {{-- pass more details from car view, don't forget to declare variables --}}
    @else
        <p>error</p>
    @endif
    @if(isset($users))
        <x-bookinguser 
        :username="$users['name']" 
        :address="$users['address']" 
        :email="$users['email']" 
        ></x-bookinguser>
    {{-- :phoneNumber="$users['phoneNumber']" --}}
    @else
        <p>Error user detatils, bookingpage.blade.php</p>
    @endif
    <x-bookingreciept></x-bookingreciept>
</x-mainlayout>