<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice #{{ $ticket->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .invoice {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header p {
            margin: 0;
            color: #777;
        }
        .details {
            margin-bottom: 20px;
        }
        .details p {
            margin: 5px 0;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="invoice">
        <div class="header">
            <h1>Invoice</h1>
            <p>Ticket ID: #{{ $ticket->id }}</p>
        </div>

        <div class="details">
            <p><strong>Car Type:</strong> {{ $ticket->car_type }}</p>
            <p><strong>Price:</strong> {{ $ticket->price }} cedis</p>
            <p><strong>Issued At:</strong> {{ $ticket->created_at->format('Y-m-d H:i:s') }}</p>
            <p><strong>Status:</strong> {{ $ticket->status ?? 'Active' }}</p>
        </div>

        <div class="footer">
            <p>Thank you for using our service!</p>
        </div>
    </div>
</body>
</html>
