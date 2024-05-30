<!--component main layout-->
<x-mainlayout>
    <!--component navigation link with picture multiple pages-->
    <x-nav-picture/>
    <!-- rental_agreement page -->
    <!-- <div class="flex-col mt-8 p-4 mx-auto bg-white shadow-md w-[70%] gap-4 rounded-lg"> -->
    <div class="text-black p-10 font-arial bg-gray-100 flex flex-col mt-8 mb-8 p-4 mx-auto bg-white shadow-md w-[70%] gap-4 rounded-lg">
        <div class="flex flex-col mt-8 p-4 mx-auto shadow-md">   
            <h1 class="text-5xl text-center text-orange-500 mt-3"><strong> Rental Agreement </strong></h1>
            <br>
        </div>
        <br>
        <div class=" text-lg p-5">
            <p>Welcome to Lux Rent Car Rentals!</p><br>
            <p class="text-justify h-auto">Renting a car with us is easy, convenient, and transparent. Our rental   agreement provides detailed terms and conditions to ensure a smooth and reliable experience. Whether you're renting for   business or leisure, we want you to feel confident and informed about our policies. Please review the agreement before    your next journey by downloading a comprehensive explanation of our terms and conditions:</p>  
            <br>
        </div>
            <!-- link rental_agreement to a dowloadable pdf file located in public >files asset() ensures proper URL generation regardless of where your application is hosted-->
        <div class="p-5"> 
            <div class="flex items-center space-x-3">
                <div>Eng:</div> 
                <div> 
                    <a href="{{ asset('files/Lux Rent Terms and Conditions.pdf') }}" download="rental_agreement" class="text-orange-500 hover:text-orange-300">Rental Agreement-pdf</a>
                </div>
            </div>   
            <div class="flex items-center space-x-3"> 
                <div>Ger:</div>
                    <div> <!-- linkl documents in rental agreement-->
                        <a href="{{ asset('files/Lux Rent Bedingungen.pdf') }}" download="Bedingungen" class="text-orange-500 hover:text-orange-300"> Bedingungen-pdf</a>
                    </div>
            </div>  
            <div class="flex items-center space-x-6"> 
                <div>Fr:</div> 
                    <div> 
                        <a href="{{ asset('files/Lux Rent Termes et Conditions.pdf') }}" download="Termes et Conditions" class="text-orange-500 hover:text-orange-300"> Termes et Conditions-pdf</a>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <x-footer />
</x-mainlayout>



