<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Jobs\ReplyContact;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('back.contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show(int $id): View
    {
        $contact = Contact::findOrFail($id);
        return view('back.contact.show', compact('contact'));
    }


    public function reply(int $contact): View
    {
        $contact = Contact::findOrFail($contact);
        return view('back.contact.reply', compact('contact'));
    }

    public function send(Request $request, int $contact): RedirectResponse
    {
        $contact = Contact::findOrFail($contact);

        ReplyContact::dispatch($contact, $request->title, $request->message, Auth::user());
        sweetalert()->addSuccess('Kuyruğa eklendi.');
        return redirect()->route('admin.contacts.index');
    }
}
