
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORCHIDA CRM Register</title>
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
            <h2 class="mb-4 fw-bold">Register here</h2>
            <p class="fw-semibold"> Enter Details</p>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form method="POST" action="{{ route('register') }}" style="width: 100%; max-width: 300px;">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold fs-5">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="john doe" required>
                    @error('text')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
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
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label fw-bold fs-5">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="****" required>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
            </form>
            <p class='d-flex flex-row justify-content-start mt-3'>Already registered? <a class="nav-link text-primary" href="login">Login</a></p>

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
