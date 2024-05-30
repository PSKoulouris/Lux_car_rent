{{-- creating some inputs for driver licence and identification data  --}}
{{-- it will be a form that has the information in a placeholder, maybe can be updated later by the user --}}
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Complete your Profile') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure you add all the documents to enjoy your safe ride.') }}
        </p>
    </header>
    <form action="{{route('customers.profile')}}" method="post" class="mt-6 space-y-6">
        @csrf
        <input type="text" value="{{$user->id}}" id="user_id" name="user_id" hidden>
        <div>
            <label class= 'block font-medium text-sm text-gray-700' for="fname">FirstName</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" name="fname" id="fname" placeholder="Enter your first name" required>
        </div>
        <div>
            <label class= 'block font-medium text-sm text-gray-700' for="lname">LastName</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" name="lname" id="lname" placeholder="Enter your Last Name" required>
        </div>
        <div>
            <label class= 'block font-medium text-sm text-gray-700' for="driverlicence">Driver licence</label>
            <input class="border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 rounded-md  mt-1 block w-full" id="driverlicense" name="driverlicense" type="file" placeholder="Driver licence" required >
        </div>
        <div>
            <label class= 'block font-medium text-sm text-gray-700' for="proof">Identification Data ID</label>
            <input class="border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 rounded-md  mt-1 block w-full" type="file" id="proof" name="proof" placeholder="Identification Data (ID)" required >
        </div>
        <div>
            <p class="font-bold">Address</p>
        </div>
        <div>
            <label class= 'block font-medium text-sm text-gray-700' for="line1">:</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="line1" name="line1" type="text" placeholder="Line1" required>
        </div>
        <div>
            <label class= 'block font-medium text-sm text-gray-700' for="line2">Line 2:</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="line2" name="line2" type="text" placeholder="Line2" required>
        </div>
        <div>
            <label class= 'block font-medium text-sm text-gray-700' for="city">City</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="city" name="city"type="text" placeholder="city" required>
        </div>
        <div>
            <label class= 'block font-medium text-sm text-gray-700' for="country">Country</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="country" name="country" type="text" placeholder="Country" required>
        </div>
        <div>
            <label class= 'block font-medium text-sm text-gray-700' for="zipcode">Zip-Code</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" id="zipcode" name="zipcode" placeholder="Zip-Code" required>
        </div> 
        <div class="flex items-center gap-4">
            <button type="Submit" class="'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'">save</button>
        </div>      
    </form>
</section>
    

{{-- included in edit.blade.php --}}