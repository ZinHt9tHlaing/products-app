<?php

use App\Models\Product;
use App\Models\TestProducts;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home", [
        "title" => "Products",
        "products" => Product::all()
    ]);
});

Route::get(("/products/{id}"), function ($id) {
    return view("product-detail", [
        "title" => "Product Detail",
        "product" => Product::findOrFail(($id))
    ]);
});
