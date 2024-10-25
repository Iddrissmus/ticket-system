<!DOCTYPE html>
<html>
<head>
    <title>Amusement Park Ticket</title>
</head>
<body>
    <h2>Your Amusement Park Ticket</h2>
    <p><strong>Ticket Type:</strong> {{ $ticket->ticket_type }}</p>
    <p><strong>Price:</strong> ${{ number_format($ticket->price, 2) }}</p>
    <p><strong>Issued At:</strong> {{ $ticket->created_at->format('Y-m-d H:i:s') }}</p>

    <button onclick="window.print()">Print Ticket</button>
</body>
</html>
