<?php
class Product extends Database
{
    // Lấy tất cả sản phẩm
    public function getAllProducts()
    {
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('SELECT * FROM `products`');
        return parent::select($sql);
    }

    // Lấy tất cả sản phẩm kèm categories
    public function getAllProductsWithCategories()
    {
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('SELECT DISTINCT products.*, (SELECT GROUP_CONCAT(categories.id,"-", categories.name)
        FROM `categories`
        INNER JOIN category_product
        ON category_product.category_id = categories.id
        WHERE category_product.product_id = products.id) AS category_name
        FROM `products`
        INNER JOIN category_product
        ON category_product.product_id = products.id');
        return parent::select($sql);
    }

    // Lấy 1 sản phẩm theo id
    public function getProductById($id)
    {
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('SELECT * FROM `products` WHERE `id`=?');
        $sql->bind_param('i', $id);
        return parent::select($sql)[0];
    }

    //Lấy sản phẩm theo số trang
    public function getProductByPage($page,$perPage)
    {
        $start=($page - 1)*$perPage;
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('SELECT * FROM `products` LIMIT ?,?');
        $sql->bind_param('ii',  $start,$perPage);
        return parent::select($sql);
    }

    //Lấy tất cả sản phẩm
    public function getTotal()
    {
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('SELECT COUNT(*) as total FROM `products`');
        return parent::select($sql)[0]['total'];
    }

    // Lấy các sản phẩm theo mảng ids
    public function getProductsByIds($arrIds)
    {
        // 2. Tạo câu SQL
        $chamHoi = str_repeat('?,', count($arrIds) -1 ) . '?';
        $type = str_repeat('i', count($arrIds));

        $sql = parent::$connection->prepare("SELECT * FROM `products` WHERE `id` IN ( $chamHoi )");
        $sql->bind_param($type, ...$arrIds);
        return parent::select($sql);
    }

    // Lấy 1 sản phẩm theo id kèm category_id
    public function getProductByIdWithCategories($id)
    {
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('SELECT products.*, GROUP_CONCAT(category_product.category_id) AS category_id
        FROM `products`
        INNER JOIN category_product
        ON category_product.product_id = products.id
        WHERE `id`=?');
        $sql->bind_param('i', $id);
        return parent::select($sql)[0];
    }

    // Lấy 1 sản phẩm theo category id
    public function getProductsByCategory($id)
    {
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('SELECT *
                                            FROM products
                                            INNER JOIN category_product
                                            ON products.id = category_product.product_id
                                            WHERE category_product.category_id = ?');
        $sql->bind_param('i', $id);
        return parent::select($sql);
    }

    // Search
    public function search($keyword)
    {
        // 2. Tạo câu SQL
        $keyword = "%{$keyword}%";
        $sql = parent::$connection->prepare('SELECT * FROM `products` WHERE `name` LIKE ?');
        $sql->bind_param('s', $keyword);
        return parent::select($sql);
    }


    // Store a product
    public function store($productName, $productPrice, $productDescription, $productImage, $categoriesId)
    {
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('INSERT INTO `products`(`name`, `price`, `description`, `image`) VALUES (?, ?, ?, ?)');
        $sql->bind_param('siss', $productName, $productPrice, $productDescription, $productImage);
        $sql->execute();

        // Thêm vào category_product
        $insertedProduct = parent::$connection->insert_id;
        
        // Cách 1
        // foreach ($categoriesId as $categoryId) {            
        //     $sql = parent::$connection->prepare('INSERT INTO `category_product`(`category_id`, `product_id`) VALUES (?, ?)');
        //     $sql->bind_param('ii', $categoryId , $insertedProduct);
        //     $sql->execute();
        // }
        // return true;

        // Cách 2
        $chamHoi = '';
        $type = '';
        $insertedCategories = [];
        foreach ($categoriesId as $categoryId) {
            $chamHoi .= '(?, ?),';
            $type .= 'ii';
            array_push($insertedCategories, $categoryId, $insertedProduct);
        }
        $chamHoi = substr($chamHoi, 0, -1);

        $sql = parent::$connection->prepare('INSERT INTO `category_product`(`category_id`, `product_id`) VALUES ' . $chamHoi);
        $sql->bind_param($type, ...$insertedCategories);
        return $sql->execute();
    }


    // Search
    public function update($productId, $productName, $productPrice, $productDescription, $productImage, $categoriesId)
    {
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('UPDATE `products` SET `name`=?,`price`=?,`description`=?,`image`=? WHERE `id`=?');
        $sql->bind_param('sissi', $productName, $productPrice, $productDescription, $productImage, $productId);
        $sql->execute();

        // Xóa danh mục cũ
        $sql = parent::$connection->prepare('DELETE FROM `category_product` WHERE `product_id`=?');
        $sql->bind_param('i', $productId);
        $sql->execute();

        // Thêm danh mục mới
        $chamHoi = '';
        $type = '';
        $insertedCategories = [];
        foreach ($categoriesId as $categoryId) {
            $chamHoi .= '(?, ?),';
            $type .= 'ii';
            array_push($insertedCategories, $categoryId, $productId);
        }
        $chamHoi = substr($chamHoi, 0, -1);

        $sql = parent::$connection->prepare('INSERT INTO `category_product`(`category_id`, `product_id`) VALUES ' . $chamHoi);
        $sql->bind_param($type, ...$insertedCategories);
        return $sql->execute();
    }

    public function destroy($productId)
    {
        // Xoa product
        $sql = parent::$connection->prepare('DELETE FROM `products` WHERE `id`=?');
        $sql->bind_param('i', $productId);
        $sql->execute();

        // Xoa category_product
        $sql = parent::$connection->prepare('DELETE FROM `category_product` WHERE `product_id`=?');
        $sql->bind_param('i', $productId);
        return $sql->execute();
    }


        
}
