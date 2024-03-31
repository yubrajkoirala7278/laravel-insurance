<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Service\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactService;
    public function __construct()
    {
        $this->contactService = new ContactService();
    }

    public function store(ContactRequest $request)
    {
        try {
            $this->contactService->storeService($request->except('_token'));
            return response()->json([
                'success' => 'Thank you for contact us. we will contact you shortly.'
            ]);
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
