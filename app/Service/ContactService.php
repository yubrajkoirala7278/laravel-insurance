<?php
namespace App\Service;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Jobs\SendEmail;

class ContactService{

    public function storeService($request){
        Contact::create($request);
        $emailJob = (new      SendEmail($request))->delay(Carbon::now()->addSecond(10));
        dispatch($emailJob);
    }
}