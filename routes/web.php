<?php

use Illuminate\Support\Facades\Route;
use Michelf\MarkdownExtra;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit']);

Route::get('/project/{projectName}', function(string $projectName) {
    $file = resource_path('views/markdown/' . $projectName . '.md');
    if (!file_exists($file)) {
        abort(404);
    }
    $markdownContent = MarkdownExtra::defaultTransform(file_get_contents($file));
    return view('pages.project', [
        'content' => $markdownContent,
    ]);
})->name('project');
