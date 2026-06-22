<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        Log::alert('Contact form submission', $validated);
        Mail::to('shabianarsyl@gmail.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Message sent successfully. I will get back to you soon.');
    }

    public function certificate()
    {
        $courses = \App\Models\Certificate::where('type', 'url')->orderBy('id')->get();
        $certificates = \App\Models\Certificate::where('type', 'image')->orderBy('id')->paginate(8);

        return view('pages.certificate', compact('courses', 'certificates'));
    }
}
