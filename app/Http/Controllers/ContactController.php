<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Display the home page with contact form.
     */
    public function index(): View
    {
        return view('home');
    }

    /**
     * Store a new contact form submission.
     */
    public function store(ContactFormRequest $request): RedirectResponse
    {
        Contact::create($request->validated());

        return redirect()
            ->route('home')
            ->with('success', 'Pesan Anda berhasil dikirim! Terima kasih telah menghubungi kami.');
    }
}
