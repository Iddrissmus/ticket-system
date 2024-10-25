<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
</head>
<body>
    <h2>Your Ticket</h2>
    <p><strong>Car Type:</strong> {{ $ticket->car_type }}</p>
    <p><strong>Price:</strong> ${{ number_format($ticket->price, 2) }}</p>
    <p><strong>Time:</strong> {{ $ticket->created_at->format('Y-m-d H:i:s') }}</p>

    <button onclick="window.print()">Print Ticket</button>
</body>
</html>
