<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Inquiry;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $validated = $request->validated();

        Inquiry::create($validated);

        return back()->with('success', 'Message sent successfully! I will get back to you soon.');
    }
}
