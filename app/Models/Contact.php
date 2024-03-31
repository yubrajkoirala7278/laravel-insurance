<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;
    public $fillable=['name','email','phone','message','subject'];

    public static function boot() {
        parent::boot();
        static::created(function ($item) {
            $adminUser = User::where('is_admin', 1)->first()->email;
            Mail::to($adminUser)->send(new ContactMail($item));
        });

    }
}
