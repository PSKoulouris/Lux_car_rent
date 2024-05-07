<h1>Test many-to-many insert data</h1>
<table>
    <tr>
        {{-- Cars table --}}
        <td>ID Car</td>
        <td>Image</td>
        <td>name</td>
        <td>model</td>
        <td>year</td>
        <td>Weekly rate</td>
        <td>Daily rate</td>
        <td>Car Registration Number</td>
    </tr>
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
            <td><input type="text" name="car_registration_nbr" placeholder="TC7018 ..."></td><</tr>
            {{-- Car type table --}}
            <tr>
                {{-- Car type table --}}
                <td>ID Car type</td>
                <td>Body type</td>
                <td>Seats</td>
                <td>Doors</td>
                {{-- Link table between cars and cars_type --}}
                <td>Car type ID</td>
                <td>Car ID</td>
                <td colspan="2">Actions</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="text" name="body_type" placeholder="SUV ..."></td>
                <td><input type="text" name="nbr_places" placeholder="7 seats ..."></td>
                <td><input type="text" name="nbr_doors" placeholder="5 doors ..."></td>
                <td></td>
                <td></td>
                <td><button type="submit">Create new data</button></td>
        </form>
    </tr>
</table>