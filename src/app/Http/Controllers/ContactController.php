<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category; 
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        $categories = Category::all(); 
        return view('contact.create', compact('categories')); 
    }

    public function confirm(ContactRequest $request)
    {
        $input = $request->all();
        return view('contact.confirm', compact('input'));
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->route('contact.thanks');
    }

    public function thanks()
    {
        return view('contact.thanks');
    }
}
