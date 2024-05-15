<h1>Many-to-many insert data in cars, cars_types and link_cars_table</h1>
<a href="{{ route('welcome') }}" class="font-bold text-black pt-1 text-center border-none w-[100px] h-[30px] bg-orange-500 rounded-xl ">Home</a>
<table class="border-collapse border border-slate-400">
    <tr>
        {{-- Cars table --}}
        <th class="border border-slate-300">ID Car</th>
        <th class="border border-slate-300">Image</th>
        <th class="border border-slate-300">name</th>
        <th class="border border-slate-300">model</th>
        <th class="border border-slate-300">year</th>
        <th class="border border-slate-300">Weekly rate</th>
        <th class="border border-slate-300">Daily rate</th>
        <th class="border border-slate-300">Car Registration Number</th>
         {{-- Car type table --}}
         <th class="border border-slate-300">ID Car type</th>
         <th class="border border-slate-300">Body type</th>
         <th class="border border-slate-300">Seats</th>
         <th class="border border-slate-300">Doors</th>
         <th class="border border-slate-300">Fuel</th>
         {{-- Link table between cars and cars_type --}}
         <th class="border border-slate-300">Car type ID</th>
         <th class="border border-slate-300">Car ID</th>
         <th class="border border-slate-300" colspan="2">Actions</th>
    </tr>
    @foreach ($listRecords as $cars)
        <tr>
            <form method="POST" action="{{route('updateCars', ['id1'=>$cars->id_cars, 'id2'=>$cars->id_cars_types])}}" accept-charset="UTF-8">
                @csrf
                {{-- cars table --}}
                <td>{{$cars->id_cars}}</td>
                <td><input type="file" name="image" value="{{$cars->image}}"></td>
                <td><input type="text" name="nameCar" value="{{$cars->name}}"></td>
                <td><input type="text" name="modelCar" value="{{$cars->model}}"></td>
                <td><input type="text" name="yearCar" value="{{$cars->year}}"></td>
                <td><input type="text" name="weekly_rate" value="{{$cars->weekly_rate}}"></td>
                <td><input type="text" name="daily_rate" value="{{$cars->daily_rate}}"></td>
                <td><input type="text" name="car_registration_nbr" value="{{$cars->car_registration_nbr}}"></td>
                <td>{{$cars->id_cars_types}}</td>
                <td><input type="text" name="body_type" value="{{$cars->body_type}}"></td>
                <td><input type="text" name="nbr_places" value="{{$cars->nbr_places}}"></td>
                <td><input type="text" name="nbr_doors" value="{{$cars->nbr_doors}}"></td>
                <td><input type="text" name="fuel" value="{{$cars->fuel}}"></td>
                <td><button type="submit">Update</button></td>
            </form>
            <td>
                <form method="POST" action="{{ route('deleteCar', $cars->id_cars_types) }}"
                accept-charset="UTF-8">
                    @csrf
                    <button class="red" type="submit">Don't press</button>
                </form>
            </td>
        </tr>
    @endforeach
    <tr>
        <form action="{{ route('createCars') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Cars table --}}
            <td></td>
            <td><input type="file" name="image" id="image"></td>
            <td><input type="text" name="nameCar" placeholder="Bmw, Mercedes"></td>
            <td><input type="text" name="modelCar" placeholder="3 serie, passat ...."></td>
            <td><input type="text" name="yearCar" placeholder="1990 ..."></td>
            <td><input type="text" name="weekly_rate" placeholder="500$ ..."></td>
            <td><input type="text" name="daily_rate" placeholder="50$ ..."></td>
            <td><input type="text" name="car_registration_nbr" placeholder="TC7018 ..."></td>
            {{-- Car type table --}}
            <td></td>
            <td><input type="text" name="body_type" placeholder="SUV ..."></td>
            <td><input type="text" name="nbr_places" placeholder="7 seats ..."></td>
            <td><input type="text" name="nbr_doors" placeholder="5 doors ..."></td>
            <td><input type="text" name="fuel" placeholder="electric, hybrid, petrol, diesel ..."></td>
            <td></td>
            <td></td>

            <td><button type="submit">Create new data</button></td>
        </form>
    </tr>
    <tr>
        <td><form action="{{route('showAllRecors')}}" method="GET" accept-charset="UTF-8"></form>
        @csrf
        <button type="submit">Cancel</button></td>
    </tr>
</table>