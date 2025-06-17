@extends('layouts')

@section('title', 'Create Product')

@section('content')
<div class="min-h-screen flex flex-col items-center bg-gray-100 pt-10 pb-20">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Create New Product</h1>

    <div class="w-full max-w-3xl bg-white p-10 rounded-2xl shadow-lg">
        <form action="{{ route('products.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-12 items-start gap-4">
                <label class="col-span-3 text-gray-700 font-medium pt-2">Product Name <span class="text-red-500">*</span></label>
                <div class="col-span-9">
                    <input type="text" name="name" class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-blue-400" required>
                    @error('name') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-12 items-start gap-4">
                <label class="col-span-3 text-gray-700 font-medium pt-2">Description</label>
                <div class="col-span-9">
                    <textarea name="description" rows="3" class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-blue-400"></textarea>
                    @error('description') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-12 items-start gap-4">
                <label class="col-span-3 text-gray-700 font-medium pt-2">Price ($) <span class="text-red-500">*</span></label>
                <div class="col-span-9">
                    <input type="number" name="price" step="0.01" class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-blue-400" required>
                    @error('price') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-12 items-start gap-4">
                <label class="col-span-3 text-gray-700 font-medium pt-2">Stock Keeping Unit<span class="text-red-500">*</span></label>
                <div class="col-span-9">
                    <input type="text" name="sku" class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-blue-400" required>
                    @error('sku') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-12 items-start gap-4">
                <label class="col-span-3 text-gray-700 font-medium pt-2">Brand <span class="text-red-500">*</span></label>
                <div class="col-span-9">
                    <select name="brand_id" class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-blue-400" required>
                        <option value="">-- Select Brand --</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                    @error('brand_id') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-12 items-start gap-4">
                <label class="col-span-3 text-gray-700 font-medium pt-2">Categories</label>
                <div class="col-span-9">
                    <div class="flex flex-wrap gap-3">
                        @foreach ($categories as $category)
                            <label class="inline-flex items-center gap-2 bg-gray-100 px-3 py-1 rounded-full shadow-sm">
                                <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="accent-blue-600">
                                <span class="text-gray-700 text-sm">{{ $category->name }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('categories') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="text-center pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-200">
                     Create Product
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
