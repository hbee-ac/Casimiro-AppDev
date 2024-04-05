<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $products = [
        [
            "id" => 1,
            "name" => "Chair",
            "price" => 150,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "id" => 2,
            "name" => "Rubber Shoe",
            "price" => 300,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "id" => 3,
            "name" => "Jacket",
            "price" => 200,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "id" => 4,
            "name" => "Pillow",
            "price" => 199,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "id" => 5,
            "name" => "Slack",
            "price" => 450,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
    ];
    public function index()
    {
        return response()->json($this->products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display product with ID: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " deleted successfully"
        ]);
    }
}
