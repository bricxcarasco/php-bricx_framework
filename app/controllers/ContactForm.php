<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Services\ContactForm as ContactFormService;

class ContactForm extends Controller
{
    public static function postRequest($request)
    {
        $name = $request['name'];
        self::redirect('contact-form.index', compact('name'));
    }
}