@extends('layouts')
@section('title', 'Brands')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Brands</h1>
    <a href="{{ route('brands.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Add Brand</a>
    <table class="w-full bg-white shadow rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Name</th>
                <th class="p-2">Slug</th>
                <th class="p-2">Website</th>
                <th class="p-2">Description</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
                <tr>
                    <td class="p-2">{{ $brand->name }}</td>
                    <td class="p-2">{{ $brand->slug }}</td>
                    <td class="p-2">{{ $brand->website ?? 'N/A' }}</td>
                    <td class="p-2">{{ $brand->description ?? 'N/A' }}</td>
                    <td class="p-2">
                        <a href="{{ route('brands.edit', $brand) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('brands.destroy', $brand) }}" method="POST" class="inline">
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
