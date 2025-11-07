@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Reply Feedback from {{ $feedback->name }}</h2>

@if(session('success'))
    <p class="text-green-500">{{ session('success') }}</p>
@endif

<p><strong>Email:</strong> {{ $feedback->email }}</p>
<p><strong>Message:</strong> {{ $feedback->message }}</p>

<form method="POST" action="{{ route('feedback.replySubmit', $feedback->id) }}">
    @csrf
    <label>Response:</label><br>
    <textarea name="response" class="border p-2 w-full">{{ old('response', $feedback->response) }}</textarea><br>
    @error('response') <span class="text-red-500">{{ $message }}</span> @enderror <br>
    <button type="submit" class="bg-blue-500 text-white p-2 rounded mt-2">Send Response</button>
</form>

<br>
<a href="{{ route('feedback.index') }}" class="text-blue-500">Back to all feedbacks</a>
@endsection

