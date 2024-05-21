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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<section id="Home">
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
    <div class="main">

        <div class="men_text">
            <h1>Get Fresh<span>Food</span><br>in a Easy Way</h1>
        </div>

        <div class="main_image">
            <img src="public/img/main_img.png">
        </div>

    </div>

    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse reiciendis quaerat nobis 
        deleniti amet non inventore. Reprehenderit recusandae voluptatibus minus tenetur itaque numquam 
        cum quos dolorem maxime. Quas, quaerat nisi. Lorem ipsum dolor sit, amet consectetur adipisicing 
        elit. Cumque facilis, quaerat cupiditate nulla quibusdam quo sunt esse tempore inventore vel 
        voluptate, amet laudantium adipisci veniam nihil quam molestiae omnis mollitia.
    </p>

    <div class="main_btn">
        <a href="category.php?id=1">Order Now</a>
        <i class="fa-solid fa-angle-right"></i>
    </div>

</section>



<!--About-->

<div class="about" id="About">
    <div class="about_main">

        <div class="image">
            <img src="public/img/Food-Plate.png">
        </div>

        <div class="about_text">
            <h1><span>About</span>Us</h1>
            <h3>Why Choose us?</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, est. Doloremque 
                sapiente veritatis laboriosam corrupti optio et maxime. Ad, amet explicabo eaque labore 
                cupiditate quasi nostrum nemo recusandae id quibusdam? Lorem ipsum dolor sit amet 
                consectetur adipisicing elit. Doloremque ab, dolores pariatur cum exercitationem, illo nisi 
                veritatis vitae ea deleniti fugiat quisquam tempora, accusantium corrupti excepturi optio. 
                Inventore, cupiditate recusandae.
            </p>
        </div>

    </div>

    <a href="category.php?id=1" class="about_btn">Order Now</a>

</div>



<!--Menu-->

<?php
    if (!empty($slot)) {
        echo $slot;
    }
    ?>




<!--Gallary-->

<div class="gallary" id="Gallary">
    <h1>Our<span>Gallary</span></h1>

    <div class="gallary_image_box">
        <div class="gallary_image">
            <img src="public/img/gallary_1.jpg">

            <h3>Food</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam 
            </p>
            <a href="category.php?id=1" class="gallary_btn">Order Now</a>
        </div>

        <div class="gallary_image">
            <img src="public/img/gallary_2.jpg">

            <h3>Dessert</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam 
            </p>
            <a href="category.php?id=3" class="gallary_btn">Order Now</a>
        </div>

        <div class="gallary_image">
            <img src="public/img/gallary_3.jpg">

            <h3>Dessert</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam 
            </p>
            <a href="category.php?id=1" class="gallary_btn">Order Now</a>
        </div>

        <div class="gallary_image">
            <img src="public/img/gallary_4.jpg">

            <h3>Food</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam 
            </p>
            <a href="category.php?id=3" class="gallary_btn">Order Now</a>
        </div>

        <div class="gallary_image">
            <img src="public/img/gallary_5.jpg">

            <h3>Food</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam 
            </p>
            <a href="category.php?id=1" class="gallary_btn">Order Now</a>
        </div>

        <div class="gallary_image">
            <img src="public/img/gallary_6.jpg">

            <h3>Food</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam 
            </p>
            <a href="category.php?id=1" class="gallary_btn">Order Now</a>
        </div>

    </div>

</div>




<!--Review-->

<div class="review" id="Review">
    <h1>Customer<span>Review</span></h1>

    <div class="review_box">
        <div class="review_card">

            <div class="review_profile">
                <img src="public/img/review_1.png">
            </div>

            <div class="review_text">
                <h2 class="name">Reviewer</h2>

                <div class="review_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>

                <div class="review_social">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

                <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam facere 
                    blanditiis in fugiat tempore necessitatibus aliquid.
                </p>

            </div>

        </div>

        <div class="review_card">

            <div class="review_profile">
                <img src="public/img/review_2.png">
            </div>

            <div class="review_text">
                <h2 class="name">Reviewer</h2>

                <div class="review_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>

                <div class="review_social">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam facere 
                    blanditiis in fugiat tempore necessitatibus aliquid.
                </p>

            </div>

        </div>

        <div class="review_card">

            <div class="review_profile">
                <img src="public/img/review_3.png">
            </div>

            <div class="review_text">
                <h2 class="name">Reviewer</h2>

                <div class="review_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>

                <div class="review_social">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam facere 
                    blanditiis in fugiat tempore necessitatibus aliquid.
                </p>

            </div>

        </div>

        <div class="review_card">

            <div class="review_profile">
                <img src="public/img/review_4.png">
            </div>

            <div class="review_text">
                <h2 class="name">Reviewer</h2>

                <div class="review_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>

                <div class="review_social">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

                <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam facere 
                    blanditiis in fugiat tempore necessitatibus aliquid.
                </p>

            </div>

        </div>

    </div>

</div>



<!--Order-->

<div class="order" id="Order">
    <h1><span>Order</span>Now</h1>

    <div class="order_main">

        <div class="order_image">
            <img src="public/img/order_image.png">
        </div>

        <form action="#">

            <div class="input">
                <p>Name</p>
                <input type="text" placeholder="you name">
            </div>

            <div class="input">
                <p>Email</p>
                <input type="email" placeholder="you email">
            </div>

            <div class="input">
                <p>Number</p>
                <input placeholder="you number">
            </div>

            <div class="input">
                <p>How Much</p>
                <input type="number" placeholder="how many order">
            </div>

            <div class="input">
                <p>You Order</p>
                <input placeholder="food name">
            </div>

            <div class="input">
                <p>Address</p>
                <input placeholder="you Address">
            </div>

            <a href="category.php?id=1" class="order_btn">Order Now</a>

        </form>

    </div>

</div>



<!--Team-->

<div class="team">
    <h1>Our<span>Team</span></h1>

    <div class="team_box">
        <div class="profile">
            <img src="public/img/chef1.png">

            <div class="info">
                <h2 class="name">Chef</h2>
                <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>

        <div class="profile">
            <img src="public/img/chef2.png">

            <div class="info">
                <h2 class="name">Chef</h2>
                <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>

        <div class="profile">
            <img src="public/img/chef3.jpg">

            <div class="info">
                <h2 class="name">Chef</h2>
                <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>

        <div class="profile">
            <img src="public/img/chef4.jpg">

            <div class="info">
                <h2 class="name">Chef</h2>
                <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>

    </div>

</div>



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