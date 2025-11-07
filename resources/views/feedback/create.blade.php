@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Submit Feedback</h2>

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-2 mb-4 rounded">{{ session('success') }}</div>
@endif

<form action="{{ route('feedback.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block font-semibold">Name</label>
        <input type="text" name="name" class="w-full border p-2 rounded" value="{{ old('name') }}">
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div>
        <label class="block font-semibold">Email</label>
        <input type="email" name="email" class="w-full border p-2 rounded" value="{{ old('email') }}">
        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div>
        <label class="block font-semibold">Message</label>
        <textarea name="message" class="w-full border p-2 rounded">{{ old('message') }}</textarea>
        @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
</form>
@endsection
