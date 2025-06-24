<?php
session_start();
include("connection.php"); //require="file name";
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-image: url("media/extra.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                padding-top: 100px;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .container {
                display: flex;
                width: 100%;
                max-width: 1200px;
                margin: 0 auto;
                justify-content: space-between;
                padding: 0 20px;
            }

            /* Left Section */
            .left-section {
                width: 48%;
                background-color: rgba(255, 255, 255, 0.8);
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .panel-heading {
                background-color: #f44336;
                color: white;
                text-align: center;
                padding: 15px;
                border-radius: 6px;
            }

            .panel-body {
                padding: 20px;
            }

            .input-field {
                width: 100%;
                padding: 12px;
                margin: 12px 0;
                border: 1px solid #ccc;
                border-radius: 6px;
                font-size: 16px;
            }

            .button {
                width: 100%;
                padding: 12px;
                border: none;
                border-radius: 6px;
                background-color: #4B5563;
                color: white;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .button:hover {
                background-color: #2D3748;
            }

            .error-message {
                color: #E53E3E;
                font-size: 14px;
                margin-top: 10px;
                text-align: center;
            }

            .forgot-password,
            .signup-link {
                text-align: center;
                margin-top: 10px;
            }

            .signup-link a {
                border: 1px solid #E53E3E;
                color: #E53E3E;
                padding: 6px 12px;
                border-radius: 6px;
                transition: background-color 0.3s;
            }

            .signup-link a:hover {
                background-color: #E53E3E;
                color: white;
            }

            .panel-footer {
                text-align: center;
                font-size: 14px;
            }

            .panel-footer a {
                color: #f44336;
            }

            /* Right Section */
            .right-section {
                width: 48%;
                padding: 20px;
                background: linear-gradient(to right, #f44336, #f06292);
                color: white;
                border-radius: 8px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .right-section h6 {
                font-size: 20px;
                font-weight: bold;
            }

            .right-section p {
                font-size: 16px;
                margin-top: 10px;
                line-height: 1.6;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <!-- Left Section: Login Form -->
            <div class="left-section">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>LOGIN</h3>
                    </div>
                    <div class="panel-body">
                        <p>Login to make a purchase.</p>
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" class="input-field" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="input-field" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="button" value="Submit" name="submit">
                                <input type="reset" class="btn btn-danger" value="Cancel">
                            </div>
                        </form>
                        <!-- Display error message if any -->
                        <?php
                        if (isset($errorMessage)) {
                            echo "<p class='error-message'>$errorMessage</p>";
                        }
                        ?>
                    </div>
                    <div class="panel-footer">
                        Don't have an account yet? <a href="g.php">Register</a>
                    </div>
                </div>
            </div>

            <!-- Right Section: Descriptive Message -->
            <div class="right-section">
                <h6>"Two souls, one journey. Let’s build a lifetime of love, trust, and togetherness."</h6>
                <p>
                    Where your journey towards finding a life partner begins. Log in to explore personalized profiles. 
                    Our platform offers a safe and supportive space to help you make meaningful connections. 
                    Sign in now and take the first step towards a beautiful new chapter in your life.
                </p>
            </div>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (!$username || !$password) {
                $errorMessage = "Username and Password Empty";
            } else {
                $sql = "SELECT * FROM regi WHERE username='$username' AND password='$password'";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                    $errorMessage = "No user found";
                } else {
                    $row = mysqli_fetch_assoc($result);
                    $username = $row['username'];
                    $_SESSION["username"] = $username;
                    ?>
                    <script>
                        window.location.href = "success.php";
                    </script>
                    <?php
                }
            }
        }
        ?>
    </body>
</html>
