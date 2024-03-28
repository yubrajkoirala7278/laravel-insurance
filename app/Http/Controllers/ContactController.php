<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactRequest $request){
       try{
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message'=>$request->message
        ]);
        return response()->json([
                'success' => 'Form added successfully'
        ]);
       }catch(\Throwable $th){
        return back()->with('error',$th->getMessage());
       }
    }
}
