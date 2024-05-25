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
            align-items: flex-end;
            height: 100vh;
            background: url('/img/Login_1.png') no-repeat center center fixed;
            background-size: cover;
            padding-right: 120px;
        }

        .logo-container {
            margin-bottom: 20px;
            margin-right: 70px; /* Adjust this value as needed */
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
        <form>
            <div class="form-group">
                <label for="email">Username</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center mt-3">
            <p>Don't have an account? <a href="signup.html">Sign up</a></p>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
