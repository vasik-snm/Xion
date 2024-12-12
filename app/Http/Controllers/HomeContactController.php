<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class HomeContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the total count of contacts


        // Retrieve contact data (if needed)
        $contact_data = ContactModel::orderBy('id', 'desc')->get();

        // Pass the total count and contact data to the view
        return view('admin.home_contact', [
            'contact_data' => $contact_data,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactModel $contactModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactModel $contactModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactModel $contactModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactModel $contactModel)
    {
        //
    }
}
