<?php

// use App\Route;

use App\Services\ContactForm;

$test = new ContactForm;
echo json_encode($test->getContactData());


// // Add base route (startpage)
// Route::add('/', function() {
//     ContactForm::view('index');
// });

// // Simple test route that simulates static html file
// Route::add('/test.html', function() {
//     echo 'Hello from test.html';
// });

// // Post route example
// Route::add('/contact-form', function() {
//     ContactForm::view('contact-form.index');
// }, 'get');

// // Post route example
// Route::add('/contact-form', function() {
//     ContactForm::postRequest($_POST);
// }, 'post');

// // Accept only numbers as parameter. Other characters will result in a 404 error
// Route::add('/foo/([0-9]*)/bar', function($var1) {
//     echo $var1.' is a great number!';
// });

// Route::run('/');