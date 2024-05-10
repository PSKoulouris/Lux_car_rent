

<x-mainlayout>
    <x-nav-picture class="relative">
</x-nav-picture>

 <!-- information div -->
 <div id="contact-heading" class="w-[70%] h-[100px] mx-auto shadow-md rounded-lg  flex bg-white mt-5 pt-4">
    <div class="w-[95%] flex flex-col border border-gray-200 mb-2 mx-auto" >
        <div class="w-full h-[30px] bg-cyan-600 mx-auto pl-2 text-white text-1xl"> contact Page</div>
         <div class="w-full h-[40px] bg-white mx-auto pl-2 flex items-center font-medium">please fill the contact form below! we will reach you soon.</div>

    </div>
         

    </div>


<div id="contact-info" class="flex-col mt-8 p-4 mx-auto bg-white shadow-md w-[70%] gap-4 rounded-lg">
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
               <button type="submit" id="contact-submit" onclick="contactfunction()" class="bg-blue-500 rounded-xl border border-gray-300 text-lg font-bold w-full h-[50px]">Send message</button>
               </div>
               </form>
        </div>
        <div>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                 <a href="#" class="hover:underline">infoluxrent@gmail.com</a>
                </p>
                 <p class="text-sm text-gray-500 dark:text-gray-400">
                 <a href="#" class="hover:underline">352-000-000-000</a>
                 </p>
        </div>
    </div>
</div>

<!-- creating a div to show thank you message for a contact form -->

<div id="contact-thankyou" class="flex justify-center item-center font-bold mt-8 p-4 mx-auto bg-white shadow-md w-[70%] gap-4 rounded-xl" style="display:none;">
    <p>Thank you so much for your message. we will contact you soon.</p>

</div>




</x-mainlayout>