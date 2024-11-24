<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
    <style>
        .left-panel {
            background: #f5f5f5;
            padding: 40px;
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
              Your Ticket
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-body-secondary">
              2 days ago
            </div>
          </div>
        <h2>Your Ticket</h2>
        <p><strong>Car Type:</strong> {{ $ticket->car_type }}</p>
        <p><strong>Price:</strong> ${{ number_format($ticket->price, 2) }}</p>
        <p><strong>Time:</strong> {{ $ticket->created_at->format('Y-m-d H:i:s') }}</p>
    
        <button onclick="window.print()">Print Ticket</button>
       
    </div>
</body>
</html>
