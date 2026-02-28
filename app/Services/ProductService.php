<?php
namespace App\Services;


class ProductService
{
     protected $products;

    public function __construct(array $products = [])
    {
        // provide a default so the container can auto-resolve this class
        // even when the service provider hasn't yet bound it.
        $this->products = $products;
    }

    public function listProduct()
    {
        return $this->products;
    }
    
    public function insert($products)
    {
        return $this->products[] = $products;
    }
    
}