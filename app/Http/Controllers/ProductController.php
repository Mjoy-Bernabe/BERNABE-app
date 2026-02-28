<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\TaskService;
use App\Http\Controllers\Controller;

class ProductController extends Controller

{
    protected $taskService;

/**
     * Display a listing of the resource.
     */

public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }
    public function index(ProductService $productService)
    {
       $newProduct = [
        'id' => 4,
        'name' => 'Product 4',
        'category' => 'Toys'
       ];
       $productService->insert($newProduct);

       $this->taskService->add('Add to cart');
         $this->taskService->add('Checkout'); 

         $data = [
            'products' => $productService->listProduct(),
            'tasks' => $this->taskService->getAllTask(),
            // example key, adjust as needed
            'productKey' => 'DEFAULT-KEY-123'
         ];
        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductService $productService, string $id)
     {
        $products = collect($productService->listProduct())->filter(function ($item) use ($id) {;
         return $item['id'] == $id;
        })->first();
        return $products;
     }

     public function first()
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
