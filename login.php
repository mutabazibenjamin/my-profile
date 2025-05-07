<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: black;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-image: url(xs.jpg);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-header h1 {
            color: yellow;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .login-header p {
            color: #606770;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #606770;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #1877f2;
            box-shadow: gray;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background: yellow;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background:wheat;
        }

        .additional-links {
            margin-top: 1rem;
            text-align: center;
        }

        .additional-links a {
            color: #1877f2;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .additional-links a:hover {
            text-decoration: underline;
        }

        .separator {
            margin: 1.5rem 0;
            border-top: 1px solid #dadde1;
            text-align: center;
            position: relative;
        }

        .separator span {
            background: white;
            padding: 0 8px;
            position: relative;
            top: -10px;
            color: #606770;
            font-size: 0.9rem;
        }

        @media (max-width: 480px) {
            .login-container {
                margin: 0 1rem;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Website</h1>
            <p>Welcome back! Please login to continue.</p>
        </div>
        
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" required>
            </div>
            
            <button type="submit" class="login-button">Log In</button>
            
            <div class="additional-links">
                <a href="#">Forgot password?</a>
            </div>
            
            <div class="separator">
                <span>OR</span>
            </div>
            <div class="additional-links">
              <a href="create new Account.html">Create new Account</a>
          </div>
            
        </form>
    </div>
    
</body>

</html>