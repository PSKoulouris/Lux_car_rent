<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Bookings') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($listBookings as $booking)
                        <x-mybookingview :startdate="$booking['start_date']"
                        :enddate="$booking['return_date']" 
                        :price="$booking['amount']" 
                        :image="$booking['image']"
                        :name="$booking['name']" 
                        :model="$booking['model']"
                        :regno="$booking['car_registration_nbr']" ></x-mybookingview>
                    @endforeach
                    {{-- :type="$booking['body_type']" 
                        :door="$booking['nbr_doors']" / --}}
                   {{-- @if(isset($booking))
                      <x-mybookingview :pickuplocation="$booking['location']" :start-date="$booking['start_date']" :droplocation="$booking['location']" :end-date="$booking['return_date']" :price="$booking['amount']" :name="$booking['name']" :reg-no="$booking['car_registration_nbr']" :model="$booking['model']" :type="$booking['body_type']" :door="$booking['nbr_doors']" />
                   @else
                    You didn't book yet!...
                   @endif --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>