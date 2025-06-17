@extends('layouts')
@section('title', 'Create Brand')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-semibold text-center mb-8">Create Brand</h1>
        <form action="{{ route('brands.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block mb-2 font-medium text-gray-700">Name <span class="text-red-500">*</span></label>
                <input id="name" name="name" type="text" required
                    class="block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('name') }}" />
                @error('name') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="description" class="block mb-2 font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
                @error('description') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="website" class="block mb-2 font-medium text-gray-700">Website</label>
                <input id="website" name="website" type="url"
                    class="block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('website') }}" />
                @error('website') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-md transition duration-200">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
