<!DOCTYPE html>
<html>
<head>
    <title>Amusement Park Ticket</title>
</head>
<body>
    <h2>Select Amusement Park Ticket Type</h2>
    <form action="{{ route('amusement_park_tickets.store') }}" method="POST">
        @csrf
        <label for="ticket_type">Ticket Type:</label>
        <select name="ticket_type" id="ticket_type" required>
            <option value="general">General Admission</option>
            <option value="vip">VIP Pass</option>
            <option value="family">Family Package</option>
        </select>
        <button type="submit">Generate Ticket</button>
    </form>
</body>
</html>
