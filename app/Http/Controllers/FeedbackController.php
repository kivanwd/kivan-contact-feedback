<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    // ===================== TAMPILKAN SEMUA FEEDBACK (ADMIN) =====================
    public function index()
    {
        $feedbacks = Feedback::latest()->get();
        return view('feedback.index', compact('feedbacks'));
    }

    // ===================== FORM BALAS FEEDBACK =====================
    public function replyForm($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback.reply', compact('feedback'));
    }

    // ===================== SIMPAN BALASAN ADMIN =====================
    public function replySubmit(Request $request, $id)
    {
        $request->validate([
            'response' => 'required'
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->update(['response' => $request->response]);

        return redirect()->route('feedback.index')->with('success', 'Reply sent successfully!');
    }

    // ===================== FORM FEEDBACK (USER) =====================
    public function create()
    {
        return view('feedback.create');
    }

    // ===================== SIMPAN FEEDBACK (USER) =====================
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Feedback::create($request->all());

        return redirect()->route('feedback.create')->with('success', 'Feedback submitted successfully!');
    }

    // ===================== HAPUS FEEDBACK (ADMIN) =====================
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('feedback.index')->with('success', 'Feedback deleted successfully!');
    }
}

