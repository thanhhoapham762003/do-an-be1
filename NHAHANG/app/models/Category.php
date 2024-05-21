<?php
class Category extends Database
{
    // Lấy tất cả danh mục
    public function getAllCategories()
    {
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('SELECT * FROM `categories`');
        return parent::select($sql);
    }

    // Lấy tất cả danh mục của 1 sản phẩm
    public function getCategoriesByProduct($id)
    {
        // 2. Tạo câu SQL
        $sql = parent::$connection->prepare('SELECT *
                                            FROM `categories`
                                            INNER JOIN category_product
                                            ON category_product.category_id = categories.id
                                            WHERE category_product.product_id = ?');
        $sql->bind_param('i', $id);
        return parent::select($sql);
    }
}


