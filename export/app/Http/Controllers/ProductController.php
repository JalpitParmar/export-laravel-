<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Show all products (no category)
     * URL: /products
     */
    public function index(Request $request)
    {
        return $this->productList($request, 'all');
    }

    /**
     * Show products by category
     * URL: /products/category/{category}
     */
    public function category(Request $request, $category)
    {
        return $this->productList($request, $category);
    }

    /**
     * Shared logic (DRY principle)
     */
    private function productList(Request $request, $category)
    {
        // Contact info
        $contact = User::select(
            'business_address',
            'phone_number',
            'email',
            'business_hours'
        )->where('id', 1)->first();

        // Sorting
        $selectedSort = $request->get('sort', 'featured');

        // Query
        $query = Product::query();

        if ($category !== 'all') {
            $query->where('category', $category);
        }

        if ($selectedSort === 'name') {
            $query->orderBy('product_name', 'asc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $products = $query->get();

        return view('product', [
            'products'         => $products,
            'contact'          => $contact,
            'selectedCategory' => $category,
            'selectedSort'     => $selectedSort,
        ]);
    }

    public function show($id){

        $product = Product::findOrFail($id);
    
        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();
    
        $contact = User::select(
            'business_address',
            'phone_number',
            'email'
        )->where('id', 1)->first();
    
        return view('product-detail', compact(
            'product',
            'relatedProducts',
            'contact'
        ));
    }

}
