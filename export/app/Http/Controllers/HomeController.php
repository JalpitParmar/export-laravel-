<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // Contact info (admin)
        $contact = User::select(
            'business_address',
            'phone_number',
            'email',
            'business_hours'
        )->where('id', 1)->first();

        // Products
        $products = Product::all();

        // Counts
        $totalCategories = Product::distinct('category')->count('category');
        $totalProducts   = Product::count();

        return view('home', compact(
            'contact',
            'products',
            'totalCategories',
            'totalProducts'
        ));
    }
    public function aboutus()
    {
        // Contact info (admin)
        $contact = User::select(
            'business_address',
            'phone_number',
            'email',
            'business_hours'
        )->where('id', 1)->first();

        // Products
        $products = Product::all();

        // Counts
        $totalCategories = Product::distinct('category')->count('category');
        $totalProducts   = Product::count();

        return view('aboutus', compact(
            'contact',
            'products',
            'totalCategories',
            'totalProducts'
        ));
    }
    public function shipping_policy()
    {
        // Contact info (admin)
        $contact = User::select(
            'business_address',
            'phone_number',
            'email',
            'business_hours'
        )->where('id', 1)->first();

        // Products
        $products = Product::all();

        // Counts
        $totalCategories = Product::distinct('category')->count('category');
        $totalProducts   = Product::count();

        return view('shipping-policy', compact(
            'contact',
            'products',
            'totalCategories',
            'totalProducts'
        ));
    }
}
