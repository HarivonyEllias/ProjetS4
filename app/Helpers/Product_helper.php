<?php
use App\Models\PostgresFunctions\AllPhotosProduct;
use App\Models\PostgresTables\Genre;
use App\Models\PostgresTables\HeartReaction;
use App\Models\PostgresTables\ProductEye;
use App\Models\PostgresTables\ProductStock;

if (!function_exists('getPhotosForProduct')) {
    function getPhotosForProduct($productID) {
        $allPhotosModel = new AllPhotosProduct();
        return $allPhotosModel->getAllIdPhotoForProduct($productID);
    }
}

if (!function_exists('getProductsByGenre')) {
    function getProductsByGenre($genreID) {
        $genre = new Genre();
        return $genre->getProductsByGenre($genreID);
    }
}

if (!function_exists('isHeartReacted')) {
    function isHeartReacted($customerId, $productId) {
        $heartReaction = new HeartReaction($customerId, $productId);
        return $heartReaction -> isHeartReacted();
    }
}

if (!function_exists('countNumberProductReacted')) {
    function countNumberProductReacted($customerId) {
        $heartReaction = new HeartReaction($customerId, 0);
        return $heartReaction->countNumberProductReacted();
    }
}

if (!function_exists('isView')) {
    function isView($customerId, $productId) {
        $product_eye = new ProductEye($customerId, $productId);
        return $product_eye -> isView();
    }
}

                /*SERVER _SIDE */
if (!function_exists('getQuantityProduct')) {
    function getQuantityProduct($productId) {
        $productStock = new ProductStock($productId);
        return $productStock -> getQuantityProduct();
    }
}
