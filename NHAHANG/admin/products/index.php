<?php
require_once '../../config/database.php';

$page=1;
$perPage=4;

if(isset($_GET['page'])){
    $page=$_GET['page'];
}

$template = new Template();
$productModel = new Product();
$products = $productModel->getProductByPage($page,$perPage);
$total= $productModel->getTotal();

$data = [
    'title' => 'Trang home',
    'slot'  => $template->render('products/index', ['products' => $products,
                                                    'perPage' => $perPage,
                                                    'total' =>$total,
                                                    ] )
];
$template->view('layout-admin', $data);