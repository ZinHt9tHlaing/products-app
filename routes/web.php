<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;


Route::get('/', function () {
    return view('home', [
        "title"    => "This is Home page.",
        "products" => Products::all(),
    ]);
});

Route::get("/about", function () {
    return view("about", [
        "name" => "zhh" . fake()->numberBetween(10, 100),
    ]);
});

Route::get("/contact", function () {
    return view("contact-us");
});

Route::get("/products/{id}", function ($id) {
    $product = Products::findOrFail($id);
    return view("product-detail", [
        "product" => $product
    ]);
});
