<?php
namespace App\Services;

use App\Controllers\Controller;

class ContactForm extends Controller
{
    public function getContactData()
    {
        $sql = 'SELECT * FROM customers';
        return $this->all($sql);
    }
}