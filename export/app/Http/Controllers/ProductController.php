<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Contact info
        $contact = User::select(
            'business_address',
            'phone_number',
            'email',
            'business_hours'
        )->where('id', 1)->first();

        // Filters
        $selectedCategory = $request->get('category', 'all');
        $selectedSort     = $request->get('sort', 'featured');

        // Query
        $query = Product::query();

        if ($selectedCategory !== 'all') {
            $query->where('category', $selectedCategory);
        }

        if ($selectedSort === 'name') {
            $query->orderBy('product_name', 'asc');
        } else {
            $query->orderBy('created_at', 'desc'); // featured = newest
        }

        $products = $query->get();

        return view('products.index', compact(
            'products',
            'contact',
            'selectedCategory',
            'selectedSort'
        ));
    }
}
