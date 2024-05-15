<!-- automation with csv, does not include an image file but reads an image name from a csv file -->

    <form action="{{ route('uploadCsv') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="csv_file" required>
        <button type="submit">Upload CSV</button>
    </form>

    <table class="border-collapse border border-slate-400">
        <tr>
            <!-- Cars table -->
            <th class="border border-slate-300">ID Car</th>
            <th class="border border-slate-300">Image</th>
            <th class="border border-slate-300">Name</th>
            <th class="border border-slate-300">Model</th>
            <th class="border border-slate-300">Year</th>
            <th class="border border-slate-300">Weekly Rate</th>
            <th class="border border-slate-300">Daily Rate</th>
            <th class="border border-slate-300">Car Registration Number</th>
            <!-- Car type table -->
            <th class="border border-slate-300">ID Car Type</th>
            <th class="border border-slate-300">Body Type</th>
            <th class="border border-slate-300">Seats</th>
            <th class="border border-slate-300">Doors</th>
            <th class="border border-slate-300">Fuel</th>
            <!-- Link table between cars and cars_type -->
            <th class="border border-slate-300">Car Type ID</th>
            <th class="border border-slate-300">Car ID</th>
            <th class="border border-slate-300" colspan="2">Actions</th>
        </tr>
        @foreach ($listRecords as $cars)
            <tr>
                <form method="POST" action="{{route('updateCars', ['id1'=>$cars->id_cars, 'id2'=>$cars->id_cars_types])}}" accept-charset="UTF-8">
                    @csrf
                    <!-- cars table -->
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
</table>
