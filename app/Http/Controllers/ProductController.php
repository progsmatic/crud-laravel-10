<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductController extends Controller
{

    public function index(): View
    {
        $products = Product::latest()->paginate(5);

        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create(): View
    {
        return view('products.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }


    public function show(Product $product): View
    {
        return view('products.show', compact('product'));
    }


    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, Product $product): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }


    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
