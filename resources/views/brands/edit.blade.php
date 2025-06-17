@extends('layouts')
@section('title', 'Edit Brand')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Brand</h1>
    <form action="{{ route('brands.update', $brand) }}" method="POST" class="bg-white p-6 rounded-lg shadow">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ $brand->name }}" class="w-full p-2 border rounded-lg" required>
            @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full p-2 border rounded-lg">{{ $brand->description }}</textarea>
            @error('description') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Website</label>
            <input type="url" name="website" value="{{ $brand->website }}" class="w-full p-2 border rounded-lg">
            @error('website') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
