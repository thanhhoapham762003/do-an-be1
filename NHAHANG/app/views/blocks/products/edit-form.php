<div class="container">
    <h1>Edit a product</h1>
    <form action="update.php" method="post">
        <input type="hidden" class="form-control" id="productId" name="productId" value="<?php echo $product['id'] ?>">
        <div class="mb-3">
            <label for="productName" class="form-label">Name</label>
            <input type="text" class="form-control" id="productName" name="productName" value="<?php echo $product['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Price</label>
            <input type="text" class="form-control" id="productPrice" name="productPrice" value="<?php echo $product['price'] ?>">
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea class="form-control" id="productDescription" name="productDescription"><?php echo $product['description'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="productImage" class="form-label">Image</label>
            <input type="text" class="form-control" id="productImage" name="productImage" value="<?php echo $product['image'] ?>">
        </div>

        <?php
        $productCategories = explode(',', $product['category_id']);
        
        foreach ($categories as $category) :
        ?>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $category['id'] ?>" id="category_<?php echo $category['id'] ?>" name="categoriesId[]" <?php echo in_array($category['id'], $productCategories) ? 'checked' : '' ?>>
            <label class="form-check-label" for="category_<?php echo $category['id'] ?>">
                <?php echo $category['name'] ?>
            </label>
        </div>
        <?php
        endforeach;
        ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>