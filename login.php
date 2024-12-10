<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .login-form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        .login-form img {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }

        .login-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .login-form input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-form button {
            width: 45%;
            padding: 10px;
            margin: 10px 5%;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-form button.clear {
            background-color: #dc3545;
        }

        .login-form button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <img src="./assets/img/logo.png" alt="Logo">
        <h2>SFAN Login</h2>
        <form method="post" action="forms/loginform.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mot de Passe" required>
            <div>
                <button type="submit">Login</button>
                <button type="reset" class="clear">Clear</button>
            </div>
        </form>

        <p>Routour à <a href="index.php">l'acceuil</a></p>
    </div>
</body>
</html>
