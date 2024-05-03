{{-- need more thing like, position, style, drop-list --}}
   
   <div class="w-[1200px]"> 
    <form action="#">
        @csrf
        <div class="flex flex-row items-center justify-center">
            {{-- <div class="relative">
                <div class="absolute bottom-0 left-0">
                    </div> --}}
                {{-- <input type="text" placeholder="Destiantion ... "> --}}
            {{-- </div> --}}
            <div class="w-[20%]">
                {{--   --}}
                <select class="px-5" name="destination" id="destination-option">
                    {{-- better doing with js --}}
                    {{-- <option value="empty"></option> --}}
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Clervaux">Clervaux</option>
                    <option value="Wiltz">Wiltz</option>
                    <option value="Diekirch">Diekirch</option>
                    <option value="Redange">Redange</option>
                    <option value="Mersch">Mersch</option>
                    <option value="Echternach">Echternach</option>
                    <option value="Capellen">Capellen</option>
                    <option value="Grevenmacher">Grevenmacher</option>
                    <option value="Esch">Esch</option>
                    <option value="Remich">Remich</option>
                </select>
            </div>
            <input type="date" name="date">
            <input type="time" name="time">

            {{-- need an circle and maybe calculate the number of days --}}
            <div class="rounded-full w-10 h-10 border-solid border-2 black m-8"></div>

            <input type="date" name="date">
            <input type="time">
            <input type="submit" name="search-destiantion" value="Search">
        </div>
    </form>
</div>

