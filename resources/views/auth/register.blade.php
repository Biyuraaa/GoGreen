<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">
    <style>
        ::selection {
            background: #2D2F36;
        }
        ::-webkit-selection {
            background: #2D2F36;
        }
        ::-moz-selection {
            background: #2D2F36;
        }
        body {
            background-image: url('assets/images/background.jpg');
            background-repeat: no-repeat;
            font-family: 'Inter UI', sans-serif;
            background-size: cover;
            margin: 0;
        }
        .page {
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 480px;
            width: 840px;
            margin: 0 auto;
        }
        .right {
            background: #1a643d;
            color: #F1F1F2;
            width: 50%;
            position: relative;
            box-shadow: 0px 0px 40px 16px rgba(0,0,0,0.22);
            padding: 20px;
        }
        .form {
            margin: 0 auto;
            max-width: 320px;
        }
        .form .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #fff;
        }
        .form label {
            font-size: 18px;
            margin-bottom: 5px;
            color: #fff;
        }
        .form input[type="email"],
        .form input[type="password"],
        .form input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #67e0a0;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .form button[type="submit"]:hover {
            background-color: #1fd674;
        }
        .register-link {
            color: white;
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
        .register-link a {
            color: #67e0a0;
            text-decoration: none;
        }
        #error-message {
            color: red;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="container">
            <div class="right">
                <div class="form">
                    <form id="registerForm" method="POST" action="{{ route('register') }}">
                        @csrf
                        <h2 class="title">Register for an account.</h2>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter email">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <label for="name">Username</label>
                        <input type="text" id="name" name="name" placeholder="Enter username">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter password">
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password">
                        @error('password_confirmation')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <button type="submit">Submit</button>
                    </form>
                    <div id="error-message"></div>
                </div>
                <p class="register-link">Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>

