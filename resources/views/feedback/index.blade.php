@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto bg-white p-6 rounded-2xl shadow-md animate-fadeIn">
    <h2 class="text-2xl font-bold mb-6 text-gray-700 text-center">📋 All Feedbacks</h2>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 border border-green-300 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @if($feedbacks->isEmpty())
        <p class="text-center text-gray-500">No feedback yet.</p>
    @else
        <div class="overflow-x-auto">
            <table class="w-full border-collapse shadow-md rounded-xl overflow-hidden">
                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="border p-3 text-left">Name</th>
                        <th class="border p-3 text-left">Email</th>
                        <th class="border p-3 text-left">Message</th>
                        <th class="border p-3 text-left">Response</th>
                        <th class="border p-3 text-center">Action</th>
                        <th class="border p-3 text-center">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $fb)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border p-3">{{ $fb->name }}</td>
                            <td class="border p-3">{{ $fb->email }}</td>
                            <td class="border p-3">{{ $fb->message }}</td>
                            <td class="border p-3">{{ $fb->response ?? '-' }}</td>
                            <td class="border p-3 text-center flex gap-3 justify-center">
                                <a href="{{ route('feedback.replyForm', $fb->id) }}" 
                                   class="bg-blue-400 hover:bg-blue-500 text-white px-3 py-1 rounded-md text-sm transition">
                                   Reply
                                </a>
                                <form action="{{ route('feedback.destroy', $fb->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-rose-400 hover:bg-rose-500 text-white px-3 py-1 rounded-md text-sm transition">
                                        Delete
                                    </button>
                                </form>
                            </td>
                            <td class="border p-3 text-center">{{ $fb->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
        animation: fadeIn 0.5s ease-in-out;
    }
</style>
@endsection
