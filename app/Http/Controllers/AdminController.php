<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::all(); // fetch all contacts
        return view('admin', compact('contacts')); // pass data to admin.blade.php
    }
}
