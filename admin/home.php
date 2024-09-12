<?php include "header.php"; ?>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
            margin-top: 50px;
        }
        .welcome-msg {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }
        h1 {
            color: #343a40;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
        <!-- Main Content Area -->
        <div class="container p-4">
        <div class="welcome-msg">
            <h1>Welcome to the Blood Testing Dashboard</h1>
            <p>This is your main content area where you can manage and review blood test reports.</p>
            <a href="test_result.php" class="btn btn-primary">View Reports</a>
        </div>
        </div>
<?php include "footer.php"; ?>  
    

    

    

    

    
