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
        $certImgs = collect([
            'Sertifikat-Mentor-INLAB-Shabian-Arsyl-Yonanta_page-0001-1-1-scaled.png',
            'Frame-1-11-scaled.png',
            'Frame-1-30-scaled.png',
            'Frame-1-15-scaled.png',
            'Frame-1-4-scaled.png',
            'Frame-1-14-scaled.png',
            'Frame-1-5-scaled.png',
            'Frame-1-8-1-scaled.png',
            'Frame-1-5-1-scaled.png',
            'Frame-1-6-1-scaled.png',
            'Frame-1-10-scaled.png',
            'Frame-1-7-scaled.png',
            'Frame-1-9-scaled.png',
            'Frame-1-6-scaled.png',
            'Frame-1-3-scaled.png',
            'Frame-1-2-scaled.png',
            'Frame-1-1-scaled.png',
            'Frame-1-29-scaled.png',
            'Frame-1-28-scaled.png',
            'Frame-1-27-scaled.png',
            'Frame-1-26-scaled.png',
            'Frame-1-25-scaled.png',
            'Frame-1-24-scaled.png',
            'Frame-1-23-scaled.png',
            'Frame-1-22-scaled.png',
            'Frame-1-21-scaled.png',
            'Frame-1-20-scaled.png',
            'Frame-1-19-scaled.png',
            'Frame-1-18-scaled.png',
            'Frame-1-17-scaled.png',
            'Frame-1-16-scaled.png',
            'Frame-1-13-scaled.png',
            'Frame-1-12-scaled.png',
            'Frame-1-8-scaled.png',
            'Sertifikat_Shabian-Arsyl-Yonantaa_page-0023.jpg',
        ]);

        $page = request()->integer('page', 1);
        $perPage = 8;
        $certificates = new LengthAwarePaginator(
            $certImgs->forPage($page, $perPage)->values(),
            $certImgs->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('pages.certificate', compact('certificates'));
    }
}
