<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInfo; // Pastikan modelnya ada

class ContactController extends Controller
{
    public function index()
{
    $contacts = ContactInfo::all();
    return view('Admin.Contact.index', compact('contacts'));
}


    public function create()
    {
        return view('Admin.Contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'address' => 'required',
            'work_time' => 'required',
            'email' => 'required|email',
            'website' => 'required',
        ]);

        ContactInfo::create($request->all());
        return redirect()->route('admin.contact.index')->with('success', 'Contact information created successfully.');
    }

    public function edit($id)
    {
        $contact = ContactInfo::find($id);
        return view('Admin.Contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'phone' => 'required',
            'address' => 'required',
            'work_time' => 'required',
            'email' => 'required|email',
            'website' => 'required',
        ]);
    
        $contact = ContactInfo::find($id);
        $contact->update($request->all());
    
        return redirect()->route('admin.contact.index')->with('success', 'Contact information updated successfully.');
    }
    


    public function destroy($id)
    {
        $contact = ContactInfo::find($id);
    
        if (!$contact) {
            return redirect()->route('admin.contact.index')->with('error', 'Contact not found.');
        }
    
        $contact->delete();
        return redirect()->route('admin.contact.index')->with('success', 'Contact information deleted successfully.');
    }
    
    
}
