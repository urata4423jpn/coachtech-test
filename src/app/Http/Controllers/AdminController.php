<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::query();

        if ($request->filled('name')) {
            $contacts->where('first_name', 'like', "%{$request->name}%")
                ->orWhere('last_name', 'like', "%{$request->name}%");
        }

        $contacts = $contacts->paginate(7);
        return view('admin.index', compact('contacts'));
    }
}
