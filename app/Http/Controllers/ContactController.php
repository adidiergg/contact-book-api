<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Contact::all());
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = Contact::create($request->all());
        return response()->json($user, 201);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());
        return response()->json($contact);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response()->json(null, 204);
        //
    }
}
