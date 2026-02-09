<?php

use Illuminate\Support\Facades\Route;

$overviewValues = [
    [
        "img" => "/assets/icons/sender-id-1.png",
        "title" => "Register for a sender ID",
        "description" => "To register your alphanumeric Sender ID...",
    ],
    [
        "img" => "/assets/icons/sender-id-2.png",
        "title" => "Apply for bulk data",
        "description" => "To register your alphanumeric Sender ID...",
    ],
    [
        "img" => "/assets/icons/sender-id-3.png",
        "title" => "Send Email",
        "description" => "Send emails to your mailing list",
    ],
];

Route::get('/', fn () => view('welcome'));
Route::get('/dashboard/home', fn () => view('dashboard.home', ['overviewValues' => $overviewValues]));
Route::get('/dashboard/survey/questions', fn() => view('dashboard.survey.questions'));
