<!--component main layout-->
      <x-mainlayout>
    <!--component navigation link with picture multiple pagez-->

      <x-nav-picture> </x-nav-picture>

    <!-- rental_agreement page -->

    <div class="text-white p-10 font-arial" style="background-color:#40546F;">
        <section>
            <h1 class="text-5xl text-orange-500"><strong> Rental Agreement </strong></h1><br>
        </section>
        <br>
        <section class=" text-lg">
            <p>Welcome to Lux Rent Car Rentals!</p><br>
            <p>
                Renting a car with us is easy, convenient, and transparent. Our
                rental agreement provides detailed terms and conditions to
                ensure a smooth and reliable experience. Whether you're renting
                for business or leisure, we want you to feel confident and
                informed about our policies. Please review the agreement below
                before your next journey and for a comprehensive explanation of our terms, conditions, and
                rental agreement, please download the following document:
                <!-- 
                    link rental_agreement to a dowloadable pdf file located in public >files 
                    asset() ensures proper URL generation regardless of where your application is hosted-->
                     <a href="{{ asset('files/Lux Rent Terms and Conditions.pdf') }}" download="rental_agreement" class="text-orange-500 hover:text-orange-300">Rental Agreement-pdf</a>
            </p>
            <br><br>
        </section>

        <section class="ml-12">
            <ol>
                <li>
                    <strong class="text-2xl text-orange-500">Rental Period</strong>
                    <ul><br>
                        <li>
                            <strong>Definition:</strong> The rental starts upon
                            vehicle pickup and ends when returned to Lux Rent or
                            an authorized location. Extensions require written
                            approval, and early returns may not qualify for
                            refunds.
                        </li>
                        <li>
                            <strong>Late Returns:</strong> A one-hour grace
                            period is offered, after which additional fees
                            apply. Delays over 24 hours without notice can lead
                            to penalties and insurance suspension.
                        </li>
                    </ul>
                </li>
                <li>
                    <br>
                    <strong class="text-2xl text-orange-500">Payment and Fees</strong>
                    <ul><br>
                        <li>
                            <strong>Rental Rates:</strong> Rates include taxes,
                            fees, and basic insurance. Payments via credit or
                            debit card are accepted. Extra services may affect
                            the final cost.
                        </li>
                        <li>
                            <strong >Additional Fees:</strong> Refueling,
                            cleaning, traffic violations, and one-way drop-off
                            fees may apply.
                        </li>
                    </ul><br>
                </li>
                <li>
                    <strong class="text-2xl text-orange-500">Driver Requirements</strong>
                    <ul><br>
                        <li>
                            <strong>Age and Licensing:</strong> Minimum age is
                            18 with a valid license for at least one year.
                            Higher age requirements may apply for some vehicles.
                            International drivers need a suitable permit.
                        </li>
                        <li>
                            <strong>Driving Record:</strong> Major traffic
                            violations may disqualify applicants.
                        </li>
                    </ul><br>
                </li>
                <li>
                    <strong class="text-2xl text-orange-500">Vehicle Use</strong>
                    <ul><br>
                        <li>
                            <strong>Authorized Use:</strong> Personal transport
                            within approved areas only. Commercial use or towing
                            needs prior consent.
                        </li>
                        <li>
                            <strong>Prohibited Use:</strong> Reckless driving,
                            illegal activities, and driving under the influence
                            are prohibited.
                        </li>
                    </ul><br>
                </li>
                <li>
                    <strong class="text-2xl text-orange-500">Insurance and Liability</strong>
                    <ul><br>
                        <li>
                            <strong>Basic Insurance:</strong> Third-party
                            liability and collision coverage, with optional
                            extra protection.
                        </li>
                        <li>
                            <strong>Customer Responsibility:</strong> Renters
                            are liable up to the deductible and must participate
                            in the claims process.
                        </li>
                    </ul><br>
                </li>
                <li>
                    <strong class="text-2xl text-orange-500">Fuel Policy</strong>
                    <ul><br>
                        <li>
                            <strong>Fuel Return:</strong> Return the vehicle
                            with the same fuel level as at pickup to avoid
                            charges.
                        </li>
                        <li>
                            <strong>Prepaid Option:</strong> Prepay for a full
                            tank to save time, but unused fuel won't be
                            refunded.
                        </li>
                    </ul><br>
                </li>
                <li>
                    <strong class="text-2xl text-orange-500">Breakdown and Assistance</strong>
                    <ul><br>
                        <li>
                            <strong>Roadside Assistance:</strong> Available 24/7
                            for emergencies. Contact Lux Rent before attempting
                            repairs.
                        </li>
                        <li>
                            <strong>Replacement Vehicle:</strong> Offered for
                            mechanical failures not caused by the renter, if
                            available.
                        </li>
                    </ul><br>
                </li>
                <li>
                    <strong class="text-2xl text-orange-500">Maintenance and Cleanliness</strong>
                    <ul><br>
                        <li>
                            <strong>Customer Obligations:</strong> Keep the
                            vehicle clean. Smoking and pets are prohibited
                            unless stated otherwise.
                        </li>
                        <li>
                            <strong>Cleaning Fees:</strong> Charged for
                            excessive dirt, pet hair, or smoke odor.
                        </li>
                    </ul><br>
                </li>
                <li>
                    <strong class="text-2xl text-orange-500">Accident Reporting</strong>
                    <ul><br>
                        <li>
                            <strong>Reporting:</strong> Report accidents or
                            theft to Lux Rent immediately. Follow local laws if
                            needed.
                        </li>
                        <li>
                            <strong>Cooperation:</strong> Assist during
                            investigations to ensure fair claim handling.
                        </li>
                    </ul><br>
                </li>
                <li>
                    <strong class="text-2xl text-orange-500">Cancellation and Modification Policy</strong>
                    <ul><br>
                        <li>
                            <strong>Cancellation:</strong> Full refunds are
                            available up to 24 hours before pickup. Fees apply
                            afterward.
                        </li>
                        <li>
                            <strong>Modifications:</strong> Allowed up to 24
                            hours before pickup, subject to availability and
                            possible fees.
                        </li>
                    </ul><br>
                </li>
            </ol>
        </section>
                </div>

    

    <!--components footer-->
    <x-footer />

</x-mainlayout>



