<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <!-- Example Ticket Image (Replace with dynamic content if available) -->
            {{-- <img src="{{ asset('movie tickets.jpg') }}" alt="Ticket Image" class="card-img-top"> --}}

            <div class="card-body">
                <!-- Dynamic Ticket Details -->
                <h5 class="card-title">Ticket ID: {{ $ticket->id }}</h5>
                <p class="card-text">Car Type: {{ $ticket->car_type }}</p>
                <p class="card-text">Price: {{$ticket->price, 2}} cedis</p>
                <p class="card-text">Issued At: {{ $ticket->created_at }}</p>
                <a href="{{ route('invoice', $ticket->id) }}" class="btn btn-primary">Download Invoice</a>
                <button onclick="window.print()">Print Ticket</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
