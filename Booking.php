<!DOCTYPE html>
<html>
<head>
    <title>Booking Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body class="back">
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
                    <li><a href="Booking.html" class="href">BOOKING</a></li>
                    <li><a href="topplaces.html" class="href">Top Booking Destinations</a></li>
                    <li><a href="reg.html" class="href">Register/Login</a></li>
                </ul>
            </nav>
            </div>
            </header>
    <!-- End Of Header -->

    <!-- Booking Session -->
    <center>
        <form method="post" action="send.php">
            <fieldset>
                <table>
                    <h1 class="head1">Booking Form</h1>
                    <tr>
                        <th>Name</th>
                        <td>:</td>
                        <td><input type="text" name="name" id="name1" placeholder="Enter Your Name" </td>
                    </tr>
                    <tr>
                        <th>Email id</th>
                        <td>:</td>
                        <td><input type="email" name="Email" id="Email" placeholder="Enter Your Email id" </td>
                    </tr>
                    <tr>
                        <th>Contact No</th>
                        <td>:</td>
                        <td><input type="number" name="number" id="number" placeholder="Enter Your Contact Number" </td>
                    </tr>
                    <tr>
                        <th>From Date</th>
                        <td>:</td>
                        <td><input type="date" name="date" id="date" </td>
                    </tr>
                    <tr>
                        <th>To date</th>
                        <td>:</td>
                        <td><input type="date" name="todate" id="todate" </td>
                    </tr>
                    <tr>
                        <th>Days</th>
                        <td>:</td>
                        <td><input type="text" name="days" id="Days" placeholder="Enter Days" </td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>:</td>
                        <td><input type="text" name="amount" id="Amount" placeholder="Enter Amount" </td>
                    </tr>
                </table>
                <div>
                    <tr>
                        <td>
                            <input type="checkbox" required><br>
                            <input type="Reset" value="Reset" name="Reset" id="Reset">
                            <input type="Submit" value="Submit" name="Submit" id="Submit">
                        </td>
                    </tr>
                </div>
            </fieldset>
        </form>
    </center>

<!-- End of Booking Session -->
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
</body>

</html>