<div class="menu" id="Menu">
    <h1>Our<span>Menu</span></h1>
    <div class="menu_box">
    <?php
        foreach ($products as $product) :
        ?>
        <div class="menu_card">
            <div class="menu_image">
                <img src="public/img/<?php echo $product['image'] ?>">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2><?php echo $product['name'] ?></h2>
                <?php
                        $description = trim(strip_tags($product['description']));
                        if(strlen($description) >= 100) {
                            $description = mb_substr($description, 0, mb_strpos($description, ' ', 100));
                        }
                        ?>
                <p>
                <?php echo $description ?>
                </p>
                <h3>$<?php echo $product['price'] ?></h3>
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="product.php?id=<?php echo $product['id'] ?>" class="menu_btn">Order Now</a>
            </div>

        </div> 
        <?php
        endforeach
        ?>
    </div>

</div>