{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <div>

    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORCHIDA CRM Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #4D4C7D;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: #f5f5f5;
            display: flex;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
        .left-panel {
            background: #f5f5f5;
            padding: 40px;
            flex: 1;
        }
        .right-panel {
            background: #e8e8e8;
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .btn-primary {
            background-color: #4D4C7D;
            border: none;
        }
        .btn-primary:hover {
            background-color: #3b3a6a;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Panel -->
        <div class="left-panel">
            <h2 class="mb-4 fw-bold">Welcome back</h2>
            <p class="fw-semibold">Login with credentials</p>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form method="POST" action="{{ route('login') }}" style="width: 100%; max-width: 300px;">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold fs-5">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="example@email.com" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold fs-5">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="****" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
            </form>
            {{-- <a href="register" class="text-end">New?Register</a> --}}
            <p class='d-flex flex-row justify-content-start mt-3'>No account? <a class="nav-link text-primary" href="register">Register</a></p>
        </div>

        <!-- Right Panel -->
        <div class="right-panel">
            {{-- <img src="asset('ticket-image.svg')" alt=""> --}}
            {!! file_get_contents(public_path('ticket-image.svg')) !!}
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

