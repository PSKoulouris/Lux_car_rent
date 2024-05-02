<x-mainlayout>
    <x-nav-link-us>
</x-nav-link-us>


<div class="flex-col mt-8 p-4 mx-40 bg-white shadow-md w-[70%] gap-4 rounded-xl">
        <div class="flex-col p-4 mx-auto w-[90%] gap-2 rounded-sm shadow-md ">
             <div><h5 class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 g-2  uppercase "><svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
            </svg>  Contact us</h5>
        </div>
        <div>
             <form class="mb-6">
              @csrf
                <div class="mb-6">
                <label for="email" class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Your email</label>
                <input type="email" id="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required />
                </div>
                 <div class="mb-6">
                <label for="subject" class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Subject</label>
                <input type="text" id="subject" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Let us know how we can help you" required />
                 </div>
                 <div class="mb-6">
                  <label for="message" class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Your message</label>
                 <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
               </div>
               <div class="mb-6">
               <button type="submit" class="rounded-xl border border-gray-300 text-lg font-bold w-full h-[50px] bg-gray-100">Send message</button>
               </div>
               </form>
        </div>
        <div>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                 <a href="#" class="hover:underline">info@company.com</a>
                </p>
                 <p class="text-sm text-gray-500 dark:text-gray-400">
                 <a href="#" class="hover:underline">212-456-7890</a>
                 </p>
        </div>
    </div>
</div>


</x-mainlayout>