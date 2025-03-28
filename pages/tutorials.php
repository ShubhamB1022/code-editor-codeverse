<?php session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="./../css/toturials.css">
    <link rel="icon" href="./../imges/navlogo.png">
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="./../index.php"><img src="./../imges/logo.png" alt=""></a></label>

        <!-- <input type="text" class="search_box" placeholder="Search...">
        <img src="/imges/search.png" alt="" class="search_icon"> -->

        <div class="search-container">
            <input type="text" class="search-box" placeholder="Search...">
            <i class="fas fa-search search-icon"></i>
          </div>
          

        <ul>
            <li><a class="active" href="./../index.php">Home</a></li>
            <li><a href="./../pages/codezone.php">CodeZone</a></li>
            <li><a href="./../pages/tutorials.php"><b>Tutorials</b></a></li>
            <li><a href="./../pages/about.php">About</a></li>
        </ul>
        <div class="auth-area">
            <?php if ($username): ?>

                <a href="./../pages/logout.php" class="signup_btn">Sign Out</a>
            <?php else: ?>
                <button class="signup_btn" onclick="window.location.href='./../pages/signin.php'">Sign In</button>
            <?php endif; ?>
        </div>
    </nav>
    <div class="tutorials">
        <h1 style="text-align: center; color: white;" >Toturials</h1>

        <div class="sidebar">
            <ul class="sidebar-list"></ul>
                <li><a href="#html-introduction">HTML Introduction</a></li>
                <li><a href="#html-elements">HTML Elements</a></li>
                <li><a href="#html-attributes">HTML Attributes</a></li>
                <li><a href="#html-headings">HTML Headings</a></li>
                <li><a href="#html-paragraphs">HTML Paragraphs</a></li>
                <li><a href="#html-links">HTML Links</a></li>
                <li><a href="#html-images">HTML Images</a></li>
                <li><a href="#html-tables">HTML Tables</a></li>
                <li><a href="#html-lists">HTML Lists</a></li>
                <li><a href="#html-forms">HTML Forms</a></li>
            </ul>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
            <p>
                <a href="contract .html" class="text-white mx-2">Privacy Policy</a> |
                <a href="contract .html" class="text-white mx-2">Terms & Conditions</a> |
                <a href="contract .html" class="text-white mx-2">Contact Us</a>
            </p>

        </div>
    </footer>

</body>
</html>