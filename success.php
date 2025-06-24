<?php
// Code A (Profile Page)
// Start the session at the beginning of your PHP file
session_start();

// Check if the session variable 'username' is set
if (!isset($_SESSION["username"])) {
  // If not set, redirect to the login page or show an error message
  header("Location: login.php"); // Assuming 'login.php' is your login page
  exit(); // Exit after redirection
}

// Include the connection to the database
include("connection.php");

// Check if the username session variable is available
$username = $_SESSION["username"];

// Prevent SQL injection by using prepared statements
$sql = "SELECT * FROM regi WHERE username=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Fetch the user data if available
$row = mysqli_fetch_assoc($result);

// Check if the user image is available in the database, or set a default image
$image = isset($row['image']) ? $row['image'] : 'default.jpg'; // Default image if not found

// Close the database connection
mysqli_stmt_close($stmt);
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <style>
    /* --- Code A Styles --- */
    * {
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      margin: 0;
      font-family: 'Times New Roman', serif;
      background-image: url("shaadi-north-desktop.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      background-size: cover;  /* Make the background cover the entire page */
      height: 100vh;           /* Make the body take full viewport height */
      color: #fff;
      padding-top: 120px;
    }

    .top {
      background-color: rgba(255, 20, 147, 0.5);
      height: 100px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 35px;
      padding: 20px;
      color: #fff;
      z-index: 100;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    .top img {
      border-radius: 50%;
      height: 70px;
      width: 70px;
      margin-right: 15px;
    }

    .top a {
      color: blue;
      text-decoration: none;
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.4);
      height: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }

    .navbar ul {
      list-style: none;
      display: flex;
      margin: 0;
      padding: 0;
    }

    .navbar ul li {
      position: relative;
    }

    .navbar ul li a {
      padding: 15px 25px;
      color: #fff;
      text-decoration: none;
      font-size: 16px;
      display: block;
      transition: background-color 0.3s;
    }

    .navbar ul li a:hover {
      background-color: #FF6347;
    }

    .navbar ul li:hover > .dropdown {
      display: block;
      opacity: 1;
      visibility: visible;
      transition: opacity 0.3s ease-in-out;
    }

    .dropdown {
      display: none;
      position: absolute;
      background-color: #AB82FF;
      top: 100%;
      left: 0;
      width: 200px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
      z-index: 1000;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease-in-out;
    }

    .dropdown li a {
      padding: 10px 20px;
      background-color: #AB82FF;
      color: #fff;
      font-size: 14px;
      transition: background-color 0.3s ease;
    }

    .dropdown li a:hover {
      background-color: #FF6347;
    }

    @media (max-width: 768px) {
      .top {
        font-size: 25px;
      }

      .navbar ul {
        flex-direction: column;
      }

      .navbar ul li {
        width: 100%;
        text-align: center;
      }

      .dropdown {
        width: 100%;
      }
    }

    .content {
      padding: 20px;
      text-align: center;
    }

    .content h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    /* --- Code B Styles (Appended Below) --- */
    .photos-section {
      background-image: url('sh6.jpg');
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
      padding: 60px 20px;
      color: white;
      text-align: center;
    }

    .photos-section h1 {
      font-size: 3em;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
      font-family: 'Georgia', serif;
      letter-spacing: 2px;
    }

    .photos-section p {
      font-style: italic;
      font-size: 1.5em;
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
      opacity: 0.9;
    }

    @media (max-width: 768px) {
      .photos-section h1 {
        font-size: 2.5em;
      }

      .photos {
        flex-direction: column;
        align-items: center;
        gap: 15px;
      }

      .photo {
        width: 90%;
        height: auto;
      }
    }
  </style>
</head>
<body>

  <div class="top">
    <img src="photo/userphoto/<?php echo htmlspecialchars($image); ?>" alt="Profile Image">
    <span>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
  </div>

  <div class="navbar">
    <ul>
      <li><a href="editn.php">Edit</a></li>
      <li><a href="profile.php">Check MY Profile</a></li>
      <li><a href="match.php">Check My Match</a></li>
      <li>
        <a href="#">Find</a>
        <ul class="dropdown">
          <li><a href="district.php">District</a></li>
          <li><a href="name.php">Name</a></li>
          <li><a href="profession.php">Profession</a></li>
        </ul>
      </li>
      
      <li><a href="e.php">Add Photos</a></li>
      <li><a href="Myphoto.php">My Photos</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>

  <div class="content">
    <h2>Welcome to Your Profile</h2>
  </div>

  <!-- Code B Begins Here: My Photos Section -->
  <div class="photos-section">
    <h1>My Photos</h1>
    <p><u>May Your Marriage Grow Stronger And Shine Brighter Than Sunrise....</u></p>

    <div class="photos">
      <?php
        // Connection already included and session started above
        $sql_photos = "SELECT phfirst, phsecond, phthird, phfour FROM regi WHERE username=?";
        $stmt_photos = mysqli_prepare($conn, $sql_photos);
        mysqli_stmt_bind_param($stmt_photos, 's', $username);
        mysqli_stmt_execute($stmt_photos);
        $result_photos = mysqli_stmt_get_result($stmt_photos);
        $photo_row = mysqli_fetch_assoc($result_photos);

        $photos = [
          $photo_row['phfirst'],
          $photo_row['phsecond'],
          $photo_row['phthird'],
          $photo_row['phfour']
        ];

        foreach ($photos as $index => $photo) {
          if (!empty($photo)) {
            echo "<div class='photo'><img src='photo/userphoto/" . htmlspecialchars($photo) . "' alt='User Photo " . ($index + 1) . "'></div>";
          }
        }

        mysqli_stmt_close($stmt_photos);
        mysqli_close($conn);
      ?>
    </div>
  </div>

</body>
</html>
