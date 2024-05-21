<div class="container">
    <h1>Create a product</h1>
    <form action="store.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="productName" class="form-label">Name</label>
            <input type="text" class="form-control" id="productName" name="productName">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Price</label>
            <input type="text" class="form-control" id="productPrice" name="productPrice">
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea class="form-control" id="productDescription" name="productDescription"></textarea>
        </div>
        <div class="mb-3">
            <label for="productImage" class="form-label">Image</label>
            <input type="file" class="form-control" id="productImage" name="productImage">
        </div>

        <?php
        foreach ($categories as $category) :
        ?>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $category['id'] ?>" id="category_<?php echo $category['id'] ?>" name="categoriesId[]">
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