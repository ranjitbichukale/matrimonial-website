<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Photos</title>
    <style>
        body {
            background-image: url('sh6.jpg');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 3em;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); /* Improved shadow for readability */
            font-family: 'Georgia', serif; /* More elegant font */
            letter-spacing: 2px; /* Adds a little spacing to letters */
        }

        p {
            font-style: italic;
            font-size: 1.5em;
            text-align: center;
            margin-top: 10px;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
        }

        .photos {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .photo {
            border-radius: 10px;
            overflow: hidden;
            width: 300px;
            height: 400px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }

        .photo:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7);
        }

        .photo:hover img {
            opacity: 0.9; /* Slightly fade image on hover */
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5em; /* Make heading smaller on mobile */
            }
            .photos {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            .photo {
                width: 90%; /* Make photos take up more space on mobile */
                height: auto; /* Keep the aspect ratio intact */
            }
        }
    </style>
</head>
<body>

    <h1>My Photos</h1>
    <p><u>May Your Marriage Grow Stronger And Shine Brighter Than Sunrise....</u></p>

    <div class="photos">
        <?php
            include("connection.php");
            session_start();
            
            $username = $_SESSION["username"];
            $sql = "SELECT * FROM regi WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $phfirst = $row['phfirst'];
            $phsecond = $row['phsecond'];
            $phthird = $row['phthird'];
            $phfour = $row['phfour'];

            // Display photos in responsive container
            echo "<div class='photo'><img src='photo/userphoto/$phfirst' alt='Photo 1'></div>";
            echo "<div class='photo'><img src='photo/userphoto/$phsecond' alt='Photo 2'></div>";
            echo "<div class='photo'><img src='photo/userphoto/$phthird' alt='Photo 3'></div>";
            echo "<div class='photo'><img src='photo/userphoto/$phfour' alt='Photo 4'></div>";
        ?>
    </div>

</body>
</html>
