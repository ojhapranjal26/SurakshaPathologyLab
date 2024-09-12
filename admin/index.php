<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SURAKSHA PATHALOGY Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef; /* Light background color */
            background-image: url(''); /* Optional background image */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .login-container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1s ease-out;
            opacity: 0;
        }

        .login-container.fadeIn {
            opacity: 1;
        }

        .login-container h2 {
            margin-bottom: 1.5rem;
            color: #343a40;
        }

        .login-container .form-control {
            border-radius: 0.375rem;
        }

        .login-container .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .login-container .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .login-container .form-text {
            color: #6c757d;
        }

        .login-container .footer {
            margin-top: 1.5rem;
            text-align: center;
        }

        .login-container .footer a {
            color: #007bff;
        }

        .login-container .footer a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="login-container fadeIn">
        <h2 class="text-center">
            <i class="bi bi-heart-pulse"></i> SURAKSHA PATHALOGY Lab
        </h2>
        <form id="loginForm">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your username" value="test" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" value="1234" required>
            </div>
           
            <button type="submit" class="btn btn-primary w-100">Login</button>
           
            <div class="footer mt-3">
                <a href="#">Forgot password?</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.querySelector('.login-container').classList.add('fadeIn');
        });

        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            
            // Perform form validation and authentication here

            // Redirect to a new page after successful login
            window.location.href = 'home.php'; // Change 'home.php' to the URL of the page you want to redirect to
        });
    </script>
</body>
</html>
