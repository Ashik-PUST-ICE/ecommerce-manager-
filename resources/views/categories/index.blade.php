@extends('layouts')
@section('title', 'Categories')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Categories</h1>
    <a href="{{ route('categories.create') }}" class="bg-blue-600 text-white px-4 py-2 mb-4 inline-block">Add Category</a>
    <table class="w-full bg-white shadow rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Name</th>
                <th class="p-2">Slug</th>
                <th class="p-2">Color</th>
                <th class="p-2">Description</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="p-2">{{ $category->name }}</td>
                    <td class="p-2">{{ $category->slug }}</td>
                    <td class="p-2">
                        <span class="inline-block w-6 h-6" style="background-color: {{ $category->color }}"></span>
                        {{ $category->color }}
                    </td>
                    <td class="p-2">{{ $category->description ?? 'N/A' }}</td>
                    <td class="p-2">
                        <a href="{{ route('categories.edit', $category) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
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
