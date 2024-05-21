<div class="container">
    <div class="row">
        <div class="col-md">
            <img src="public/img/<?php echo $product['image'] ?>" alt="" class="img-fluid">
        </div>
        <div class="col-md">
            <h1><?php echo $product['name'] ?></h1>
            <h3>$<?php echo $product['price'] ?></h3>
            <?php echo $product['description'] ?>
        </div>
        <div class="col-md">
        <div class="d-grid gap-2 mt-5">
                    <form method="post" action="add_to_cart.php" > <!-- Điều hướng đến trang hiển thị giỏ hàng -->
                        <input type="hidden" id="productId" name="productId" value="<?php echo $product['id']; ?>"> <!-- Sử dụng ID thực của sản phẩm -->
                        <input type="hidden" id="quantity" name="quantity" value="1">
                        <button class="btn btn-outline-primary" type="submit" name="addToCart">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </form>
                </div>
        </div>
    </div>
</div>