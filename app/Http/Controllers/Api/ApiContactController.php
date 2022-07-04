<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Response;

class ApiContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContactRequest $request
     * @return Response
     */
    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());
        return response()->json($contact);
    }
}
