<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class AppController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        // Validate the form input
         $validated = $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'phone'      => 'required',
            'message'    => 'required',
        ]);
        // Save the contact to the database
        // Contact::create($request->all());
        contact::create($validated);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    public function blog(){
        return view('blog');
    }
    public function about(){
        return view('about');
    }

}
