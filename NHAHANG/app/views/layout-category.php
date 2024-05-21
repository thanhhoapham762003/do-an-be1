<?php
$categoryModel = new Category();
$categories = $categoryModel->getAllCategories();
require_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
            if (!empty($title)) {
                echo $title;
            }
            ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<section id="Home" style="height: 10vh;">
    <nav>
        <div class="logo">
            <img src="public/img/logo.png" alt="" href="index.php">
        </div>

        <ul>
            <li><a href="home.php">Home</a></li>
            <?php
                    foreach ($categories as $category) :
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="category.php?id=<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a>
                        </li>
                    <?php
                    endforeach
                    ?>
            <li><a href="login.php">Logout</a></li>                
        </ul>
        <form class="d-flex" role="search" action="search.php" method="get">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <form class="d-flex" action="shop_cart.php">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <!-- Hiển thị số lượng sản phẩm trong giỏ hàng -->
                        <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo getCartItemCount(); ?></span>
                    </button>
                </form>

    </nav>
    
</section>


<!--Menu-->

<?php
    if (!empty($slot)) {
        echo $slot;
    }
    ?>

<!--Footer-->

<footer>
    <div class="footer_main">

        <div class="footer_tag">
            <h2>Location</h2>
            <p>Sri Lanka</p>
            <p>USA</p>
            <p>India</p>
            <p>Japan</p>
            <p>Italy</p>
        </div>

        <div class="footer_tag">
            <h2>Quick Link</h2>
            <p>Home</p>
            <p>About</p>
            <p>Menu</p>
            <p>Gallary</p>
            <p>Order</p>
        </div>

        <div class="footer_tag">
            <h2>Contact</h2>
            <p>+94 12 3456 789</p>
            <p>+94 25 5568456</p>
            <p>johndeo123@gmail.com</p>
            <p>foodshop123@gmail.com</p>
        </div>

        <div class="footer_tag">
            <h2>Our Service</h2>
            <p>Fast Delivery</p>
            <p>Easy Payments</p>
            <p>24 x 7 Service</p>
        </div>

        <div class="footer_tag">
            <h2>Follows</h2>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin-in"></i>
        </div>

    </div>

    <p class="end">Design by<span><i class="fa-solid fa-face-grin"></i> BE1</span></p>

</footer>

</section>
</body>
</html>