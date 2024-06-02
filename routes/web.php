<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter/', App\Livewire\Counter::class);
Route::get('/register', App\Livewire\Registeruser::class);
Route::get('/dropdown', App\Livewire\DropDown::class);
Route::get('/fileupload', App\Livewire\FileUpload::class);
Route::get('/users', App\Livewire\AllUsers::class);
Route::get('/products', App\Livewire\AllProducts::class);
Route::get('/poll', App\Livewire\Polling::class);
Route::get('/loading', App\Livewire\LoadingExample::class);
Route::get('/calculator', App\Livewire\Calculator::class);
Route::get('/posts', App\Livewire\AllPosts::class);
Route::get('/posts/create', App\Livewire\CreatePost::class);
Route::get('/multistep', App\Livewire\MultiStep::class);
Route::get('/js', App\Livewire\JsComponent::class);
Route::get('/transition', App\Livewire\Transition::class);
Route::get('/input', App\Livewire\DynamicInput::class);
Route::get('/patients', App\Livewire\Patients::class);
Route::get('/confirm', App\Livewire\WireConfirm::class);
Route::get('/user-details', App\Livewire\UserDetails::class);
Route::get('/sweet-alert', App\Livewire\SweetAlert::class);
Route::get('/image-upload', App\Livewire\ImageUpload::class);
Route::get('/multiple-uploads', App\Livewire\MultipleUploads::class);
Route::get('/cost-calculator', App\Livewire\CostCalculator::class);
Route::get('loan', App\Livewire\LoanCalculator::class);
Route::get('login', App\Livewire\Login::class);
Route::get('drag-drop', App\Livewire\DragDrop::class);
Route::get('chart', App\Livewire\ChartComponent::class);
