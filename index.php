<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="services/report.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<!-- Mobile Screen Menu Start-->
    <aside class="aside">
        <nav class="nav2">
            <div class="menu">
                <div class="logo">
                    <h1>My <span>Money</span></h1>
                </div>
                <ul id="ul">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.html#team">About</a></li>
                    <li><a href="index.html#services">Services</a></li>
                    <?php if (isset($_SESSION['email'])) : ?>
                        <li id="user-profile"><i class="fa fa-user" aria-hidden="true"></i>
                            <a href=""><?php echo $_SESSION['email']; ?></a>
                        </li>
                        <li><i class="fa fa-sign-out" aria-hidden="true"></i>
                            <a href="logout.php">Logout</a>
                        </li>
                    <?php else : ?>
                        <li><i class="fa fa-sign-in" aria-hidden="true"></i>
                            <a href="login.html">Login</a>
                        </li>
                        <li><i class="fa fa-user-plus" aria-hidden="true"></i>
                            <a href="signup.html">Sign Up</a>
                        </li>
                    <?php endif; ?>


                </ul>
            </div>
            <div class="menu-bar">
                <i class="fa fa-times" id="close-menu" aria-hidden="true"></i>
            </div>
        </nav>
    </aside>
<!-- Mobile Screen Menu End-->


<!-- Nav Part Start  -->
    <nav class="nav1">
        <p><i class="fa fa-phone" aria-hidden="true"></i> Call Us: +91 54005 54005</p>
        <p><i class="fa fa-thumb-tack" aria-hidden="true"></i> Location: Gujrat, India</p>
    </nav>
    <nav class="nav2" id="nav2">
        <div class="logo">
            <h1>My <span>Money</span></h1>
        </div>
        <div class="menu-bar"><i class="fa fa-bars" id="menu-bar" aria-hidden="true"></i>
        </div>
        <div class="menu">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i>
                    <a href="index.php">Home</a>
                </li>
                <li><i class="fa fa-info" aria-hidden="true"></i>
                    <a href="#team">About</a>
                </li>
                <li><i class="fa fa-briefcase" aria-hidden="true"></i>
                    <a href="#services">Services</a>
                </li>

                <?php if (isset($_SESSION['email'])) : ?>
                    <li id="user-profile"><i class="fa fa-user" aria-hidden="true"></i>
                        <a href=""><?php echo $_SESSION['email']; ?></a>
                    </li>
                    <li><i class="fa fa-sign-out" aria-hidden="true"></i>
                        <a href="logout.php">Logout</a>
                    </li>
                <?php else : ?>
                    <li><i class="fa fa-sign-in" aria-hidden="true"></i>
                        <a href="login.html">Login</a>
                    </li>
                    <li><i class="fa fa-user-plus" aria-hidden="true"></i>
                        <a href="signup.html">Sign Up</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </nav>
    <!-- Nav Part End  -->

    <!-- hero part Start -->
    <div class="hero">
        <div class="hslider">
            <div class="img1">
                <div class="overlay"></div>
                <img src="Assets/pexels-helena-lopes-933964.jpg" alt="">
                <div class="himg-text">
                    <h2>We're Always Here To Give Financial Help!</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there
                        live the blind texts.</p>
                    <button class="hero-btn" type="submit"><a href="signup.html">GET STARTED</a></button>
                </div>
            </div>
            <div class="img2">
                <div class="overlay"></div>
                <img src="Assets/pexels-canva-studio-3153207.jpg" alt="">
                <div class="himg-text">
                    <h2>Build Your Financial Plan With Our Specialists</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there
                        live the blind texts.</p>
                    <button class="hero-btn" type="submit"><a href="signup.html">GET STARTED</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- hero part End -->

    <!-- team part  -->
    <div id="team">
        <div class="text">
            <p>MEET OUR BRILLIANT MINDS</p>
            <h2>Our Leadership Team</h2>
        </div>
        <div class="profile">
            <div class="block">
                <img src="Assets/img2.png" alt="">
                <div class="data">
                    <h3>Jason Smith</h3>
                    <h4>PRESIDENT & CEO</h4>
                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>
            </div>
            <div class="block">
                <img src="Assets/pexels-fauxels-3184611.jpg" alt="">
                <div class="data">
                    <h3> Jeffrey Rockenson</h3>
                    <h4>EXECUTIVE VICE PRESIDENT</h4>
                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>
            </div>
            <div class="block">
                <img src="Assets/pexels-teddy-joseph-2955375.jpg" alt="">
                <div class="data">
                    <h3> Jason Smith</h3>
                    <h4>GENERAL MANAGER</h4>
                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>
            </div>
            <div class="block">
                <img src="Assets/pexels-nappy-3460134.jpg" alt="">
                <div class="data">
                    <h3>Jason Smith</h3>
                    <h4>STRATEGIC CONSULTANT</h4>
                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>
            </div>

            <div class="block">
                <img src="Assets/img2.png" alt="">
                <div class="data">
                    <h3>Jason Smith</h3>
                    <h4>PRESIDENT & CEO</h4>
                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>
            </div>
            <div class="block">
                <img src="Assets/pexels-fauxels-3184611.jpg" alt="">
                <div class="data">
                    <h3> Jeffrey Rockenson</h3>
                    <h4>EXECUTIVE VICE PRESIDENT</h4>
                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>
            </div>
            <div class="block">
                <img src="Assets/pexels-teddy-joseph-2955375.jpg" alt="">
                <div class="data">
                    <h3> Jason Smith</h3>
                    <h4>GENERAL MANAGER</h4>
                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>
            </div>
            <div class="block">
                <img src="Assets/pexels-nappy-3460134.jpg" alt="">
                <div class="data">
                    <h3>Jason Smith</h3>
                    <h4>STRATEGIC CONSULTANT</h4>
                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Services part  -->
    <div id="services">
        <h4>SERVICES</h4>
        <h2>Our Exclusive Services We Offer For You</h2>
        <div class="service">
            <div class="block">
                <div class="img">
                    <img src="services/financial-profit.png" alt="">

                </div>
                <h3>Financial Planning</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
            </div>

            <div class="block">
                <div class="img">
                    <img src="services/report.png" alt="">
                </div>
                <h3>Investments Management</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
            </div>

            <div class="block">
                <div class="img">
                    <img src="services/money-bag.png" alt="">
                </div>
                <h3>Business Loan</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
            </div>

            <div class="block">
                <div class="img">
                    <img src="services/budget.png" alt="">
                </div>
                <h3>Taxes Consulting</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
            </div>

            <div class="block">
                <div class="img">
                    <img src="services/risk.png" alt="">
                </div>
                <h3>Insurance Consulting</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
            </div>

            <div class="block">
                <div class="img">
                    <img src="services/cash-flow.png" alt="">
                </div>
                <h3>Retirement Planning</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
            </div>

            <div class="block">
                <div class="img">
                    <img src="services/businessman.png" alt="">
                </div>
                <h3>Risk Management</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
            </div>

            <div class="block">
                <div class="img">
                    <img src="services/financial-profit.png" alt="">
                </div>
                <h3>Technology Consulting</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
            </div>
        </div>
    </div>


    <!-- footer part  -->
    <footer>
        <div class="copyright">
            <p>Copyright ©2024 All rights reserved | This Website for only Project </p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>

</body>

</html>