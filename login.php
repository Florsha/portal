<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Light gray background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff; /* White background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-sizing: border-box;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #333333; /* Dark gray text color */
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 15px 0;
            border: 1px solid #cccccc; /* Light gray border */
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 18px;
            color: #555555; /* Dark gray text color */
        }
        .login-container button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            background-color: #007bff; /* Bootstrap primary blue */
            color: #ffffff; /* White text color */
            font-size: 20px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
        .login-container a {
            display: block;
            margin-top: 10px;
            color: #007bff; /* Blue link color */
            text-decoration: none;
            font-size: 16px;
        }
        .login-container a:hover {
            text-decoration: underline; /* Underline on hover */
        }
        @media (max-width: 600px) {
            .login-container {
                padding: 20px;
            }
            .login-container h2 {
                font-size: 24px;
            }
            .login-container input[type="text"],
            .login-container input[type="password"] {
                padding: 12px;
                margin: 12px 0;
                font-size: 16px;
            }
            .login-container button {
                padding: 12px;
                font-size: 18px;
            }
            .logo-header {
                display: flex; /* Use flexbox for layout */
                align-items: center; /* Center items vertically */
            }
            .logo-header img {
                margin-right: 10px; /* Adjust margin between image and text */
            }
        }
        .footer {
            padding: 0.9rem;
            text-align: left;
            font-style: italic;
            color:midnightblue;
            font-size: 13px;
        }
    </style>
</head>
<body>
<div class="login-container">
    <div class="logo-header">
        <img src="\portal\img\doh.png" style="width:100px; height:100px;">
        <h5>Portal Login</h5>
    </div>
    <form action="/login" method="POST">
        <input type="text" name="username" placeholder="Username" required><i class="fa fa-unlock-alt" aria-hidden="true"></i>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <a href="#">Forgot password?</a>
    <div class="footer">
        Please use your dtr credentials.
    </div>
</div>
</body>
</html>
