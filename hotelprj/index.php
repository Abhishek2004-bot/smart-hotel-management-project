
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==
    "crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="style.css">
</head>
<body>
<!--navigation bar start -->
<nav class="navbar">
        <a href="#logo">Logo</a>
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <div class="dropdown">
            <a onclick="toggleDropdown()">Booking ▼</a>
            <div class="dropdown-content" id="dropdownMenu">
                <a href="#">Rooms Booking</a>
                <a href="#">Table Booking</a>

            </div>
        </div>
      <a href="#menu">Food Menu</a>
        <a href="#deals">Services</a>

        <a href="#contact">Contact Us</a>
        <a href="#login">Login</a>


    </nav>
 
<!--navigation bar end  -->
<script src="script.js"></script>
</body>
</html>