<!DOCTYPE html>
<html>
<head>
    <title>Car Park Ticket</title>
</head>
<body>
    <h2>Select Car Type for Ticket</h2>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <label for="car_type">Car Type:</label>
        <select name="car_type" id="car_type" required>
            <option value="small">Small Car</option>
            <option value="suv">SUV</option>
            <option value="truck">Truck</option>
        </select>
        <button type="submit">Generate Ticket</button>
    </form>
</body>
</html>
