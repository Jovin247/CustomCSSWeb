<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            border: 1px solid #e5e7eb;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .login-container label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            outline: none;
        }

        .login-container button {
            background-color: #68d391;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container a {
            color: #68d391;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
        
        .forgot-password-link {
            margin-top: 16px;
            font-size: 14px;
            color: #374151;
        }

        .signup-link {
            margin-top: 16px;
            font-size: 14px;
            color: #374151;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Log In</h2>
    <form action="{{ route('dashboard') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Log In</button>
    </form>
    <a href="#" class="forgot-password-link">Forgot Password?</a>
    <p class="signup-link">or <a href="{{ route('register') }}">Register Account</a></p>
</div>
</body>
</html>
