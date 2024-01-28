<?php
$login = 0;
$invalid = 0;

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `registration` WHERE username = '$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $login = 1;
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit();
        } else {
            $invalid = 1;
        }
    } else {
        $error = "Error: " . mysqli_error($con);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login - Quantum Hub</title>
</head>
<body>

<!-- top navbar -->
<div class="top-navbar">
    <p>
        <?php
        if (isset($_SESSION['username'])) {
            echo "Welcome, " . $_SESSION['username'] . "!";
        } else {
            echo "Unleash the Power of Electronics with Us!";
        }
        ?>
    </p>
    <div class="icons">
        <?php
        if (isset($_SESSION['username'])) {
            echo '<a href="logout.php"><img src="img/logout-svgrepo-com.svg" alt="" width="18px">Logout</a>';
        } else {
            echo '<a href="login.php"><img src="img/login-svgrepo-com.svg" alt="" width="18px">Login</a>';
            echo '<a href="register.php"><img src="img/login-svgrepo-com.svg" alt="" width="18px">Register</a>';
        }
        ?>
    </div>
</div>
<!-- top navbar -->

<!-- navbar -->
<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" id="logo"><span id="span1">Q</span>uantum<span id="span2">Hub</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="img/menu-svgrepo-com (1).svg" alt="" width="30px"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Products</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(7,0,86);">
                        <li><a class="dropdown-item" href="#">Smartphones</a></li>
                        <li><a class="dropdown-item" href="#">TV</a></li>
                        <li><a class="dropdown-item" href="#">Laptops</a></li>
                        <li><a class="dropdown-item" href="#">Camera</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Accessories</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar -->

<div class="container" id="login">
    <div class="row">
        <div class="col-md-5 py-3 py-md-0" id="side1">
            <h3 class="text-center">Login</h3>
        </div>
        <div class="col-md-7 py-3 py-md-0" id="side2">
            <h3 class="text-center">Enter Your Credentials</h3>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <?php if ($invalid): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> Invalid username or password.
                   
                </div>
            <?php endif; ?>
            <form action="login.php" method="post">
                <div class="input2 text-center">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <br>
                    <button type="submit" class="btn btn-primary text-center " style="margin-top: 23px;">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Quantum Hub</h3>
                    <p>
                        USA <br>
                        Canada <br>
                    </p>
                    <strong>Phone:</strong> +1 0000 0000 <br>
                    <strong>Email:</strong> cc@quantumhub.com <br>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Product</h4>
                    <ul>
                        <li><a href="#">PS 6G</a></li>
                        <li><a href="#">Laptop</a></li>
                        <li><a href="#">Mobile Phone</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Stay Linked, Stay Updated: Connect with Us Across Social Media for the Latest News and Engaging Content!</p>

                    <div class="social-links mt-3">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-skype"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Quantum Hub</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">Manan Kochar</a>
        </div>
    </div>
</footer>
<!-- footer -->

<a href="#" class="arrow"><i><img src="img/circle-arrow-up-solid (1).svg" alt=""></i></a>

<!-- Bootstrap JS and dependencies (placed at the end for faster page loading) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
