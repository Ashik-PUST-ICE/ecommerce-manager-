@extends('layouts')
@section('title', 'Product Details')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Product Details</h1>
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
        <p><strong>Slug:</strong> {{ $product->slug }}</p>
        <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
        <p><strong>Stock Keeping Unit:</strong> {{ $product->sku }}</p>
        <p><strong>Brand:</strong> {{ $product->brand->name }}</p>
        <p><strong>Description:</strong> {{ $product->description ?? 'No description' }}</p>
        <p><strong>Categories:</strong> {{ $product->categories->pluck('name')->implode(', ') }}</p>
        <div class="mt-4">
            <a href="{{ route('products.edit', $product) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
            <a href="{{ route('products.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded">Back to Products</a>
        </div>
    </div>
</div>
@endsection
