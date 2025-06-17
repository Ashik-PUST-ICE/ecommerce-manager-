@extends('layouts')
@section('title', 'Products')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Products</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Add Product</a>
    <table class="w-full bg-white shadow rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Name</th>
                <th class="p-2">Slug</th>
                <th class="p-2">Price</th>
                <th class="p-2">SKU</th>
                <th class="p-2">Brand</th>
                <th class="p-2">Categories</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="p-2"><a href="{{ route('products.show', $product) }}" class="text-blue-600">{{ $product->name }}</a></td>
                    <td class="p-2">{{ $product->slug }}</td>
                    <td class="p-2">${{ number_format($product->price, 2) }}</td>
                    <td class="p-2">{{ $product->sku }}</td>
                    <td class="p-2">{{ $product->brand ? $product->brand->name : 'No Brand' }}</td>
                    <td class="p-2">{{ $product->categories->pluck('name')->implode(', ') }}</td>
                    <td class="p-2">
                        <a href="{{ route('products.edit', $product) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
