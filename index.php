<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
    <a href="#" class="navbar-brand">Hospitality & Services Hub <span style="font-size: large;">-A Network for Reliable Help-</span></a>
    <ul class="navbar-menu">
        <li class="navbar-item dropdown">
            <a href="#" class="nav-link">Services</a>
            <ul class="dropdown-menu">
                <li><a href="bookdecorator/index.html" class="dropdown-item">Decorator</a></li>
                <li><a href="bookcook/index.html" class="dropdown-item">Cook</a></li>
                <li><a href="bookbabysitter/babysitter.html" class="dropdown-item">Babysitter</a></li>
                <li><a href="bookdriver/index.html" class="dropdown-item">Driver</a></li>
                <li><a href="bookelectrician/index.html" class="dropdown-item">Electrician</a></li>
            </ul>
        </li>
        <?php if(isset($_SESSION['email'])): ?>
            <?php
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT users.* FROM users WHERE users.email='$email'");
            $user = mysqli_fetch_array($query);
            ?>
            <li class="navbar-item"><a href="profile.php" class="nav-link"><?php echo htmlspecialchars($user['fname']); ?></a></li>
        <?php else: ?>
            <li class="navbar-item"><a href="http://localhost/myproject/userlogin/index.php" class="nav-link">Sign up / Log in</a></li>
        <?php endif; ?>
        <!-- Become a Tasker tab -->
        <li class="navbar-item"><a href="Logout.php" class="nav-link">Logout</a></li>
        <!-- Become a Tasker tab -->
        <li class="navbar-item">
            <a href="https://forms.gle/wQh8ZH9pdaXCYVFZ8" class="nav-link tasker-link">Register as Service Provider</a>
        </li>
    </ul>
</nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="hero-content">
            <h1>Book trusted help <br> for home tasks</h1>
            <form class="search-form" id="search-form">
                <input type="text" id="search-input" placeholder="What do you need help with?" autocomplete="off">
                <div id="suggestions" class="suggestions"></div>
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="tasks">
                <a href="bookdecorator/index.html" class="task">
                    <img src="icons/maid.jpg" alt="Maid">
                    <span>Decorator</span>
                </a>
                <a href="bookcook/index.html" class="task">
                    <img src="icons/cook.jpg" alt="Cook">
                    <span>chef</span>
                </a>
                <a href="bookbabysitter/babysitter.html" class="task">
                    <img src="icons/babysitter.jpg" alt="BabySitter">
                    <span>BabySitter</span>
                </a>
                <a href="bookdriver/index.html" class="task">
                    <img src="icons/driver.jpg" alt="Driver">
                    <span>Driver</span>
                </a>
                <a href="bookelectrician/index.html" class="task">
                    <img src="icons/electrician.jpg" alt="Electrician">
                    <span>Electrician</span>
                </a>
            </div>            
        </div>
        <div class="scroll-down">
            <i class="fas fa-chevron-down"></i>
        </div>
    </header>

    <!-- Customer Review Section -->
    <section class="customer-reviews">
        <h2>See what happy customers are saying</h2>
        <div class="review-container">
            <div class="review">
                <p class="customer-name">Siddhant Goenka</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="review-text">Excellent service! Highly recommend to anyone in need of home assistance.</p>
            </div>
            <div class="review">
                <p class="customer-name">Aryan B</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="review-text">Very professional and efficient. Will definitely use this service again.</p>
            </div>
            <!-- Add more reviews as needed -->
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>About Us</h3>
                <p>We provide trusted and professional home services to help you with your daily tasks. Our goal is to make your life easier and more comfortable.</p>
            </div>
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact Us</h3>
                <p>Email: support@hospitalityhub.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: Ghodbander road, Thane, India</p>
            </div>
            <div class="footer-column">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Hospitality & Services Hub. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
