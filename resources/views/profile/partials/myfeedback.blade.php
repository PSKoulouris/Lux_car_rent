<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My FeedBack') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form action="#" method="post" class="mt-6 space-y-6">
                  
                        <div>
                        <label class='block font-medium text-sm text-gray-700' for="name">Name</label>
                        <input class="border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" id="name" name="name" placeholder="Enter Your Name" required >
                        </div>

                        <div>
                        <label class= 'block font-medium text-sm text-gray-700' for="description">Description</label>
                        <textarea class="border-gary-500 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="description" name="description" placeholder="Enter Your Review" required ></textarea>
                        </div>

                        <div class="flex items-center gap-4">
                        <button type="Submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">save</button>
                        </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>