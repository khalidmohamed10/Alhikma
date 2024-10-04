<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Al Hikma Islamic Academy</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<nav>
        <div class="navbar">
            <div class="logo"><a href="index.html">Al-Hikma Islamic Academy</a></div>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="registration.php">Registation</a></li>
            </ul>
        </div>
    </nav>
    <section class="registration">
    <div class="registration-section">
        <div class="contact-form">
            <h2>Quick Registration</h2>
            <div id="error-message" class="error-message">
                <?php 
                // Display error message for duplicate registration
                if (isset($_GET['error']) && $_GET['error'] === 'duplicate') {
                    echo "<p style='color: red;'>User already registered!</p>";
                }
                ?>
            </div>
            <section class="registration-form">
                <form action="process_registration.php" method="POST">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="whatsapp">WhatsApp Number:</label>
                    <input type="text" id="whatsapp" name="whatsapp" required>

                    <label for="country">Recent Country:</label>
                    <input type="text" id="country" name="country" required>

                    <button type="submit" class="btn">Submit</button>
                </form>
            </section>
        </div>
    </div>
</section>

<section class="contact-info">
    <div class="contact-info-container">
        <h2>Get in Touch</h2>
        <p>WhatsApp or Call</p>
        <ul>
            <li>Phone: +252 672127951</li>
            <li>Skype/Email</li>
            <li>alhikmaislamic@gmail.com</li>
        </ul>
    </div>
</section>


    <footer>
        <div class="footer-content">
            <p>COPYRIGHT © 2024 Al-hikma Islamic Academy ALL RIGHTS RESERVED</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
