@extends('layouts')
@section('title', 'Edit Product')
@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
        <form action="{{ route('products.update', $product) }}" method="POST" class="bg-white p-6 rounded-lg shadow">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="w-full p-2 border rounded-lg"
                    required>
                @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="description" class="w-full p-2 border rounded-lg">{{ $product->description }}</textarea>
                @error('description')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Price</label>
                <input type="number" name="price" step="0.01" value="{{ $product->price }}"
                    class="w-full p-2 border rounded-lg" required>
                @error('price')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">SKU</label>
                <input type="text" name="sku" value="{{ $product->sku }}" class="w-full p-2 border rounded-lg"
                    required>
                @error('sku')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Brand</label>
                <select name="brand_id" class="w-full p-2 border rounded-lg" required>
                    <option value="">Select a Brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}</option>
                    @endforeach
                </select>
                @error('brand_id')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Categories</label>
                @foreach ($categories as $category)
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                            {{ $product->categories->contains($category->id) ? 'checked' : '' }}>
                        {{ $category->name }}
                    </label>
                @endforeach
                @error('categories')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
@endsection
