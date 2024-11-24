<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Ticket</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .ticket-container {
            width: 100%;
            max-width: 1000px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .ticket-header {
            background-color: #4D4C7D;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .ticket-body {
            padding: 30px;
            flex-grow: 1;
        }
        .btn-primary {
            background-color: #4D4C7D;
            border: none;
        }
        .btn-primary:hover {
            background-color: #3b3a6a;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container rounded">
        <div class="d-flex justify-content-end mb-5">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        
        </div>
        <!-- Header Section -->
        <div class="ticket-header">
            <h2>Add New Ticket</h2>
        </div>

        <!-- Form Section -->
        <div class="ticket-body">
            <form method="POST" action="{{ route('add') }}">
                @csrf
                <div class="mb-3">
                    <label for="car_type" class="form-label">Car Type</label>
                    <select id="car_type" name="car_type" class="form-select" required>
                        <option value="" disabled selected>Select car type</option>
                        <option value="small">Small Car</option>
                        <option value="suv">SUV</option>
                        <option value="truck">Truck</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Generate Ticket</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
