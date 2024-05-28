<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-end; /* Tetap berada di sebelah kanan */
            height: 100vh;
            background: url('/img/Login_1.png') no-repeat center center fixed;
            background-size: cover;
            padding-right: 120px; /* Jarak dari tepi kanan */
        }

        .logo-container {
            margin-bottom: 20px;
            margin-right: 70px; /* Sesuaikan jarak dengan kontainer login */
            text-align: center;
        }

        .login-container {
            width: 300px;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="logo-container">
        <img src="/img/Logo.png" alt="Logo" class="img-fluid" style="max-width: 150px;">
    </div>
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center mt-3">
            <p>Tidak Punya Akun? <a href="{{ route('signup') }}">Sign up</a></p>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
