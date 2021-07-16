<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body class="back" style="align-items: center;">
    <!-- Header Session -->

    <header>
        <div class="nav-section">
            <div>
                <span class="navbtn flex">
                    <i class="fas fa-bars"></i>
                </span>
            </div>
            <!-- navigation menu -->
            <nav class="top-nav">
                <ul>
                    <li><a href="home.html" class="href">HOME</a></li>
                    <li><a href="home.html" class="href">ABOUT</a></li>
                    <li><a href="Booking.php" class="href">BOOKING</a></li>
                    <li><a href="topplaces.html" class="href">Top Booking Destinations</a></li>
                    <li><a href="reg.html" class="href">Register/Login</a></li>
                </ul>
            </nav>
            <!-- End of navigation Session -->
        </div>
    </header>

    <!-- Header Session -->

    <div class="log">
        <form class="login-email" method="post" action="register.php">
            <p class="login-text">register</p>
            <div class="input-group">
                <input type="text" placeholder="username" name="username" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder=" confirm password" name="cpassword" required>
            </div>
            <div class="input-group">
                <button class="btn">REGISTER</button>
            </div>
            <p class="login-register-text">Have an account? <a href="reg.html">Login here</a></p>
        </form>
    </div>
    <!-- footer -->
    <section id="footer">
        <footer class="footer">
            <div class="inner-footer">
                <div class="social-links">
                    <ul>
                        <li class="social-items"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="social-items"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-items"><a href="#"><i class="fas fa-at"></i></a></li>
                        <li class="social-items"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="outer-footer">
                <P> &copy; Copyright Char Techies by Citians , Simple and Unique Template </P>
            </div>
        </footer>
    </section>
    <script src="script.js"></script>
</body>

</html>