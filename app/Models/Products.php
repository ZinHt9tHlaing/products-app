<?php

namespace App\Models;

class Products
{
    public function __construct(public $id, public $name, public $price) {}

    public static function all()
    {
        return collect([
            new static(1, "Iphone", 500),
            new static(2, "Macbook", 1000),
            new static(3, "IWatch", 200),
            new static(4, "Imac", 1200),
        ]);
    }

    public static function find($id)
    {
        $products = Products::all();
        $product = $products->firstWhere("id", $id);
        return $product;
    }

    public static function findOrFail($id)
    {
        $product = Products::find($id);
        if (!$product) {
            abort((404));
        }
        return $product;
    }
}
